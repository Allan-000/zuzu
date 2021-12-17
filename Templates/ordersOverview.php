<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    require_once ('../Modules/itemsInCart.php');
    ?>
</head>
<body>
<?php
$customer=$_SESSION['customer'][0];
?>
<div class="container custom-cnt">
    <div class=" p-5"></div>
    <h4 class="text-center text-light bg-secondary py-3">Gelukt</h4>
    <div class="d-flex justify-content-center align-items-center flex-column">
        <img class="check-out my-3" src="../public/img/check-circle-fill.svg" alt="">
        <h2 class="text-center text-light py-4">Bedankt voor je bestelling <?php echo $customer->first_name?></h2>
        <h5 class="text-center text-light py-4">Hieronder zie je een overzicht van je bestelling</h5>
    </div>

    <table class="table table-striped">
        <tr>
            <th class='text-light text-center'>Sushi</th>
            <th class='text-light text-center'>Hoeveelheid</th>
        </tr>
        <?php
        $items=showItems($customer->id);
        foreach ($items as $item){
            echo "<tr>";
            echo "<td class='text-light text-center'>$item->sushi_name</td>";
            echo "<td class='text-light text-center'>$item->amount stuks</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
