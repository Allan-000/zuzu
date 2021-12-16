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
    <table class="table ">
        <tr>
            <th class='text-light'>Bestelling Nummer</th>
            <th class='text-light'>Klant Nummer</th>
            <th class='text-light'>Klant Naam</th>
            <th class='text-light'>Items</th>
            <th class='text-light'>Hoeveelheid</th>
            <th class='text-light'>Prijs</th>
            <th class='text-light'>verwijderen</th>
        </tr>
        <?php
        global $toShowItems;
        foreach ($toShowItems as $item){
            echo "
            <tr>
            <th class='text-light'>$item->bestelling_nummer</th>
            <th class='text-light'>$item->klant_nummer</th>
            <th class='text-light'>$item->customer_name</th>
            <th class='text-light'>$item->sushi_name</th>
            <th class='text-light'>$item->amount</th>
            <th class='text-light's>$item->price. €</th>
            <th class='img-fluid trash-can'><img src='/img/trash-alt-regular.svg' alt=''></th>
            </tr>
            ";
        }
        ?>
    </table>
</div>
</body>
</html>
