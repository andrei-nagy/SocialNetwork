
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Petagram @yield('title')</title> <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
     <script>
        function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  document.execCommand("copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy";
}
 function myFunction2() {
  var copyText = document.getElementById("myEmail");
  copyText.select();
  document.execCommand("copy");
  
  
}

function outFunc2() {
  var tooltip = document.getElementById("myTooltip2");
  tooltip.innerHTML = "Copy";
}



function sendMail() {
    var myEmail = document.getElementById("myEmail").value;
    var link = "mailto:" + myEmail
             + "?cc=" + myEmail
             + "&subject=" + escape("Hello again, old friend")

    ;
    window.location.href = link;
}
     </script>
    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
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
