<?php
require_once ('db_conn.php');

function getCustomers(){
    global $pdo;
    try{
        $query=$pdo->prepare('SELECT * FROM customers');
        $query->execute();
        $customers=$query->fetchAll(PDO::FETCH_CLASS);

        return $customers;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}