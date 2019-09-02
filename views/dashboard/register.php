<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Registrar primer usuario');

if(!empty($_POST)){
    $captcha = $_POST['g-recaptcha-response'];
    
    $secret = '6LcT8LMUAAAAALVsjWh795u9mvW2YaL4OSLAxrWV';
    /* CLAVE SECRETA*/
    if(!$captcha){

        echo "Por favor verifica el captcha";
        
        } else {
        
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
        
        $arr = json_decode($response, TRUE);
        
        if($arr['success'])
        {
            echo '<h2>Thanks</h2>';
            } else {
            echo '<h3>Error al comprobar Captcha </h3>';
        }
    }
}
?>
<form method="post" id="form-register">
    <div class="row">
        <div class="input-field col s12 m6">
          	<i class="material-icons prefix">person</i>
          	<input id="nombres" type="text" name="nombres" class="validate" required/>
          	<label for="nombres">Nombres</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">person</i>
            <input id="apellidos" type="text" name="apellidos" class="validate" required/>
            <label for="apellidos">Apellidos</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">email</i>
            <input id="correo" type="email" name="correo" class="validate" required/>
            <label for="correo">Correo</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">person_pin</i>
            <input id="alias" type="text" name="alias" class="validate" required/>
            <label for="alias">Alias</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">security</i>
            <input id="clave1" type="password" name="clave1" class="validate" required/>
            <label for="clave1">Clave</label>
        </div>
        <div class="input-field col s12 m6">
            <i class="material-icons prefix">security</i>
            <input id="clave2" type="password" name="clave2" class="validate" required/>
            <label for="clave2">Confirmar clave</label>
        </div>
    </div>
    <div class="row center-align">
 	    <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Registrar"><i class="material-icons">send</i></button>
    </div>
    
    <head>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		</head>
    <body>	
		<form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="g-recaptcha" data-sitekey="6LcT8LMUAAAAABfUjzn-AfdvPQqIak_mHLmHOjiQ"></div>
        <!-- Clave del sitio web--> 
	</body>
    
</form>
<?php
Dashboard::footerTemplate('register.js');
?>
