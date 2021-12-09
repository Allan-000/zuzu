<?php
$host='localhost';
$db_name='zuzu';
$user='root';
$password='';

$dsn="mysql:host=$host;dbname=$db_name";

try {
    $pdo=new PDO($dsn,$user,$password);
}
catch (PDOException $e){
    echo $e->getMessage();
}

