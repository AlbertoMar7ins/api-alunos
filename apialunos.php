<?php

require "config.php";

$consulta = $pdo->prepare("SELECT * FROM alunos order by nome");
$consulta->execute();

$rows = array();
while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {

    $rows[] = $row;

}

echo json_encode($rows);