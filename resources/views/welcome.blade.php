<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    <div id="app">
        <main-header></main-header>
        <router-view></router-view>
        <main-footer></main-footer>
    </div>
</div>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>