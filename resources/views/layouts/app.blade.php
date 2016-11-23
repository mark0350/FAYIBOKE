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
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">

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
@include('layouts.nav')
        <!-- end of nav -->
<section class="content-wrap">
    <div class="container">
        @yield("content")
    </div>
</section>

@include('layouts.footer')

<!-- Scripts -->
<script src="/js/app.js"></script>

</body>
</html>