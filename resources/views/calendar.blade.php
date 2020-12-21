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
        <div class="calendar" id="cal" style="border-style: solid;">
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
            <div class="calendar__month" id="märz">
                <div class="calendar__picture">
                      <h2>{{date('l \t\h\e jS')}}</h2>
                      <h3>feb</h3>
                </div>
            </div>
        </div>

<button id='left'>
    <i class="fas fa-angle-left fa-7x"></i>
</button>
<button id='right'>
    <i class="fas fa-angle-right fa-7x"></i>
</button>
    </body>
<script src="https://kit.fontawesome.com/a4b21b2923.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/app.js"></script>
</html>
