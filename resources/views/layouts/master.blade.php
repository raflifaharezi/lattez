<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lattez - @yield('title')</title>

    @include('includes.style')
</head>
<body>
    
    @include('includes.navbar')

    @yield('content')
    @yield('modal')

    @include('includes.footer')

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
        
</body>
</html>