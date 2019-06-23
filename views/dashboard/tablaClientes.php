<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla Cliente</title>
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

        

        <div class="row">
                <div class="col s12 m6 push-m3">
                    <h1 class="flow center blue-text">Clientes</h1>
                    <br>
                    <br>
                    <div class="col s8">
                        <!--Barra de Busqueda-->   
                        <div class="navbar">
                            <nav class=" blue lighten-3">
                                <div class="nav-wrapper">
                                    <form>
                                        <div class="input-field">
                                            <input id="search" type="search" required>
                                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                            <i class="material-icons">close</i>
                                        </div>
                                    </form>
                                </div>
                            </nav>
                        </div>
                        
                    </div><!--fin de Barra-->            
        
                    <div class="col s4">
                        <a class="waves-effect waves-light btn-large blue" href="Graficas/index.php"><i class="material-icons right">assessment</i>Estadisticas</a>                
                    </div>
        
                    <br>
                    <table class="blue-text responsive-table striped"><!--Tabla Crud-->
                        <thead><!--Encabezado de la tabla-->
                            <tr>
                                <th>Nombre:</th>
                                <th>Apellidos:</th>
                                <th>Usuario:</th>
                                <th>Genero:</th>
                                <th>Correo:</th>
                                <th>Municipio:</th>                                
                                <th>Quitar:</th>
                                <th>Graficas:</th>
                            </tr>
                        </thead>
                        <tbody><!--Datos de la tabla-->
                            <tr>
                                <td>Cristian</td>
                                <td>Ayala</td>
                                <td>Kristian99</td>
                                <td>Masculino</td>
                                <td>CristianEriksen@gmail.com</td>
                                <td>Soyapango</td>                                
                                
                                <td><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                                <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                            </tr>
                            <tr>
                                <td>Cristian</td>
                                <td>Ayala</td>
                                <td>Kristian99</td>
                                <td>Masculino</td>
                                <td>CristianEriksen@gmail.com</td>
                                <td>Soyapango</td> 
                                
                                <td><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                                <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                            </tr>
        
                            <tr>
                                <td>Cristian</td>
                                <td>Ayala</td>
                                <td>Kristian99</td>
                                <td>Masculino</td>
                                <td>CristianEriksen@gmail.com</td>
                                <td>Soyapango</td> 
                                
                                <td><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                                <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                            </tr>
        
                            <tr>
                                <td>Cristian</td>
                                <td>Ayala</td>
                                <td>Kristian99</td>
                                <td>Masculino</td>
                                <td>CristianEriksen@gmail.com</td>
                                <td>Soyapango</td> 
                                
                                <td><a class="btn-floating btn waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                                <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/materialize.js"></script>
    <script src="../../resources/js/nav.js"></script>
</body>
</html>