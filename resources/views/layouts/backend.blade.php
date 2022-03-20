<!DOCTYPE html>
<html lang="en">
@include('Admin.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('Admin.nav')

    @include('Admin.side')


    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('Admin.footer')
</div>
@include('Admin.script')
</body>
</html>
