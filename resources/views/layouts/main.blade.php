<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!--  <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta content="telephone=no" name="format-detection">
    <meta http-equiv="pragma"   content="no-cache" />   
    <meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />   
    <meta http-equiv="expires" content="Wed,26 Feb 1997 08:21:57 GMT" />  -->
    <link rel="stylesheet" href="{{asset('public/assets/default/css/lists.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/default/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fonts/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('public/fonts/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/fonts/css/text.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/default/css/myemojiPl.css')}}">
    
    <!--login-->
     <link href="{{asset('public/assets/default/bootstrap3/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('public/assets/default/css/login-register.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

  
</head>
<body>
    @yield('header')
<div id="app">
    @yield('content')
</div>
   
<script src="{{ asset('public/assets/default/js/jquery-3.1.0.min.js') }}"></script>  
<script src="{{ asset('public/assets/default/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('public/assets/default/js/respond.min.js') }}"></script>
<script type="text/javascript" src="{{asset('public/assets/default//layer/layer.js')}}"></script>
    @yield('scripts')
</body>
</html>