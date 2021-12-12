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
    <div class=" p-5"></div>
    <?php
    foreach ($sushiDetails as $sushi){
        $price=$sushi->price;
        $sushiPrice=(Float) $price;
        $priceBeforeDrop=$sushiPrice+20;
        echo "<h4 class='text-center text-light bg-secondary py-3'>$sushi->name</h4><br><br>";
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
</div>
<br>
<?php
require_once ('../Templates/defaults/footer.php');
?>
</body>
</html>



