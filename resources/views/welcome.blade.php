<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Constructly</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        body  {
            background-color: #0E101D;
        }
        .links > a {
          color: #fff;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
          -webkit-transition: .2s;
          transition: .2s;
        }

        a:hover {
          color: orange;
        }
    </style>
</head>
<body> 
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <img draggable="false" class="logo img img-responsive" src="{{ asset('img/transparent.png') }}">
            </div>
        </div>
    </div>


    @if ( Config::get('app.debug') )
      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script> 
    @endif
</body>
</html>