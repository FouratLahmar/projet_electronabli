<?php
class user{
    private $id ;
    private $email ;
    private $firstname;
    private $lastname;
    private $password;
    private $address;
    private $tel;
    private $role;
    
   
    function __construct($id,$email,$firstname,$lastname,$password,$address,$tel,$role)
    {
    $this->id=$id;
    $this->email=$email;
    $this->firstname=$firstname;
    $this->lastname=$lastname;
    $this->password=$password;
    $this->address=$address;
    $this->tel=$tel;
    $this->role=$role;
    }
    function getid(){
        return $this->id ;
    }
    function getemail(){
        return $this->email;
    }
    function getfirstname(){
        return $this->firstname;
    }
    function getlastname(){
        return $this->lastname ;
    }
    function getpassword(){
        return $this->password ;
    }
    function getaddress(){
        return $this->address ;
    }
    function gettel(){
        return $this->tel ;
    }
    
    function getrole(){
        return $this->role ;
    }

}