<?php
    header ("Content-Type: application/jason");
    include_once("../clases/class-usuarios.php");
    switch ($_SERVER['REQUEST_METHOD']){
        
        case 'POST': //guardar
            $_POST=json_decode(file_get_contents('PHP://input'),true);

            $usuario = new Usuario($_POST["nombre"],$_POST["apellido"],$_POST["fechaNacimiento"],$_POST["nacionalidad"]);
            
            $usuario->guardarUsuario();

            $resultado['mensaje']="Guardar el usuario con la información: ".json_encode($_POST);
            echo json_encode($resultado);  
        
             
        break;
        case 'GET':
            if(isset($_GET['id'])){
                $resultado['mensaje']="Retornar el usuario con el id: ".$_GET['id'];
                echo json_encode($resultado);                
            }else{
                $resultado['mensaje']="Retornar todos los usuarios";
                echo json_encode($resultado);
            };
        break;
        case 'PUT':
            $_PUT=json_decode(file_get_contents('PHP://input'),true);
            $resultado['mensaje']="Actualizar el usuario con el id: ".$_GET['id']." con la información: ".json_encode($_PUT);
            echo json_encode($resultado);
        break;
        case 'DELETE':
            $resultado['mensaje']="Eliminar el usuario con el id: ".$_GET['id'];
            echo json_encode($resultado);
        break;
    }

?>