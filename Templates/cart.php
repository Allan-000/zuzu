<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    require_once ('../Modules/itemsInCart.php');
    ?>
</head>
<body>
<div class="container custom-cnt">
    <div class="py-4"></div>
    <h4 class='text-center text-light bg-secondary py-3'>Uw winkel mandje</h4><br><br>
    <table class="table">
        <tr>
            <th class='text-light'>Bestelling Nummer</th>
            <th class='text-light'>Klant Nummer</th>
            <th class='text-light'>Klant Naam</th>
            <th class='text-light'>Items</th>
            <th class='text-light'>Hoeveelheid</th>
            <th class='text-light'>Prijs</th>
        </tr>
        <?php
        global $toShowItems;
        $totalToCheckOut=0;

        foreach ($toShowItems as $item){
            $sushiTotalPrice=$item->amount*$item->price;
            echo "
            <tr>
            <th class='text-light'>$item->bestelling_nummer</th>
            <th class='text-light'>$item->klant_nummer</th>
            <th class='text-light'>$item->customer_name</th>
            <th class='text-light'>$item->sushi_name</th>
            <th class='text-light'>$item->amount</th>
            ";
            echo "<th class='text-light'>$sushiTotalPrice €</th>";
            echo"</tr>";
            $totalToCheckOut=$sushiTotalPrice+$totalToCheckOut;
        }
        echo "<br>";
        echo "<tr>";
        echo "<td class='text-light'>Totaal te betalen :</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th class='text-light'><b>$totalToCheckOut €</b></th>";
        echo "</tr>";
        ?>
    </table>
    <div class="d-flex justify-content-center my-3">
        <button class="btn btn-success"><a class="text-decoration-none text-light" href="/ordersOverview">Bestelling Plaatsen</a></button>
    </div>
</div>
</body>
</html>
