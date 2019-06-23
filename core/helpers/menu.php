
<!--Barra de Busqueda-->
<div class="navbar-fixed">
    <nav class="indigo accent-3">
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
  <!--Siempre fijo arriba-->

  <div class="navbar-fixed">
    <nav class="indigo accent-3">
      <div class="nav-wrapper container">

        <!--Logo-->
        <a href="#" class="brand-logo left"> RealTech
          <i class="large material-icons left">usb</i>
        </a>

        <!--menú-->
        <ul class="right">
          <!--Registrarse-->
          <li><a href="../../views/public/formularios.php"> Registrarse
              <i class="large material-icons left">assignment</i>
              <!--Icono-->
            </a></li>

          <!--Login-->
          <li><a href="../../views/public/acceder.php">Login
              <i class="large material-icons left">account_circle</i>
            </a></li>


          <li>
            <a href="#" class="dropdown-trigger" data-target="Id_drop"> Productos
              <i class="material-icons right">arrow_drop_down</i>
              <i class="material-icons left">add_shopping_cart</i>
            </a>
          </li>
        </ul>
        <!--menú-->

      </div>
    </nav>
  </div>


  <!--Desplegable-->
  <ul id="Id_drop" class="dropdown-content">
    <li><a href="../../views/public/gadgets.php">Gadgets</a></li>
    <li class="divider"></li>
    <li><a href="../../views/public/componentes.php">Componentes</a></li>
    <li class="divider"></li>
    <li><a href="../../views/public/carrito.php">Carrito</a></li>
  </ul>