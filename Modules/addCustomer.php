<?php
require_once ('db_conn.php');

function addCustomer($fName, $lName, $adress, $place, $postCode){
    global $pdo;
    try{
        $query=$pdo->prepare('INSERT INTO customers (first_name, last_name, adress, place, postcode)VALUES (?,?,?,?,?)');
        $query->bindParam(1,$fName);
        $query->bindParam(2,$lName);
        $query->bindParam(3,$adress);
        $query->bindParam(4,$place);
        $query->bindParam(5,$postCode);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
