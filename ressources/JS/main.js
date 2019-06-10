//Effet de fade sur les bloc alerte

$(document).ready (function(){    
    $("#success-alert").delay(800).fadeOut('slow');
 });

//Display ou non du modal create ou delete


$(document).ready(function() {
	$('#modify').click(function() {
		$('#creator').toggle();
		$('#updator').toggle();
	});
});