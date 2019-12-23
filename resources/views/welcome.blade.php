<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TODO</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a href="#" class="navbar-brand">TODO-List</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto"></ul><span class="navbar-text actions"><a class="btn btn-light action-button" href="{{ route('login') }}">Login</a><a class="btn btn-light action-button" href="{{ route('register') }}">Sign Up</a></span></div>
            </div>
        </nav>
        <div class="container h-100">
          <div class="row h-100 justify-content-center align-items-center">
                <img src="{{ asset('images/todo.jpg')}}"> 
            </div>
        </div>
    </body>
</html>
