<?php
require_once ('../Modules/addCustomer.php');
require_once('../Modules/getCustomer.php');
session_start();
if(isset($_POST['register'])){
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['adress']) && !empty($_POST['postcode']) && !empty($_POST['place']) && !empty($_POST['email'])){
        $fName=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
        $lName=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
        $email=filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
        $adress=filter_input(INPUT_POST,'adress',FILTER_SANITIZE_STRING);
        $postCode=filter_input(INPUT_POST,'postcode',FILTER_SANITIZE_STRING);
        $place=filter_input(INPUT_POST,'place',FILTER_SANITIZE_STRING);

    }
    else{
        echo "Niet alle velden zijn ingevuld";
    }

    //if the user exists login, otherwise register
    if($customer=getCustomer($email)){
        $_SESSION['customer']=$customer;
    }
    else{
        $addesCustomer=addCustomer($fName,$lName,$email,$adress,$place,$postCode);
        $_SESSION['customer']=$addesCustomer;
    }

}

?>
<h2>Sushi ZuZu</h2>
<p>Meld je hier aan</p>
<form action="/sushisPage" method="post">
    <input type="text" name="fname" placeholder="Voor Naam" value=""><br><br>
    <input type="text" name="lname" placeholder="Achter Naam" value="" ><br><br>
    <input type="email" name="email" placeholder="email" value="" ><br><br>
    <input type="text" name="adress" placeholder="Adres" value=""><br><br>
    <input type="text" name="postcode" placeholder="Postcode" value=""><br><br>
    <input type="text" name="place" placeholder="Woonplaats" value=""><br><br>
    <input type="submit" name="register" value="Aanmelden">
</form>
