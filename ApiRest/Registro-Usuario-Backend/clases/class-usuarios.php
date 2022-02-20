<?php
    Class Usuario{
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $nacionalidad;

        public function __construct($nombre,$apellido,$fechaNacimiento,$nacionalidad){
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->fechaNacimiento=$fechaNacimiento;
            $this->nacionalidad=$nacionalidad;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
            return $this;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido=$apellido;
            return $this;
        }

        public function getFechaNacimiento(){
            return $this->fechaNacimiento;
        }

        public function setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento=$fechaNacimiento;
            return $this;
        }

        public function getNacionalidad(){
            return $this->nacionalidad;
        }

        public function setNacionalidad($nacionalidad){
            $this->nacionalidad=$nacionalidad;
            return $this;
        }

        public function guardarUsuario(){
            $contenidoArchivo= file_get_contents("../datos/usuarios.json");
            $usuarios= json_decode($contenidoArchivo,true);
            $usuarios[]=array(
                "nombre"=>$this->nombre,
                "apellido"=>$this->apellido,
                "fechaNacimiento"=>$this->fechaNacimiento,
                "nacionalidad"=>$this-> nacionalidad
            );
            $archivo= fopen("../datos/usuarios.json","w");
            fwrite($archivo,json_encode($usuarios));
            fclose($archivo);
        }
        
        
        public static function obtenerUsuarios(){
            $contenidoArchivo= file_get_contents("../datos/usuarios.json");
            echo $contenidoArchivo;            
        }

        public static function obtenerUsuario($id){
            $contenidoArchivo= file_get_contents("../datos/usuarios.json");
            if(isset($contenidoArchivo)){
                $usuarios=json_decode($contenidoArchivo,true);
                for($i=0;$i<=count($usuarios);$i++){
                    if($i==($id-1)){
                        $usuario=$usuarios[$i];
                        echo json_encode($usuario);
                    }
                }
            }          
        }

        
        public function actualizarUsuario(){
            
        }
        public function borrarUsuario(){
            
        }




    }

?>