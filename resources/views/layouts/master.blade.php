<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <div class="col-mg-9 col-lg-9 pull-left">
    
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>@yield('title') </title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
                                        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
                                        crossorigin="anonymous">
            @include('partials.navbar')

            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            
        </head>
        <body>
            <br><br>
            <div class="col-md-8 blog-main">
                @yield('content')
            </div>
            @include('partials.sidebar')

        </body>
    <div>
</html>
