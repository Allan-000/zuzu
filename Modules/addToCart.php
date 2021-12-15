<?php

function addItem($sushiId,$customer_id){
    global $pdo;
    try {
        $query=$pdo->prepare('INSERT INTO orders (sushi_id, customer_id) VALUES (:sushi_id, :customer_id)');
        $query->bindParam('sushi_id', $sushiId);
        $query->bindParam('customer_id',$customer_id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}