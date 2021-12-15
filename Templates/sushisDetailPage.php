<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<?php
require_once ('../Modules/Sushis.php');
global $sushiDetails;

?>
<div class="container custom-cnt">
    <a class="float-end" href="/cart"><button class="btn btn-light px-5"><img class="custom-cart py-3" src="../public/img/cart.svg" alt=""></button></a>
    <div class=" p-5"></div>
    <?php
    foreach ($sushiDetails as $sushi){
        $price=$sushi->price;
        $sushiPrice=(Float) $price;
        $priceBeforeDrop=$sushiPrice+20;
        echo "<h4 class='text-center text-light bg-secondary py-3'>$sushi->name</h4><br><br>";
        global $addItemMssg;
        if($addItemMssg!==""){
            echo $addItemMssg;
        }
        echo "<div class='d-flex align-items-center justify-content-center'>
                <img class='rounded-1' src='$sushi->picture'>
              </div>";
        echo "<h5 class='text-center py-5 px-2 text-light lh-lg'>$sushi->description</h5>";
        echo "<div class='d-flex text-light justify-content-center text-decoration-line-through'>Oude Prijs : $priceBeforeDrop</div><br>";
        echo "<div class='d-flex text-light justify-content-center'><h4>Mega Prijs drop : $sushiPrice €</h4></div><br>";
        echo "<form method='post'>
                <div class='d-flex justify-content-center'>
                    <input type='submit' name='order' class='btn btn-success' value='Toevoegen'>
                </div>
              </form>";
    }
    ?>
    <div class='d-flex justify-content-center py-3'>
        <a href="/sushisMasterPage"><button class="btn btn-light"><img class="backward" src="/img/forward.svg" alt=""> terug keren naar sushis lijst</button></a>
    </div>

</div>
<br>
<?php
require_once ('../Templates/defaults/footer.php');
?>
</body>
</html>



