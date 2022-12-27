<?php
class Database{
    private $connection;

    function __construct()
    {
      include_once dirname(__FILE__).'/connection.php';
      $link=new Connection();
      $this->connection = $link->connect();  
    }
    //Create
    function createApprenant($name, $email,$country,$gender)
    {
        $query=$this->connection->prepare("INSERT INTO Apprenant(name,email,country,gender) VALUES(?,?,?,?)");
        $query->bind_param("ssss",$name,$email,$country,$gender);
        if($query->execute())
        {
            return true;
        }
        return false;
    }

    // Read
    function getApprenant(){
        $query = $this -> connection -> prepare("SELECT * FROM apprenant");
        if($query->execute()){
            $result=$query->get_result();
            return $result;
        }
    }

    //READ de Modification
    function getApprenants($id)
    {
        $query = $this->connection->prepare(" SELECT * FROM apprenant WHERE id=? ");
        $query->bind_param("i",$id);
        if($query->execute()){
            $result = $query->get_result();
            return $result;
        }
    }
        // Mise en Jour des Données dans la Bdd
    function updateApprennant($id,$name,$email,$country,$gender)
    {
        $query = $this->connection->prepare(" UPDATE apprenant SET name=?, email=?, country=?,gender=? where id=?");
        $query->bind_param("ssssi",$name,$email,$country,$gender,$id);
        if($query->execute()){
            return true;
        }
        return false;
    }

    // Suppression des Données dans la BDD
    function deleteApprenant($id){
      $query = $this->connection->prepare("DELETE FROM apprenant Where id=?");
      $query->bind_param("i",$id);
      if($query->execute()){
        return true;
    }
    return false;  
    }

}

?>