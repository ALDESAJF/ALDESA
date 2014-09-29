(function($){ 
$.TitleBlink = function(msg,sec){ 
var options = { 
'OldTitle' : document.title, 
'NewTitle' : (!msg) ? 'Tienes Movimientos' : msg, 
'Interval' : (typeof sec != 'number') ? 1000 : sec*1000 
}; 

var Blinker = setInterval(function() { 
document.title = (document.title == options.OldTitle) ? options.NewTitle : options.OldTitle; 
}, options.Interval); 

$(window).bind('mousemove',function(){ 
clearInterval(Blinker); 
document.title = options.OldTitle; 
$(window).unbind('mousemove'); 
}); 
    }; 
})(jQuery); 
