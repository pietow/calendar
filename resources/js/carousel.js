var counter = 0;
var box = 33;
var child_count = $("div.calendar").children().length -1 ;
var moveRight = () => {
    if(counter==child_count) 
    {
    }else{
        counter++;
    }
    var distance = `translate(-${counter * box}vw)`;
    $("div.calendar__month").css({"transform": distance});
};

$( "#right" ).click(moveRight)
$( "#left" ).click(function() {
    counter--;
    if ( counter < 0  ) counter = 0;
    var distance = `translate(-${counter * box}vw)`;
    $("div.calendar__month").css({"transform": distance});
});

var moveDate = () => {
    if ( counter == 0 ) {
        var imag = $('#Jan > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 1 ) {
        var imag = $('#Feb > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 2 ) {
        var imag = $('#Mar > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 3 ) {
        var imag = $('#Apr > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 4 ) {
        var imag = $('#May > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 5 ) {
        var imag = $('#Jun > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 6 ) {
        var imag = $('#Jul > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 7 ) {
        var imag = $('#Aug > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 8 ) {
        var imag = $('#Sep > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 9 ) {
        var imag = $('#Oct > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 10 ) {
        var imag = $('#Nov > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
    else if ( counter == 11 ) {
        var imag = $('#Dec > .calendar__picture').css('background')
        $('body').css('background', imag)
    } 
}
$("#right").add('#left').click(moveDate)

$( document ).ready(() => {
    var distance = `translate(-${0 * box}vw)`;
    var d = new Date();
    counter = 1;
    //counter = d.getMonth()-1;
    moveDate();
    var distance = `translate(-${counter * box}vw)`;
    $("div.calendar__month").css({"transform": distance});
    $("div.calendar__month").css({"transform": distance});
});

