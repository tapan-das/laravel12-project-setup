<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>

    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">

        @include('admin.layouts.navbar')
        @include('admin.layouts.sidebar')

        <div class="content-wrapper">
            <section class="content pt-3">
                <div class="container-fluid">

                    @include('admin.partials.alerts')

                    @yield('content')

                </div>
            </section>
        </div>

        @include('admin.layouts.footer')

    </div>

    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>

    @stack('scripts')
</body>

</html>