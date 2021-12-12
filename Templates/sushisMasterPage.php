<!doctype html>
<html lang="en">
<head>
    <?php
    include_once('../Templates/defaults/head.php');
    ?>
</head>
<body>
<?php
require_once ('../Modules/Sushis.php');
$sushis=getSushis();
?>
<div class="container custom-cnt">
    <div class=" p-5"></div>
    <h4 class="text-center text-light bg-secondary py-3">Sushis Lijst</h4>
    <div class="container">
        <?php
        foreach ($sushis as $sushi){
            echo "<div class='row'>
                    <div class='col-lg-6'>
                        <div class='d-flex flex-column'>
                            <h4 class='text-center text-light'><a class='text-light text-decoration-none' href='sushisDetailPage/$sushi->id'>$sushi->name</a></h4>
                            <p class='text-light text-center'><a class='text-light text-decoration-none' href='sushisDetailPage/$sushi->id'>$sushi->description</a></p>
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <img class='custom-img float-end mx-5' src='$sushi->picture' alt=''>
                    </div>
                    <hr class='bg-light'>
                </div>";
        }
        ?>
    </div>
</div>
<br>
<?php
include_once ('../Templates/defaults/footer.php');
?>
</body>
</html>

