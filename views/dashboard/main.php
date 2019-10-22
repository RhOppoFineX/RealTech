<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Bienvenido');
?>
<div class="container">
    <div class="row">
	    <h4 class="center-align blue-text lang" id="greeting" key="greeting"></h4>
    </div>
</div>

<br>

    <h4 class="lang" key='titulo1'>Cantidad de productos por categoria</h4>
    <div class="row">
        <canvas id='grafico1'></canvas>
    </div>
    <br>  
    
   
    <br>
    <h4 class="lang" key='titulo2'>cantidad de productos activos e inactivos</h4>
    <div class="row">
        <canvas id='grafico4'></canvas>
    </div>
    <br>
    <h4 class="lang" key='titulo3'>Productos del más caro al más barato</h4>
    <div class="row">
        <canvas id='grafico5'></canvas>
    </div>
    
    
    <script src="../../resources/js/chart.js"></script>
<?php
Dashboard::footerTemplate('main.js');
?>


