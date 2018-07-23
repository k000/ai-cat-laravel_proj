<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AI-CAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ Config::get('fpath.cssfile') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
        <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="{{ Config::get('fpath.jsfile') }}"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
        @include('common.ogp')
    </head>


    <body>
      <div id="wrapper">
        @include('common.header-nav')
