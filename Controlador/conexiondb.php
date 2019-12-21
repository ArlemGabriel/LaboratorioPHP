<?php

// Clase Conexión: singleton a la base de datos
class Conexionbd {
  // Hold the class instance.
  private static $instancia = null;
  private $conn;
  
  private $host = 'localhost';
  private $user = 'usuarioweb';
  private $pass = 'abcd123';
  private $name = 'desarrolloweb';
   
  // Constructor: para establecer conexion con la base de datos
  private function __construct()
  {
    $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  
  public static function getInstancia()
  {
    if(!self::$instancia)
    {
      self::$instancia = new Conexionbd();
    }
   
    return self::$instancia;
  }
  
  public function getConexion()
  {
    return $this->conn;
  }
}
?>