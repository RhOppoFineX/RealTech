<?php
class Session {
    
    public static function verifcarPrivilegio()
    {
        $retorno = false;
        $array = $_SESSION['Tipo_usuario_privilegios'];
        foreach($array as $value)
        {
            if($value === $_SESSION['Tipo_usuario'])
                $retorno = true;           
                 
        }       

        if(!$retorno){
            session_destroy();            
        }

    }

}


