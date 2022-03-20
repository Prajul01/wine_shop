<!DOCTYPE html>
<html lang="en">
@include('Sadmin.head')
@yield('css')
<style>
    .sidebar-dark {
        background-color: #f10938 !important;
    }
</style>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('Sadmin.nav')

    @include('Sadmin.side')


    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('Sadmin.footer')
</div>
@yield('js')
@include('Sadmin.script')
</body>
</html>
