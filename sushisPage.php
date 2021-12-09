<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .table , .tr, .th , .td {
            border-collapse: collapse;
            border: 1px solid black;
            padding:2px 50px;
        }
    </style>

</head>
<body>
<?php
require_once ('./Modules/Sushis.php');
$sushis=getSushis();
session_start();
?>
<!--tonen van sushis-->
<h3>Sushis Lijst:</h3><br><br>
<table class="table">
    <?php
    foreach ($sushis as $sushi){
        echo "<tr class='tr'>
        <th class='th'>Sushi Naam :</th>
        <td class='td'>$sushi->name</td>
    </tr>";
        echo "<tr class='tr'>
        <th class='th'>Sushi prijs :</th>
        <td class='td'>$sushi->price</td>
    </tr>";
        echo "<tr class='tr'>
        <th class='th'>Op voorraad</th>
        <td class='td'><b>$sushi->amount</b></td>
    </tr>";
    }

    ?>
</table>
<!--bestelling van gebruiker afhandelen-->
<?php
if(isset($_POST['order'])){
    $toOrderSushi=filter_input(INPUT_POST,'to-order-sushi');
    $toOrderAmount=filter_input(INPUT_POST,'to-order-amount',FILTER_SANITIZE_NUMBER_INT);

}
?>
<h2>Plaats hieronder je bestelling</h2>
<form action="" method="post">
    <select name="to-order-sushi">
        <?php
        foreach ($sushis as $sushi){
            echo"<option value='$sushi->id'>$sushi->name</option>";
        }
        ?>
    </select><br><br>
    <input type="number" name="to-order-amount" placeholder="Hoveel wil je bestellen"><br><br>
    <input type="submit" name="order" value="toevoegen">
</form>

<section>
    <p>zie hier je bestelling lijst</p>
</section>
<?php
var_dump($_SESSION);
?>
</body>
</html>

