<?php
include "../config.php";
class promotionC
{
    function afficherpromo()
    {
        $sql="SELECT * From promotion";
        $db = config::getConnexion();
        try {
            //$db->prepare($sql) execute une requete prepare
            $liste = $db->query($sql);
            return $liste;
        }catch(exception $e) {
            die('Erreur : '. $e->getMessage());
        }

    }
    function ajouterpromo($promotion)
    {

        $sql = "INSERT into promotion (Id_promo,Promo,Datepromo) 
                values (:Id_promo,:Promo,:Datepromo) ";

        $db = config::getConnexion();
        
        try{

        $req=$db->prepare($sql);
		
        $Id_promo=$promotion->getId_promo();
        $Promo=$promotion->getPromo();
        $Datepromo=$promotion->getDatepromo();

    
        $req->bindValue(':Id_promo',$Id_promo);
		$req->bindValue(':Promo',$Promo);
        $req->bindValue(':Datepromo',$Datepromo);

        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }
    function trouverpromo($Id_promo)
    {
        $sql="SELECT * from promotion where Id_promo=$Id_promo";
        $db = config::getConnexion();
        
        try{
            $liste = $db->query($sql);
            return $liste;
        }catch(exception $e) {
            die('Erreur : '. $e->getMessage());
        }
    
    }
    function modifierpromo($promotion,$Id_promo){
        $sql="UPDATE promotion SET Id_promo=:Id_promo, Promo=:Promo,Datepromo=:Datepromo WHERE Id_promo=:Id_promo";
        
        $db = config::getConnexion();
        try{
    
            $req=$db->prepare($sql);
            
            $Id_promo=$promotion->getId_promo();
            $Promo=$promotion->getPromo();
            $Datepromo=$promotion->getDatepromo();

        
            $req->bindValue(':Id_promo',$Id_promo);
            $req->bindValue(':Promo',$Promo);
            $req->bindValue(':Datepromo',$Datepromo);

            
            $req->execute();
        
    
        
        
        $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
    /*   echo " Les datas : " ;
    print_r($datas);*/
        }
        
    }
}