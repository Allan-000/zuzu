<!doctype html>
<html lang="en">
<head>
    <?php
    include_once ('../Templates/defaults/head.php');
    ?>
</head>
<body>
<?php
$request=$_SERVER['REQUEST_URI'];
$params=explode('/',$request);

switch ($params[1]){
    case '':
        include_once ('../Templates/home.php');
        break;
    case 'sushisPage':
        include_once ('../Templates/sushisPage.php');
        break;

}

?>
</body>
</html>


