var idleTime = 0;
$(document).ready(function()
{
    showGreeting();

    //Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 6000); // 1 minute

    //Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
    });
    $(this).keypress(function (e) {
        idleTime = 0;
    });

})

// Función para mostrar un saludo dependiendo de la hora del cliente
function showGreeting()
{
    let today = new Date();
	let hour = today.getHours();
    if (hour < 12) {
        greeting = 'Buenos días';
    } else if (hour < 19) {
        greeting = 'Buenas tardes';
    } else if (hour <= 23) {
        greeting = 'Buenas noches';
    }
    $('#greeting').text(greeting);
}

function timerIncrement() {
    idleTime = idleTime + 1;    
    if (idleTime > 1) { // 20 minutes          
        signOffIncative();
        // sweetAlert(1, "Su sesión ha sido cerrada por inactividad", null);
        //window.location.reload();
    }
}
