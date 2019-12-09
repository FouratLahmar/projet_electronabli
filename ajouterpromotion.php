<?php
include "../core/promotionC.php";
include "../entities/promotion.php";

if (!empty($_POST['Id_promo']) and 
    !empty($_POST['Promo']) and 
    !empty($_POST['Datepromo']))
{ 
     
$promotion1=new promotion($_POST['Id_promo'],$_POST['Promo'],$_POST['Datepromo']);
    

    
$promotion1C=new promotionC();

$promotion1C->ajouterpromo($promotion1);
header('Location: promotion2.php');
}
else echo("Verifier les Champs! ");




?>