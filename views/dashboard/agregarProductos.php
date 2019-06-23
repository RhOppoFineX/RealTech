<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Productos</title>
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
                <h1 class="blue-text center">Agregar Nuevo Producto</h1>
                <div class="row">
                    <!--Formulario-->
                    <form action="col s12">
                        <div class="row"> <!--sistema de columnas dentro del formulario-->
                            <div class="row card-panel">
                                <div class="input-field col s4"><!--Nombres--> <!--validate y required para validar los campos-->
                                    <input type="text" id="nombres" class="validate" required>
                                    <label for="nombres">Nombre:</label>
                                </div>
                                <!--Apellidos-->
                                <div class="input-field col s4">
                                        <input type="text" id="apellidos" class="validate" required><!--Si le quitamos el placeholder hace otro efecto-->
                                        <label for="apellidos">Precio:</label>
                                 </div>                            
                                
        
                                <!--ComboBox Genero-->
                                <div class="input-field col s4 validate" aria-required="true">
                                    <select>
                                      <option value="" disabled selected>Selecciona una categoría</option>
                                      <option value="1">Gadgets Pc</option>
                                      <option value="2">Gadgets Smartphone</option>                              
                                    </select>
                                    <label>categoría</label>
                                </div>
                                <!--Divisor-->
                                <div class="col s5"></div>
                                
        
                                <!--Boton con efectos:-->
                                <!-----Tooltips----->
                                <!--Modal-->
                                                            <!-- Modal Trigger -->  
                                <button class="btn-large col s2" type="submit" data-position="right" href="#modal1">Listo!</button>                        
        
                              
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