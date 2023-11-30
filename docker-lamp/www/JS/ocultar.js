/////////////////// Script para ocultar un boton y mostrarlo despues de 20 segundos //////////////////////


var secondsRemaining = 20;

function updateTime() {
	$("#secs").text(secondsRemaining);
}

updateTime();

var i = setInterval(function() {
	secondsRemaining -= 1;
	if (secondsRemaining > 0){
		updateTime();
	} else {
		clearInterval(i);
		$("#secs").html("<div style='font-size: 20px; font-family: arial narrow;'><button style='border-radius: 20px;' type='submit' class='btn blue-gradient' id='btn'><i class='fas fa-check'>Descargar</i></button></div>")
	}
}, 1000);

$("#secs").on("click", "#myButton", function(){
});  
