
const apiAccount = '../../core/api/dashboard/usuarios.php?action=';

$(document).ready(function()
{
    $('.tabs').tabs();
    $('.tooltipped').tooltip();
})

// Función para crear un nuevo registro
$('#form-create-client').submit(function()
{
    event.preventDefault();
    $.ajax({
        url: api + 'create',
        type: 'post',
        data: new FormData($('#form-create-client')[0]),
        datatype: 'json',
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(response){
        // Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            // Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                $('#form-create-client')[0].reset();               
                sweetAlert(1, result.message, null);
            } else {
                sweetAlert(2, result.exception, null);
            }
        } else {
            sweetAlert(2, response, null);
        }
    })
    .fail(function(jqXHR){
        // Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
})


