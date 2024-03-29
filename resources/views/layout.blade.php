<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>St. Hector's Veterinary Clinic</title>
</head>
<body>
    
    @include('common/header')
    
    <hr>

    <div class="page-content">

        @yield('content')

    </div>

    @vite('resources/css/app.scss')
    
</body>
</html>
