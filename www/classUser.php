<?php 

class User{

    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $username;
    private $password;

   public function getId(){
       return $this->id;
   }
   public function getNom(){
       return $this->nom;
   }
   public function getPrenom(){
    return $this->prenom;
   }
   public function getEmail(){
    return $this->email;
   }
   public function getPassword(){
    return $this->password;
   }
   public function getUsername(){
    return $this->username;
   }
}


?>