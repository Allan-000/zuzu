<?php

function addItem($sushiId,$customer_id,$amount){
    global $pdo;
    try {
        $query=$pdo->prepare('INSERT INTO orders (sushi_id, customer_id, amount) VALUES (:sushi_id, :customer_id, :amount)');
        $query->bindParam('sushi_id', $sushiId);
        $query->bindParam('customer_id',$customer_id);
        $query->bindParam('amount',$amount);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}