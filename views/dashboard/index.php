<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Iniciar sesión');
    
if(!empty($_POST)){

    $name = $_POST['name'];
    $password = $_POST['password'];
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
<div class="container">
    <div class="row">
        <form method="post" id="form-sesion" autocomplete="off">
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">person_pin</i>
                <input id="alias" type="text" name="alias" class="validate" required/>
                <label for="alias">Usuario</label>
            </div>
            <div class="input-field col s12 m6 offset-m3">
                <i class="material-icons prefix">security</i>
                <input id="clave" type="password" name="clave" class="validate" required/>
                <label for="clave">Contraseña</label>
            </div>
            <div class="col s12 center-align">
                <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Ingresar"><i class="material-icons">send</i></button>
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
    </div>
</div>
<?php
Dashboard::footerTemplate('index.js');
?>
