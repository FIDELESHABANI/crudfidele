<?php

class Connection{

  private $connection;

  function __construct (){}
  
  function connect(){
    $this -> connection = new mysqli('localhost','root','','Apprenant'); 

    if(mysqli_connect_error())
    {
        echo 'Error';
        die('connexion error'.mysqli_connect_error());
    }

    return $this->connection;
}


}   

?>