<?php
    class Usuario{
        private $nombreusuario;
        private $nombre;
        private $apellidos;
        private $correo;
        private $fechanacimiento;
        private $telefono;
        private $contrasenna;

        function __construct($pnombreusuario,$pnombre,$papellidos,$pcorreo,$pfechanacimiento,$ptelefono,$pcontrasenna){
            $this->nombreusuario = $pnombreusuario;
            $this->nombre = $pnombre;
            $this->apellidos = $papellidos;
            $this->correo = $pcorreo;
            $this->fechanacimiento = $pfechanacimiento;
            $this->telefono = $ptelefono;
            $this->contrasenna = $pcontrasenna;
        }
        public function getNombreUsuario(){
            return $this->nombreusuario;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function getCorreo(){
            return $this->correo;
        }
        public function getFechaNacimiento(){
            return $this->fechanacimiento;
        }
        public function getTelefono(){
            return $this->telefono;
        }
        public function getContrasenna(){
            return $this->contrasenna;
        }

    }
?>