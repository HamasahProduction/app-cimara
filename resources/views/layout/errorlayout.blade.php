{{-- <!DOCTYPE html> --}}
{{-- <html lang="en" data-layout="vertical" data-layout-mode="blue" data-sidebar="dark" data-sidebar-size="sm" data-sidebar-image="none" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default"> --}}
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', env('APP_NAME'))</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('logo/logo_kuningan.png') }}">
    @include('layout.partials.head')
</head>

<body class="error-page">
    <div class="main-wrapper">
        @yield('content')
    </div>
    @include('layout.partials.footer-scripts')
</body>

</html>
