$(function() {
    "use strict";

    $('body').on('click', '.hmuPopUp', function (){
        var left  = ($(window).width()/2)-(660/2),
            top   = ($(window).height()/2)-(460/2),
            popup = window.open ($(this).attr( "href"), 'hmuPopUp', "width=700, height=500, top="+top+", left="+left);
        if (window.focus) {popup.focus()}
        return false;
    });

})

function showOnChange(element) {
    var value = element.value
    if(value == 1){
        document.getElementById('du-lich').style.display = "block";
        document.getElementById('dac-san-que-huong').style.display = "none";
        document.getElementById('tin-tuc').style.display = "none";
        document.getElementById('articles-type').value = 1;
    }else if(value == 2){
        document.getElementById('du-lich').style.display = "none";
        document.getElementById('dac-san-que-huong').style.display = "block";
        document.getElementById('tin-tuc').style.display = "none";
        document.getElementById('articles-type').value = 2;
    }else if(value == 3){
        document.getElementById('du-lich').style.display = "none";
        document.getElementById('dac-san-que-huong').style.display = "none";
        document.getElementById('tin-tuc').style.display = "block";
        document.getElementById('articles-type').value = 3;
    }
}

