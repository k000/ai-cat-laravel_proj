<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use DB;

class CommentController extends Controller
{



    public function store(Request $request){

      $this->validate($request,[
          'parent_id' => 'required',
          'comment' => 'required|max:2000',
          'select_file' => 'image|mimes:jpeg,png,jpg,gif|max:3000'
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


      $comment = new Comment();
      $comment->parent_id = $request->parent_id;
      $comment->comment = $request->comment;
      $comment->image = $new_name;
      $comment->ip = \Request::ip();
      $comment->save();



      return back()->with('success','コメントの投稿が完了しました');


    }

}
