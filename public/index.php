<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    --><?php
//    include_once ('../Templates/defaults/head.php');
//    ?>
<!--</head>-->
<!--<body>-->
<?php
require_once ('../Modules/addCustomer.php');
require_once('../Modules/getCustomer.php');
require_once('../Modules/Sushis.php');
session_start();
$request=$_SERVER['REQUEST_URI'];
$params=explode('/',$request);

$loginMssError='';

switch ($params[1]){
    case '':
        include_once('../Templates/home.php');
        break;
    case 'loginForm':
        if(isset($_POST['register'])){
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['adress']) && !empty($_POST['postcode']) && !empty($_POST['place']) && !empty($_POST['email'])){
                $fName=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
                $lName=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
                $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
                $adress=filter_input(INPUT_POST,'adress',FILTER_SANITIZE_STRING);
                $postCode=filter_input(INPUT_POST,'postcode',FILTER_SANITIZE_STRING);
                $place=filter_input(INPUT_POST,'place',FILTER_SANITIZE_STRING);

                //if the user exists login, otherwise register
                if($customer=getCustomer($email)){
                    $_SESSION['customer']=$customer;
                }
                else{
                    $addesCustomer=addCustomer($fName,$lName,$email,$adress,$place,$postCode);
                    $_SESSION['customer']=$addesCustomer;
                }
                header("Location: /sushisMasterPage");

            }
            else{
                $loginMssError="<h5 class='alert alert-danger m-auto text-center'>Niet alle velden zijn ingevuld</h5>";
            }


        }
        include_once('../Templates/loginForm.php');
        break;
    case 'sushisMasterPage':
        include_once('../Templates/sushisMasterPage.php');
        break;
    case 'sushisDetailPage':
        $sushiDetails='';
        if(isset($_GET['id'])){
            $sushiId=$_GET['id'];
            $sushiDetails=getSushiDetails($sushiId);
        }
        if(isset($_POST['order'])){
            $_SESSION['orderdItems']=$sushiId;
        }
        include_once('../Templates/sushisDetailPage.php');
        break;
}

?>
</body>
</html>


