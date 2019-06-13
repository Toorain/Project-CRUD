//Effet de fade sur les bloc alerte

$(document).ready (function(){
	$(document).off('.data-api');    
    $("#success-alert").delay(800).fadeOut('slow');
    $("#danger-alert").delay(800).fadeOut('slow');
    $("#empty-alert").delay(800).fadeOut('slow');
 });

//Display ou non du modal create ou delete