<?php
require '../model/database.php';

$db = new database();
$con = $db->conectar();

$activo = 1;

$comando = $con->prepare("SELECT id , codigo, descripcion, stock , activo FROM productos WHERE activo =:mi_Activo ORDER BY codigo ASC");
$comando->execute(['mi_Activo' => $activo]);

$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
