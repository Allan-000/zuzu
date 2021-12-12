<?php
require_once ('../Modules/db_conn.php');
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


function getSushiDetails($id){
    global $pdo;
    try{
        $query=$pdo->prepare('SELECT * FROM sushis WHERE id=:id');
        $query->bindParam('id',$id);
        $query->execute();
        $sushiDetails=$query->fetchAll(PDO::FETCH_CLASS);

        return $sushiDetails;

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}