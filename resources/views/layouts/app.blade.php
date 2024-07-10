<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('shared.header')
    
    <main>
        <div class="container">
            @yield('main')
        </div>
        
    </main>
    
    
    <img src="{{ Vite::asset('resources/img/*')}}" alt="">
    @include('shared.footer')
</body>
</html>