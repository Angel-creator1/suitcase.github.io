<?php

class cuestionariosModel{

 private $con;

 public function __construct(){

 $this->con=Conectar::getConexion();

 }public function getcuestionarios(){

 $stmt=$this->con->prepare("select * from cuestionarios;");
 $stmt->execute();
 
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 public function getcuestionario($id){

 $stmt=$this->con->prepare("select * from cuestionarios where id = ?");
$stmt->bindParam(1,$id);
 $stmt->execute();
 
 return $stmt->fetch(PDO::FETCH_ASSOC);
 }

 public function deletecuestionario($id){

 $stmt=$this->con->prepare("delete from cuestionarios where id = ?");
$stmt->bindParam(1,$id);
 $stmt->execute();
 
 return ;
 }


 public function saveNewcuestionario($datos){

 	$stmt=$this->con->prepare("insert into cuestionarios (componente, correo, contrasena) values ( ?,?,?)");
    $stmt->bindParam(1, $datos["componente"]);
    $stmt->bindParam(2, $datos["correo"]);
    $stmt->bindParam(3, $datos["contrasena"]);
   

 $stmt->execute();

 }public function guardarActualizacioncuestionario($datos){

 	$stmt=$this->con->prepare("update cuestionarios set Componente = ?, correo = ?, contrasena = ? where id = ?");
    $stmt->bindParam(1, $datos["Componente"]);
    $stmt->bindParam(2, $datos["correo"]);
    $stmt->bindParam(3, $datos["contrasena"]);
    $stmt->bindParam(4, $datos["id"]);

 $stmt->execute();

 }
}
?>
