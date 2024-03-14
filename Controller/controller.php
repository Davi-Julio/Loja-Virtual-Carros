<?php

include_once "./Model/config.php";

$sql =  "SELECT * FROM loja";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();

?>