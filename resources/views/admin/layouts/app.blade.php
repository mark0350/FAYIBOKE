<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stay Hungry.Stay Foolish.">
    <meta name="Keywords" content="fayiboke">
    <meta property="og:type" content="website">
    <meta property="og:title" content="fayiboke">
    <meta property="og:site_name" content="fayiboke">
    <meta property="og:description" content="Stay Hungry.Stay Foolish.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="fayiboke">
    <meta name="twitter:description" content="Stay Hungry.Stay Foolish.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>fayiboke  @yield('title')</title>

    <!-- Styles -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    @yield('css')
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    @include('admin.layouts.header')
    {{--@include('layouts.nav')--}}
    <section class="content-wrap" style="margin-top: 35px">
        <div class="container">
            @include('partials.errors')
            @include('partials.success')
            @yield('content')
        </div>
    </section>

    @include('layouts.footer')
    <!-- Scripts -->
    <script src="https://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    {{--<script src="/js/app.js"></script>--}}
    @yield('script')
</body>
</html>
