<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Administrador</title>
    <link rel="stylesheet" href="../../resources/css/materialize.css">
    <link rel="stylesheet" href="../../resources/css/icons.css">
</head>
<body>
    <!--Desplegable-->
    <ul id="Id_drop" class="dropdown-content">
            <li><a href="tablaProductos.php">Crud Productos</a></li>
            <li class="divider"></li>
            <li><a href="tablaClientes.php">Crud Cliente</a></li>
            <li class="divider"></li>
            <li><a href="#">Carrito</a></li>
    </ul>

        <div class="navbar-fixed">
                <nav class="indigo accent-3">
                    <div class="nav-wrapper container">                    
                            
                                <!--Logo-->
                                <a href="#" class="brand-logo left"> RealTech
                                <i class="large material-icons left">usb</i>   
                                </a>                         
                            
                            
                                <!--menú-->
                                <ul class="right">
                                    <!--Registrars nuevo-->
                                    <li><a href="agregarAdmin.php"> Nuevo admin                      
                                     <i class="large material-icons left">assignment</i> <!--Icono-->    
                                    </a></li>
            
                                    <!--Cerrar Sesión-->
                                    <li><a href="../public/index.php">Cerrar Sesión 
                                    <i class="large material-icons left">account_circle</i>   
                                    </a></li>
                                    
                                    
                                    <li>
                                        <a href="#" class="dropdown-trigger" data-target="Id_drop"> Mantenimientos
                                         <i class="material-icons right">arrow_drop_down</i>
                                         <i class="material-icons left">category</i>    
                                        </a>
                                    </li>                    
                                </ul>
                               <!--menú-->                        
                        
                    </div>
                </nav>
            </div>
            <!--Formulario-->
        <div class="section container">
                <h1 class="blue-text center"> Agregar Administrador</h1>
                <div class="row">
                    <!--Formulario-->
                    <form action="col s12">
                        <div class="row"> <!--sistema de columnas dentro del formulario-->
                            <div class="row card-panel">
                                <div class="input-field col s4"><!--Nombres--> <!--validate y required para validar los campos-->
                                    <input type="text" id="nombres" class="validate" required>
                                    <label for="nombres">Nombres:</label>
                                </div>
                                <!--Apellidos-->
                                <div class="input-field col s4">
                                        <input type="text" id="apellidos" class="validate" required><!--Si le quitamos el placeholder hace otro efecto-->
                                        <label for="apellidos">Apellidos:</label>
                                 </div>
                                
                                 <!--Nombre de usuario-->
                                <div class="input-field col s4">
                                        <input type="text" id="username" class="validate" required><!--Si le quitamos el placeholder hace otro efecto-->
                                        <label for="username">Nombre de usuario:</label>
                                </div> 
                                
                                <!--Email-->
                                <div class="input-field col s5">
                                        <i class="material-icons prefix">mail</i>
                                        <input type="email" id="email" class="validate" required>
                                        <label for="email">Email:</label>
                                        <span class="helper-text" data-error="Direccion invalida" data-success="right">Correo</span>
                                </div>                                
                                
        
                                <!--ComboBox Genero-->
                                <div class="input-field col s3 validate" aria-required="true">
                                    <select>
                                      <option value="" disabled selected>Selecciona tu género</option>
                                      <option value="1">Masculino</option>
                                      <option value="2">Femenino</option>                              
                                    </select>
                                    <label>Género</label>
                                </div>
                                
                                <!--Contraseña-->
                            <div class="input-field col s2">
                                <input id="password" type="password" class="validate" required>
                                <label for="password">Password</label>                            
                            </div>
                            <!--Repetir-->
                            <div class="input-field col s2">
                                <input id="Repetir" type="password" class="validate" required>
                                <label for="Repetir">Repetir</label>
                            </div>
                               
        
                                <!--Boton con efectos:-->
                                <!-----Tooltips----->
                                <!--Modal-->
                                                            <!-- Modal Trigger -->  
                                <button class="btn col s2 " type="submit" data-position="right" href="#modal1">Listo!</button>                        
        
                               
                            </div>                    
                        </div>           
        
                    </form>
        
                </div>
            </div>
    
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/materialize.js"></script>
    <script src="../../resources/js/combobox.js"></script>
    <script src="../../resources/js/nav.js"></script>
</body>
</html>