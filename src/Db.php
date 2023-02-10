<?php
namespace TourismusTeam;

use \PDO;
use \PDOException;

class Db
{

    protected $host = "localhost";
    protected $base = "tourismus";
    protected $user = "root";
    protected $mdp = "@soyd237";
    private $pdo;
    private $rep;

    public function __construct($base=null,$pass=null,$host=null,$user=null)
    {
        //Connexion à la base de données

        if(!is_null($base)){
            $this->base = $base;
        }
        if(!is_null($pass)){
            $this->pass = $pass;
        }
        if(!is_null($user)){
            $this->user = $user;
        }
        if(!is_null($host)){
            $this->host = $host;
        }

        try {
            $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->base . ';charset=UTF8;', '' . $this->user . '', '' . $this->mdp . '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $db;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function getPDO(){
        return $this->pdo;
    }

    public function notFound()
    {
        header('Location:'.WEBROOT.'404.php');
    }


    public function notFoundArticle()
    {
        header('Location:'.WEBROOT.'404.php');
    }

    public function query($req)
    {
        $this->rep = $this->pdo->prepare($req);
        $this->rep->execute();
        return $this->rep->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function prepare($req, $datas = array())
    {
        $this->rep = $this->pdo->prepare($req);
        $this->rep->execute($datas);
        return $this->rep->fetchAll(PDO::FETCH_OBJ);
//        return $this->rep->fetchAll();
    }
    
    public function rowCount(){
        return $this->rep->rowCount();
    }
    
    //Returns last inserted id
    public function lastInsertId(){
        return $this->rep->lastInsertId();
    }


}
