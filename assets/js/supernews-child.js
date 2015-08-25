$(document)
	.ready(function() {
            resizer();
	});
function resizer() {
    var height = parseInt ( $('.sidebar1').css('height') );
    setTimeout ( function() {
        $('.sidebar1, .sidebar2').css('height', (height+75)+'px');
    }, 101 );
}
