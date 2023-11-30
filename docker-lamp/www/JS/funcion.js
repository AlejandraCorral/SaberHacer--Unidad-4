///////////////////  Aqui se elimina la funcion de copiar y pegar y tambien se cancela la tecla enter ///////////////////



$(document).ready(function () {
    //Disable full page
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    
    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});

window.addEventListener("keypress", function(event){
    if (event.keyCode == 13){
        event.preventDefault();
    }
}, false);
