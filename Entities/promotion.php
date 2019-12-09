<?php
class promotion{
    private $Id_promo ;
    private $Promo ;
    private $Datepromo;
  
   

    function __construct($Id_promo,$Promo,$Datepromo)
    {
    $this->Id_promo=$Id_promo;
    $this->Promo=$Promo;
    $this->Datepromo=$Datepromo;
    }
    function getId_promo(){
        return $this->Id_promo ;
    }
    function getPromo(){
        return $this->Promo;
    }
    function getDatepromo(){
        return $this->Datepromo;
    }

}