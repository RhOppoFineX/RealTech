<?php

require_once('../../core/helpers/database.php');
require_once('../../core/helpers/validator.php');
require_once('../../core/models/departamento.php'); //Esto cambia según el crud


if(isset($_GET['action'])){
    session_start();
    $departamento = new Departamento();
    $result = array('status' => false, 'exception' => null, 'message' => null);

    if(isset($_SESSION['idUsuario'])){
        switch($_GET['action']){
            
            case 'read':
                if($result['dataset'] = $departamento->readDepartamento()){
                    $result['status'] = true;
                }else{
                    $result['exception'] = 'No hay departamentos registrados';
                }
            break;
            
              
            case 'search':
                $_POST = $departamento->validateForm($_POST);    
                if($_POST['busqueda'] != ''){
                    if($result['dataset'] = $departamento->searchDepartamento($_POST['busqueda'])){
                        $result['status'] = true;
                    }else{
                        $result['exception'] = 'No hay coincidencias';
                    }
                } else {
                    $result['exception'] = 'Ingrese un valor para buscar';
                }
            break;
              
            case 'create':
                $_POST = $departamento->validateForm($_POST);
                if($departamento->setDepartamento($_POST['departamento'])){
                    if($departamento->createDepartamento()){
                        $result['status'] = true;
                        $result['message'] = 'Departamento Insertado';
                    } else {
                        $result['exception'] = 'Dato duplicado';
                    }

                } else {
                    $result['exception'] = 'Nombre de Departamento Invalido';
                }
            break;
              
            case 'get':
                if($departamento->setId($_POST['Id_departamento'])){
                    if($departamento->getDepartamentoUp()){
                        $result['status'] = true;
                    } else {
                        $result['exception'] = 'Departamento Inexistente';
                    }
                } else {
                    $result['exception'] = 'Id incorrecto';
                }
             break;
             
            case 'update':
                $_POST = $departamento->validateForm($_POST);
                if($departamento->setId($_POST['Id_departamento'])){
                    if($departamento->getDepartamentoUp()){
                        if($departamento->setDepartamento($_POST['departamento'])){
                            if($departamento->updateDepartamento()){
                                $result['status'] = true;
                                $result['message'] = 'Departamento Actualizado';
                            } else {
                                $result['exception'] = 'Operación fallida';
                            }    
                        } else {
                            $result['exception'] = 'Nombre de Departamento Invalido';
                        }
                    } else {
                        $result['exception'] = 'Departamento inexistente';
                    }
                }else{
                    $result['exception'] = 'Departamento incorrecto';
                }             
            break;

            case 'delete':
                                
            break;
            
        }

    }else{
        exit('Acceso no disponible');
    }


} else {
    exit('Recurso denegado');
}



