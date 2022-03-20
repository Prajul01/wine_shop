<!DOCTYPE html>
<html lang="en">
@include('User.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('User.nav')

    @include('User.side')


    <div class="content-wrapper">
        @yield('content')
    </div>
    @include('User.footer')
</div>
@include('User.script')
</body>
</html>
