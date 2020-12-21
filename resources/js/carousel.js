var counter = 0;
var child_count = $("div.calendar").children().length -1 ;
console.log(child_count)
$( "#left" ).click(function() {
    if(counter==child_count) 
    {
    }else{
        counter++;
    }
    var distance = `translate(-${counter * 100}vw)`;
    $("div.calendar__month").css({"transform": distance});
});
$( "#right" ).click(function() {
    counter--;
    if ( counter < 0  ) counter = 0;
    var distance = `translate(-${counter * 100}vw)`;
    $("div.calendar__month").css({"transform": distance});
});


