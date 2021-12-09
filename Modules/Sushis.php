<?php
require_once ('./Modules/db_conn.php');
global $pdo;
function getSushis(){
    global $pdo;
    try{
        $query=$pdo->prepare('SELECT * FROM sushis');
        $query->execute();
        $sushis=$query->fetchAll(PDO::FETCH_CLASS);
        return $sushis;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}
