<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kalender</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="calendar" style="border-style: solid;">
              <div class="calendar__month" id="jan">
                <div class="calendar__picture">
                  <h2>{{date('l \t\h\e jS')}}</h2>
                  <h3>November</h3>
                </div>
              </div>
              <div class="calendar__month" id="feb">
                <div class="calendar__picture">
                  <h2>{{date('l \t\h\e jS')}}</h2>
                  <h3>feb</h3>
                </div>
              </div>
            </div>
          
        </div>
    </body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/app.js"></script>
</html>
