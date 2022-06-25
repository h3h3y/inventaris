<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
    <title>@yield('title')</title>
</head>
<body>
    @include('include.navbar')

    @include('include.sidebar')

    @yield('content')

</body>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/fontawesome/js/all.min.js') }}"></script>
<script src="{{ asset('assets/data-table/datatables.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@yield('js')

</html>