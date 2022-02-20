<?php
    Class usuario{
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $nacionalidad;

        public function constructor($nombre,$apellido,$fechaNacimiento,$nacionalidad){
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
            $usuarios[]=array(
                "nombre"=>$this->nombre,
                "apellido"=>$this->apellido,
                "fechaNacimiento"=>$this->fechaNacimiento,
                "nacionalidad"=>$this->nacionalidad
            );
            $archivo= fopen("../datos/usuarios.json","w");
            fwrite($archivo,json_encode($usuarios));
            fclose($archivo);
        }
        public function crearUsuario(){
            
        }
        public function actualizarUsuario(){
            
        }
        public function borrarUsuario(){
            
        }




    }

?>