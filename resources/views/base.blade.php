<!DOCTYPE html>
<html lang="en">
@include('templates.header')
<body>
@include('templates.toast')
@include('templates.navbar')
@yield('content')
@include('templates.footer')
@include('templates.script')
</body>
</html>