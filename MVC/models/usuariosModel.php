<?php

class usuariosModel{

 private $con;

 public function __construct(){

 $this->con=Conectar::getConexion();

 }public function getUsuarios(){

 $stmt=$this->con->prepare("select * from admin;");
 $stmt->execute();
 
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 public function getUsuario($id){

 $stmt=$this->con->prepare("select * from admin where id = ?");
$stmt->bindParam(1,$id);
 $stmt->execute();
 
 return $stmt->fetch(PDO::FETCH_ASSOC);
 }

 public function deleteUsuario($id){

 $stmt=$this->con->prepare("delete from admin where id = ?");
$stmt->bindParam(1,$id);
 $stmt->execute();
 
 return ;
 }


 public function saveNewUsuario($datos){

 	$stmt=$this->con->prepare("insert into admin (nombre, correo, contrasena) values ( ?,?,?)");
    $stmt->bindParam(1, $datos["nombre"]);
    $stmt->bindParam(2, $datos["correo"]);
    $stmt->bindParam(3, $datos["contrasena"]);
   

 $stmt->execute();

 }public function guardarActualizacionUsuario($datos){

 	$stmt=$this->con->prepare("update admin set nombre = ?, correo = ?, contrasena = ? where id = ?");
    $stmt->bindParam(1, $datos["nombre"]);
    $stmt->bindParam(2, $datos["correo"]);
    $stmt->bindParam(3, $datos["contrasena"]);
    $stmt->bindParam(4, $datos["id"]);

 $stmt->execute();

 }
}
?>
