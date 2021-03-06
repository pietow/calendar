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
    <i id='left' class="fas fa-angle-left fa-2x"></i>
        <div class="calendar" id="cal" style="border-style: solid;">
            @foreach ($year as $month)
            <div class="calendar__month" id="{{$month[0]->format('M')}}">
                <div class="calendar__picture">
                      <h2>{{date('l \t\h\e jS')}}</h2>
                      <h3>{{$month[0]->locale('de_DE')->monthName}}</h3>
                </div>
                <div class="calendar__date">
                     <div class="calendar__day">M</div>
                     <div class="calendar__day">T</div>
                     <div class="calendar__day">W</div>
                     <div class="calendar__day">T</div>
                     <div class="calendar__day">F</div>
                     <div class="calendar__day">S</div>
                     <div class="calendar__day">S</div>

                    @if($month[0]->format('l') == "Monday")
                       @for ($i = 0; $i < 0; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @elseif($month[0]->format('l') == "Tuesday")
                       @for ($i = 0; $i < 1; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @elseif($month[0]->format('l') == "Wednesday")
                       @for ($i = 0; $i < 2; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @elseif($month[0]->format('l') == "Thursday")
                       @for ($i = 0; $i < 3; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @elseif($month[0]->format('l') == "Friday")
                       @for ($i = 0; $i < 4; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @elseif($month[0]->format('l') == "Saturday")
                       @for ($i = 0; $i < 5; $i++)
                            <div class="calendar__day"></div>
                       @endfor 
                    @endif      

                    @foreach ($month as $day)
                        @if(Carbon\Carbon::now()->diffInDays($day)==60)
                            <div class="calendar__number--current">{{$day->format('d')}}</div>
                        @else
                            <div class="calendar__number">{{$day->format('d')}}</div>
                        @endif
                    @endforeach
                     

                </div>
            </div>
            @endforeach
        </div>

    <i id='right' class="fas fa-angle-right fa-2x"></i>
    </body>
<script src="https://kit.fontawesome.com/a4b21b2923.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/js/app.js"></script>
</html>
