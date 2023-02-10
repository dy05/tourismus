<?php
namespace TourismusTeam\Models;
use TourismusTeam\Db;

/**
 * Class Model
 * Cest sur cette classe qu'est la base de mon application
 */
class Model extends Db
{
    public $table;
    public $bd;

    public function __construct()
    {
        $this->bd = $this->getPDO();
    }

    /**
     * @param null $fields
     * la function Read sert a lire les donnees dans une table ($fields est la selection d'un champ en particulier)
     * et $id d'un id en particulier
     */
    public function read($fields = null, $id = null)
    {
        if($fields == null) {
            $fields = "*";
        }
        if(is_null($id)){
            $sql = "SELECT $fields FROM ".$this->table;
        }else{
            $sql = "SELECT $fields FROM ".$this->table." WHERE id=".$id;
        }
        $this->query($sql);
    }

    /**
     * Fonction save qui prend en parametre $datas
     * qui est la function qui sert a faire un enregistrement dans la base de donnees
     */
    public function save($datas)
    {
        if(isset($datas['id']) && !empty($datas['id'])){
            $sql = "UPDATE ".$this->table." SET ";
            foreach ($datas as $key=>$value){
                if($key !== "id") {
                    $sql .= "$key='$value',";
                }
            }
            $sql = substr($sql,0,-1);
            $sql .= "WHERE id=".$datas['id'];
        }else{
            $sql = "INSERT INTO ".$this->table." (";
            foreach ($datas as $key=>$value){
                $sql .= "$key, ";
            }
            $sql = substr($sql,0,-1);
            $sql .= ") VALUES (";
            foreach ($datas as $val){
                $sql .= "'$val', ";
            }
            $sql = substr($sql,0,-1);
            $sql .= ")";
        }
        $this->query($sql);
        if(!isset($datas['id'])){
            $this->id = lastInsertId();
        }else{
            $this->id = $datas['id'];
            unset($datas['id']);
        }
    }

    /**
     * Fonstion save qui prend en parametre $datas
     * qui est la function qui sert a faire un enregistrement dans la base de donnees
     */
    public function find($datas = array())
    {
        $order = "id DESC";
        $fields = "*";
        $limits = "";
        $conditions = "1=1";
        extract($datas);
        if(isset($datas['id']) && !empty($datas['id'])){
            $sql = "UPDATE ".$this->table." SET ";
            foreach ($datas as $key=>$value){
                if($k !== "id") {
                    $sql .= "$key='$value',";
                }
            }
            $sql = substr($sql,0,-1);
            $sql .= "WHERE id=".$datas['id'];
        }else{
            $sql = "INSERT INTO ".$this->table." (";
            foreach ($datas as $key=>$value){
                $sql .= "$key, ";
            }
            $sql = substr($sql,0,-1);
            $sql .= ") VALUES (";
            foreach ($datas as $val){
                $sql .= "'$val', ";
            }
            $sql = substr($sql,0,-1);
            $sql .= ")";
        }
        $this->query($sql);
        if(!isset($datas['id'])){
            $this->id = lastInsertId();
        }else{
            $this->id = $datas['id'];
            unset($datas['id']);
        }
    }

    public function fin($id){
        return $this->pdo->prepare("
        SELECT * 
        FROM ".$this->table." 
        WHERE id = ?
        ", [$id], get_called_class(), true);
    }

    public function fid($var){
        return $this->getPDO()->prepare("
        SELECT * 
        FROM ".$this->table." 
        WHERE id = ?
        ", [$id], get_called_class(), true);
    }

    public function quer($stmt, $attr = null, $one = false){
        if($attr){
            return $this->getPDO()->prepare($stmt, $attr, get_called_class(), $one);
        }else{
            return $this->getPDO()->prepare($stmt, get_called_class(), $one);
        }
    }

    public function __get($value){
    }



}