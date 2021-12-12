<?php
require_once ('db_conn.php');

function getCustomer($email){
    global $pdo;
    try{
        $query=$pdo->prepare('SELECT * FROM customers WHERE email = :email');
        $query->bindParam('email',$email);
        $query->execute();
        $customers=$query->fetchAll(PDO::FETCH_CLASS);

        return $customers;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}