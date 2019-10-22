<?php
require_once('../../core/helpers/commerce.php');
Commerce::headerTemplate('Tu tienda de café');
?>
<!-- Slider con indicadores y altura de 400px -->
<div class="slider" id="slider">
    <ul class="slides">
        <li>
            <img src="../../resources/img/COMPONENTES/COMPONENTES-CEL/pantallas.jpg" alt="Foto01">
            <div class="caption center-align">
               
            </div>
        </li>
        <li>
            <img src="../../resources/img/COMPONENTES/COMPONENTES-PC/tarjetasGraficas.jpg" alt="Foto02">
            <div class="caption left-align">
              
            </div>
        </li>
        <li>
            <img src="../../resources/img/COMPONENTES/COMPONENTES-PC/CaseforPC.JPG" alt="Foto03">
            <div class="caption right-align">
           
            </div>
        </li>
        <li>
            <img src="../../resources/img/PERIFERICOS/PERIFERICOS-CEL/tripode.jpg" alt="Foto04">
            <div class="caption center-align">
            
            </div>
        </li>
    </ul>
</div>
<!-- Contenido principal: categorías, productos por categoría y detalles del producto -->
<div class="container">
    <h4 class="center blue-text" id="title"></h4>
    <div class="row" id="catalogo"></div>
</div>

<div class="parallax-container">
    <div class="parallax">
      <img src="../../resources/img/amazon.jpg" alt="RealTech" class="responsive-img">
    </div>
  </div>

<?php
Commerce::footerTemplate('catalogo.js');
?>
