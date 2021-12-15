<?php

function showItems(){
    global $pdo;
    $query =$pdo->prepare('SELECT orders.id , orders.sushi_id ,orders.customer_id , sushis.name AS sushi_name ,sushis.price, customers.first_name||" "||customers.last_name AS customer_name FROM orders
                                  JOIN sushis 
                                  JOIN customers
                                  ON orders.sushi_id=sushis.id
                                  AND orders.customer_id=customers.id');
    $query->execute();
    $itemsInCart=$query->fetchAll(PDO::FETCH_CLASS);

    return $itemsInCart;
}