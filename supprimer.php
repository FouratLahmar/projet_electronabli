<?php

include "../core/promotionC.php";
include "../entities/promotion.php";
$db = config::getConnexion();
try {
    //$db->prepare($sql) execute une requete prepare
  


    $v1 = $_POST['Id_promo'];
    
    $req = "DELETE from promotion WHERE Id_promo ='$v1'";

    if(!$rep=$db->query($req)){
        die(var_export($db->errorinfo(), TRUE));
    }else{

        header("location: promotion2.php");
    }
}catch(exception $e) {
    die('Erreur : '. $e->getMessage());
}


?>