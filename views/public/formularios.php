<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resgistro</title>
    <link rel="stylesheet" href="../../resources/css/materialize.css">
    <link rel="stylesheet" href="../../resources/css/icons.css">    
</head>
<body>

    <!--Nav-->
              
<?php
    require_once "../../core/helpers/menu.php";
?>        

    <div class="section container">
        <h1 class="blue-text center"> Formulario de Registro</h1>
        <div class="row">
            <!--Formulario-->
            <form action="col s12">
                <div class="row"> <!--sistema de columnas dentro del formulario-->
                    <div class="row card-panel">
                        <div class="input-field col s6"><!--Nombres--> <!--validate y required para validar los campos-->
                            <input type="text" id="nombres" class="validate" required>
                            <label for="nombres">Nombres:</label>
                        </div>
                        <!--Apellidos-->
                        <div class="input-field col s6">
                                <input type="text" id="apellidos" class="validate" required><!--Si le quitamos el placeholder hace otro efecto-->
                                <label for="apellidos">Apellidos:</label>
                         </div>
                         <!--dirección-->
                        <div class="input-field col s12">
                            <i class="material-icons prefix">add_location</i>
                            <input type="text" id="direccion" class="validate" required>
                            <label for="direccion">Dirección:</label>
                        </div>
                        <!--Telefono-->
                        <div class="input-field col s4">
                                <!--Iconos a un lado-->
                                <i class="material-icons prefix">phone</i>
                                <input type="text" id="telefono" class="validate" required>
                                <label for="telefono">Telefono:</label>
                        </div>
                        <!--Email-->
                        <div class="input-field col s8">
                                <i class="material-icons prefix">mail</i>
                                <input type="email" id="email" class="validate" required>
                                <label for="email">Email:</label>
                                <span class="helper-text" data-error="Direccion invalida" data-success="right">Correo</span>
                        </div>                        

                        <!--ComboBox Genero-->
                        <div class="input-field col s4 validate" aria-required="true">
                            <select>
                              <option value="" disabled selected>Selecciona tu género</option>
                              <option value="1">Masculino</option>
                              <option value="2">Femenino</option>                              
                            </select>
                            <label>Género</label>
                        </div>
                        <!--ComboBox departamento-->
                        <div class="input-field col s4 validate" aria-required="true">
                            <select>
                              <option value="" disabled selected>Selecciona tu departamento</option>
                              <option value="1">San Salvador</option>
                              <option value="2">Ahuachapan</option>
                              <option value="3">La Unión</option>                               
                            </select>
                            <label>Departamento</label>
                        </div>
                        <!--ComboBox Municipio-->
                        <div class="input-field col s4 validate" aria-required="true">
                            <select>
                              <option value="" disabled selected>Selecciona tu municipio</option>
                              <option value="1">San Salvador</option>
                              <option value="2">Mejicanos</option>
                              <option value="3">Santiago Texacuangos</option>
                              <option value="4">Apopa</option>
                              <option value="5">Ayutuxtepeque</option>                               
                            </select>
                            <label>Municipio</label>
                        </div>

                        <!--Contraseña-->
                        <div class="input-field col s4">
                            <input id="password" type="password" class="validate" required>
                            <label for="password">Password</label>                            
                        </div>
                        <!--Repetir-->
                        <div class="input-field col s4">
                            <input id="Repetir" type="password" class="validate" required>
                            <label for="Repetir">Repetir</label>
                        </div>

                        <!--Calendario-->
                        <div class="input-field col s4">
                            <i class="material-icons prefix">calendar_today</i>
                            <input type="text" class="datepicker validate" required>                            
                            <span class="helper-text" data-error="Eliga su fecha de Nacimiento" data-success="right">Nacimiento</span>
                        </div>



                        <!--Boton con efectos:-->
                        <!-----Tooltips----->
                        <!--Modal-->
                                                    <!-- Modal Trigger -->  
                        <button class="btn tooltipped modal-trigger col s2 " type="submit" data-position="right" data-tooltip="Enivar datos" href="#modal1">Listo!</button>                        

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal">
                            <div class="modal-content">
                            <h4>Desea registrarse?</h4>
                            <p>Desea enviar sus datos personales confiando en la seguridad de nuestra empresa?</p>
                            </div>
                            <div class="modal-footer">
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Disagree</a>
                            </div>
                        </div>
                        <!--Fin del modal-->
                    </div>                    
                </div>           

            </form>

        </div>
    </div>
    <?php
        require_once "../../core/helpers/footer.php";
    ?>  
    
    <!--Ponerle el footer aquí como dijo carranzey-->

        <script src="../../resources/js/jquery-3.3.1.min.js"></script>
        <script src="../../resources/js/materialize.js"></script>
        <script src="../../resources/js/combobox.js"></script>
        <script src="../../resources/js/tooltiped.js"></script>
        <script src="../../resources/js/modal.js"></script>
        <script src="../../resources/js/calendario.js"></script>
        <script src="../../resources/js/nav.js"></script>
               
</body>
</html>