<?php

function showItems($userId){
    global $pdo;
    $query =$pdo->prepare('SELECT orders.id AS bestelling_nummer ,orders.customer_id AS klant_nummer, orders.amount, sushis.name AS sushi_name ,sushis.price, concat(customers.first_name, " ", customers.last_name) AS customer_name FROM orders
                                  JOIN sushis 
                                  JOIN customers
                                  ON orders.sushi_id=sushis.id
                                  AND orders.customer_id=customers.id
                                  WHERE customers.id=:id');

    $query->bindParam('id',$userId);
    $query->execute();
    $itemsInCart=$query->fetchAll(PDO::FETCH_CLASS);

    return $itemsInCart;
}