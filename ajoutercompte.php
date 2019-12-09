<?php

include "../core/usersC.php";
include_once "../entities/user.php";

if (!empty($_POST['id']) and 
    !empty($_POST['email']) and 
    !empty($_POST['firstname'])and 
    !empty($_POST['lastname'])and 
    !empty($_POST['password'])and 
    !empty($_POST['address'])and 
    !empty($_POST['tel'])and 
    !empty($_POST['role']))
{ 
     
$user1=new userC($_POST['id'],$_POST['email'],$_POST['firstname'],$_POST['lastname'],$_POST['password'],$_POST['address'],$_POST['tel'],$_POST['role']);
    

    
$user1C=new userC();

$user1C->ajoutercompte($user1);
header('Location: ../../View/compte.html');
}
else echo("Verifier les Champs! ");




?>