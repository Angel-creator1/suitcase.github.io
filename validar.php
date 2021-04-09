<?php
session_start();

$_SESSION['usuario'] = $usuario;
header("location:panel.php");



?>