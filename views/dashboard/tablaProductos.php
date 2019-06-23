<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla Productos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">       
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
            <h1 class="flow center blue-text">Productos</h1>
            <br>
            <br>
            <div class="col s6">
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

            <div class="col s2">
                    <a class="btn-floating btn-large waves-effect waves-light purple" href="agregarProductos.php"><i class="material-icons">add</i></a>
            </div>

            <br>
            <table class="blue-text responsive-table striped"><!--Tabla Crud-->
                <thead><!--Encabezado de la tabla-->
                    <tr>
                        <th>Codigo:</th>
                        <th>Nombre:</th>
                        <th>Categoria:</th>
                        <th>Precio:</th>
                        <th>Editar:</th>
                        <th>Quitar:</th>
                        <th>Graficas:</th>
                    </tr>
                </thead>
                <tbody><!--Datos de la tabla-->
                    <tr>
                        <td>1</td>
                        <td>Procesadores i5</td>
                        <td>Componentes de Computadora</td>
                        <td>$329.99</td>
                        <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Teclados Mecanicos</td>
                        <td>Gadgets de Computadora</td>
                        <td>$39.99</td>
                        <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Baterías de Smartphone</td>
                        <td>Componentes de Smartphone</td>
                        <td>$20.00</td>
                        <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Tarejtas Graficas</td>
                        <td>Componentes de Computadora</td>
                        <td>$250.00</td>
                        <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                        <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="row">
            <div class="col s12 m6 push-m3">
                <h1 class="flow center blue-text">Categorías</h1>
                <br>
                <br>
                           
    
                <div class="col s4">
                    <a class="waves-effect waves-light btn-large blue" href="Graficas/index.php"><i class="material-icons right">assessment</i>Estadisticas</a>                
                </div>    
                
    
                <br>
                <table class="blue-text responsive-table striped centered"><!--Tabla Crud-->
                    <thead><!--Encabezado de la tabla-->
                        <tr>
                            <th>Codigo:</th>                            
                            <th>Categoria:</th>                            
                           
                        </tr>
                    </thead>
                    <tbody><!--Datos de la tabla-->
                        <tr>
                            <td>1</td>
                            <td>Gadgets Smartphones</td>
                            
                            
                            <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gadgets Pc</td> 
                            
                            
                            <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                        </tr>
    
                        <tr>
                            <td>3</td>
                            <td>Componentes Pc</td>
                            
                            
                            <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                        </tr>
    
                        <tr>
                            <td>4</td>
                            <td>Componentes Smartphones</td>
                            
                            
                            <td><a class="btn-floating btn waves-effect waves-light orange"><i class="material-icons">edit</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light red modal-trigger tooltipped" href="#modal3"><i class="material-icons">delete</i></a></td>
                            <td><a class="btn-floating btn waves-effect waves-light green" href="Graficas/index.php"><i class="material-icons">assessment</i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal Structure -->
            <div id="modal3" class="modal modal-fixed" >
                    <div class="modal-content">
                        <h4>¿Desea eliminar el producto?</h4>
                        <div class="center">                                                             
                            <a class="waves-effect waves-light btn" href=""><i class="material-icons right">delete</i>Si</a>
                            <a class="waves-effect red btn" href="" ><i class="material-icons right">check_box</i>No</a>
                        </div>
                    </div>    
            </div>
        </div>
        
    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
    <script src="../../resources/js/materialize.js"></script>
    <script src="../../resources/js/nav.js"></script>
    <script src="../../resources/js/modal.js"></script>
</body>
</html>