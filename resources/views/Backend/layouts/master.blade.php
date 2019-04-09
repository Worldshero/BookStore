<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BookStore | @yield('Title' )</title>

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/bootstrap.min.css')}}">
 <!-- Fonts -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets2/fonts/line-icons.css')}}">
 <!--Morris Chart CSS -->
 <link rel="stylesheet" href="{{asset('assets2/plugins/morris/morris.css')}}">
 <!-- Main Style -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/main.css')}}">
 <!-- Responsive Style -->
 <link rel="stylesheet" type="text/css" href="{{asset('assets2/css/responsive.css')}}">

</head>
<body>
@include('backend.layouts.header')
@section('body')
@show














@include('backend.layouts.footer')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets2/js/jquery-min.js')}}"></script>
<script src="{{asset('assets2/js/popper.min.js')}}"></script>
<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets2/js/jquery.app.js')}}"></script>
<script src="{{asset('assets2/js/main.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('assets2/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('assets2/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('assets2/js/dashborad1.js')}}"></script>


</body>
</html>
