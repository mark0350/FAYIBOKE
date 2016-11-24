<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>法医博客</title>

    <!-- Style -->
    <link href="{{asset('/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
    @yield('css')

            <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body class="home-template">
@include('layouts.header')
        <!-- end of header -->
{{--@include('layouts.nav')--}}
<section class="content-wrap" style="margin-top: 35px">
    <div class="container">
        @include('partials.errors')
        @include('partials.success')
        @yield("content")
    </div>
</section>

@include('layouts.footer')

<!-- Scripts -->
<link href="{{asset('/bootstrap-3.3.7-dist/js/bootstrap.min.js')}}" rel="stylesheet">
<link href="{{asset('/js/jquery-3.1.1.min.js')}}" rel="stylesheet">

<script src="/js/app.js"></script>
@yield('script')

</body>
</html>