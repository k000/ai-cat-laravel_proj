<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{

    public function index(){

      //全てのパラメータをここで渡すこと
      $posts = Post::orderBy('created_at', 'desc')->paginate(15);
      return view('post.all',[
          'posts' => $posts,
      ]);
    }


    //検索メソッド
    //serach
    public function serach(Request $request){

      $keyword = $request->keyword;
      $category = $request->category;
      $prefecture = $request->prefecture;
      $city = $request->city;

      $query = Post::query();

      if(!empty($keyword)){
        $query->where('comment','like','%'.$keyword.'%')
              ->orWhere('name', 'like','%'.$keyword.'%');
      }

      if(!empty($prefecture)){
        $query->where('prefecture','=',$prefecture);
      }

      if(!empty($city)){
        $query->where('city','=',$city);
      }

      if(!empty($category)){
        $query->where('category','=',$category);
      }


      $posts = $query->orderBy('created_at', 'desc')->paginate(15);

      return view('post.serach_detail',['posts' => $posts]);

    }



    //都道府県から入る一覧データ。完全に上の検索とは乖離している
    public function getlists($param){

      $posts = DB::table('posts')
                        ->where('prefecture','=',$param)
                        ->orderBy('created_at','desc')
                        ->paginate(15);

      return view('post.list',[
        'posts' => $posts,
        'prefecture_info' => $param
      ]);

    }



    //保存処理
    public function store(Request $request){
    //  $path = $request->file('image')->store('upload');
    //  echo $path;



    $this->validate($request,[
      'prefecture' => 'required',
      'city' => 'required',
      'category' => 'required',
      'name' => 'required|max:255',
      'comment' => 'required',
      'select_file' => 'image|mimes:jpeg,png,jpg,gif|max:3000'
    ],[
      'category.required' => ':attributeを選択してください',
      'name.required' => ':attributeは必須項目です',
      'comment.required' => ':attributeは必須項目です',
      'prefecture.required' => ':attributeを選択してください',
      'city.required' => ':attributeを選択してください',
      'select_file.image' => ':attributeは画像のみ添付可能です',
      'select_file.mimes' => ':attributeの形式はjpeg, png, jpg, gif.のみ添付可能です',
      'select_file.max' => ':attributeのサイズは3000キロバイト以下のみ可能です。'
    ],[
      'name' => '投稿者',
      'category' => 'カテゴリー',
      'prefecture' => '都道府県',
      'city' => '市区町村',
      'select_file' => 'ファイル',
      'comment' => 'コメント'
    ]);



      $new_name = "";

      //画像のアップロードがあった場合
      if($request->file('select_file') != ""){
        $image = $request->file('select_file');
        //拡張子の取得 → getClientOriginalExtension();
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        //echo public_path('images');
        //C:\xampp\htdocs\laravel\CatMap\public\images
        //フォルダがない場合は作成されます
        $image->move(public_path('images'),$new_name);
      }



      //グーグルマップのモノがあった場合
      if(!empty($request->map)){

        if(strpos($request->map,"https://www.google.com/maps/embed") === false){
            return back()->with('maperror','グーグルマップの埋め込みのみ可能です。埋め込みタグを確認してください');
        }
        if(strpos($request->map,"<iframe src=") === false){
            return back()->with('maperror','グーグルマップの埋め込みのみ可能です。埋め込みタグを確認してください');
        }


      }

      $mapinfo = $request->map;
      $mapinfo         = $request->map;
      $start_posi  = mb_strpos($mapinfo , '"') + 1;
      $end_posi    = '"';
      $mapinfo  = mb_substr($mapinfo , $start_posi);
      $mapinfo  = mb_strstr($mapinfo , $end_posi , true);


      //新規登録
      $post = new Post;
      $post->prefecture = $request->prefecture;
      $post->city = $request->city;
      $post->name = $request->name;
      $post->comment = $request->comment;
      $post->map = $mapinfo;
      $post->category = $request->category;
      $post->image = $new_name;
      $post->ip = \Request::ip();
      $post->save();

      return back()->with('success','投稿が完了しました');



    }



    //投稿詳細ページ
    public function detail($id){

      /*
      $posts = DB::table('posts')
                        ->where('id','=',$id)
                        ->get();
      */
      $post = Post::find($id);

      $comments = DB::table('comments')->where('parent_id','=',$id)
                                      //->join('posts','comments.parent_id','=','posts.id')
                                      ->orderBy('comments.created_at','asc')
                                      ->get();


      return view('post.detail',[
        'post' => $post,
        'comments' => $comments,
      ]);

    }




}
