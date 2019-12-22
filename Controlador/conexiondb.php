<?php

require_once 'C:\xampp\htdocs\Modelo\config.php';

/* Clase encargada de gestionar las conexiones a la base de datos */
class ConexionDB{
   private $conexion;
   private $stmt;
   //private $array;
 
   static $_instance;
 
   /*La función construct es privada para evitar que el objeto pueda ser creado mediante new*/
   private function __construct(){
      $this->conectar();
   }
 
   /*Evitamos el clonaje del objeto. Patrón Singleton*/
   private function __clone(){ }
 
   /*Función encargada de crear, si es necesario, el objeto. Esta es la función que debemos llamar desde fuera de la clase para instanciar el objeto, y así, poder utilizar sus métodos*/
   public static function getInstance(){
      if (!(self::$_instance instanceof self)){
         self::$_instance=new self();
      }
      return self::$_instance;
   }
 
   /*Realiza la conexión a la base de datos.*/

   private function conectar(){

      $dsn= "mysql:host=" . servidor . ";" . "dbname=" . base_datos;
      $this->conexion = new PDO($dsn,usuario,password) or die ("No se pudo establecer conexión con la base de datos");
  }
	
  public function desconectar(){
    $this->conexion = null;
  }

  public function prepararQuery($query){
    $this->conectar();
    $res = $this->conexion->prepare($query) or die ("No se pudo procesar la consulta");
    return $res;	
  }
}
?>