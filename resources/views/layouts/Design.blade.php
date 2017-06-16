<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>@yield('title')</title>
        
        <!-- Bootstrap link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Styles -->
        
    </head>
    <body>
       @include('includes.header')
        <div class="container">
           @yield('content');
        </div>
    </body>
</html>
    