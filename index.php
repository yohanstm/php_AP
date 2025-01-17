<?php
include('application.php');
$_GET['page']; // prend toute les variable passer dans le lien, apres les = ( exemple apres le 8080 on met "/page=1)

if(isset($_GET['page']))
{
    $page = $_GET['page'];

}
else {
    $page = 1;
}


$monapp = new appVC();


$monapp -> afficherpage($page);
?>