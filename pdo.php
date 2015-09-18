<?php
$dbConn = new PDO('mysql:host=127.0.0.1:3307;dbname=frontdesk;charset=utf8;', 'root', '');

$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($dbConn);

$result = $dbConn->prepare('SELECT * FROM Employees');
$result->execute();
$Employees = $result->fetchAll();

var_dump($Employees);
?>