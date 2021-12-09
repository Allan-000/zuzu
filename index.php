<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
require_once ('./Modules/addCustomer.php');
require_once ('./Modules/getCustomers.php');
session_start();
if(isset($_POST['register'])){
    if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['adress']) && !empty($_POST['postcode']) && !empty($_POST['place'])){
        $fName=filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
        $lName=filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
        $adress=filter_input(INPUT_POST,'adress',FILTER_SANITIZE_STRING);
        $postCode=filter_input(INPUT_POST,'postcode',FILTER_SANITIZE_STRING);
        $place=filter_input(INPUT_POST,'place',FILTER_SANITIZE_STRING);

    }
    else{
        echo "Niet alle velden zijn ingevuld";
    }
    $customers=getCustomers();
    foreach ($customers as $customer){
        echo $customer->id;
        if(empty($customers) && $customer->id==false){
            echo "gebruiker bestaat niet , wordt toegevoegd";
            $addedCustomers=addCustomer($fName,$lName,$adress,$place,$postCode);
        }
        else if(isset($customer->id)){
            echo "gebruiker bestaat al";
            $existingCustomers=getCustomers();
        }
    }

    echo "<pre>";
//    print_r($customers);
    echo "</pre>";
    echo "<br><br><br>";
    echo "<pre>";
    print_r($customers);
    echo "</pre>";
}
?>
<h2>Sushi ZuZu</h2>
<p>Meld je hier aan</p>
<form action="" method="post">
    <input type="text" name="fname" placeholder="Voor Naam" value=""><br><br>
    <input type="text" name="lname" placeholder="Achter Naam" value="" ><br><br>
    <input type="text" name="adress" placeholder="Adres" value=""><br><br>
    <input type="text" name="postcode" placeholder="Postcode" value=""><br><br>
    <input type="text" name="place" placeholder="Woonplaats" value=""><br><br>
    <input type="submit" name="register" value="Aanmelden">
</form>

</body>
</html>


