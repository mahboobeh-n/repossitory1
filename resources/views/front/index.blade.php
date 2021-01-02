<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>covid-19</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
{{--    <link rel="stylesheet" href="docsupport/style.css">--}}
{{--    <link rel="stylesheet" href="docsupport/prism.css">--}}
{{--    <link rel="stylesheet" href="chosen.css">--}}


  <link href="{{url('/front/img/favicon.png')}}" rel="icon">
  <link href="{{url('/front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{url('/front/css/app.css')}}" rel="stylesheet">
    <link href="{{url('/front/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{url('/front/css/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

{{--    {!! htmlScriptTagJsApi($configuration) !!}--}}
    {!! htmlScriptTagJsApi(['lang'=>'fa']) !!}

</head>

<body dir="rtl">

   @include('front.navbar')

   @yield('content')

  @include('front.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <script src="{{url('/front/js/app.js')}}"></script>
   <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

</body>

</html>
