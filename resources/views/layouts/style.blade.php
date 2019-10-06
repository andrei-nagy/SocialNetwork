
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Petagram @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Scripts -->
   
     
    <!-- Fonts -->
    

    <!-- Styles -->
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div id="app">
         

        <main class="py-4">
             @include('partials._messages')
            @yield('content')
             @include('partials._footer')
        </main>
    </div>
</body>
</html>
