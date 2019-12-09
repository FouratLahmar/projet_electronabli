<?php
include "../config.php";


class userC
{
    function ajoutercompte($user)
    {

        $sql = "INSERT into users (id,email,firstname,lastname,password,address,tel,role) 
                values (:id,:email,:firstname,:lastname,:password,:address,:tel,:role) ";

        $db = config::getConnexion();
        
        try{

        $req=$db->prepare($sql);

        $id=$user->getid();
        $email=$user->getemail();
        $firstname=$user->getfirstname();
        $lastname=$user->getlastname();
        $password=$user->getpassword();
        $address=$user->getaddress();
        $tel=$tel->gettel();
        $erole=getrole();


        $req->bindValue(':id',$id);
		$req->bindValue(':email',$email);
        $req->bindValue(':firstname',$firstname);
        $req->bindValue(':lastname',$lastname);
        $req->bindValue(':password',$password);
        $req->bindValue(':address',$address);
        $req->bindValue(':tel',$tel);
        $req->bindValue(':role',$role);

        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }
   
}