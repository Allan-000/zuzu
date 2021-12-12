<?php
require_once ('db_conn.php');

function addCustomer($fName, $lName, $email, $adress, $place, $postCode){
    global $pdo;
    try{
        $query=$pdo->prepare('INSERT INTO customers (first_name, last_name, email, adress, place, postcode)VALUES (?,?,?,?,?,?)');
        $query->bindParam(1,$fName);
        $query->bindParam(2,$lName);
        $query->bindParam(3,$email);
        $query->bindParam(4,$adress);
        $query->bindParam(5,$place);
        $query->bindParam(6,$postCode);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
