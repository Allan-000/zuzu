<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    ?>
</head>
<body>

<div class="container custom-cnt">
    <div class=" p-5"></div>
    <h4 class="text-center text-light bg-secondary py-3">Meld je hier aan voor je bestelling :</h4>
    <div class="container py-5 h-100">

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <?php
                global $loginMssError;
                if($loginMssError!==''){
                    echo $loginMssError;
                }
                ?>
                <br><br>
                <form action="" method="post">
                    <input class="form-control form-control-md" type="text" name="fname" placeholder="Voor Naam" value=""><br>
                    <input class="form-control form-control-md" type="text" name="lname" placeholder="Achter Naam" value="" ><br>
                    <input class="form-control form-control-md" type="email" name="email" placeholder="email" value="" ><br>
                    <input class="form-control form-control-md" type="text" name="adress" placeholder="Adres" value=""><br>
                    <input class="form-control form-control-md" type="text" name="postcode" placeholder="Postcode" value=""><br>
                    <input class="form-control form-control-md" type="text" name="place" placeholder="Woonplaats" value=""><br><br>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-primary btn-md" type="submit" name="register" value="Aanmelden">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php
include_once ('../Templates/defaults/footer.php');
?>
</body>
</html>



