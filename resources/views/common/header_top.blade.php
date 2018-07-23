<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AI-CAT</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
        <script type="text/javascript" src="js/jquery.rwdImageMaps.min.js"></script>
        <script src="{{ Config::get('fpath.jsfile') }}"></script>
    </head>
    <body>
      <div id="wrapper">
        @include('common.header-nav')
