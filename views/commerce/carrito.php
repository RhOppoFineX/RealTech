  <!-- Llamando la clase y funcion de la herencia del header y nav -->
  <?php
require_once('../../core/helpers/commerce.php');
Commerce::headerTemplate('Carrito');
?>
  <!--FocusView Carito  -->
  <br><br>
  <div class="container">
    <div class="card shopping-cart">
      <div class="card-header bg-dark text-light">
        <i class="fa fa-shopping-cart lang" aria-hidden="true" key="carrito">
          Carrito
        </i>
        <div class="clearfix"></div>
      </div>
      <table class="table" id="tabla-detalle">
        <thead>
          <tr>
            <th></th>
            <th>PRODUCT</th>
            <th>QUANTITY</th>
            <th>UNIT PRICE</th>
            <th>SUBTOTAL</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody id="tbody-read">
        </tbody>
      </table>
      <div class="card-footer">
        <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
          <div class="row">

          </div>
        </div>
        <div class="pull-right" style="margin: 10px">
          <div class="pull-right" style="margin: 5px">
          Total to pay: $<b id="total"></b>
          </div>
          <a href="" onclick="confirmPago() " class="btn btn-success pull-right">Continue</a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>




 
  <!-- Section: Products v.1 -->
  <!-- Parte de contactenos creando un formulario -->
  <br>
  <hr>
  </div>
  <br>
  <br>





  <!-- Section: Contact v.2 -->

  <!-- Llamado la clase del footer-herencia -->
<?php
Commerce::footerTemplate('carrito.js');
?>