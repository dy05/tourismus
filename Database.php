<?php
use \PDO;


class Database{

    protected $pdo;
    protected $database = 'dyostest';
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '@soyd237';

    public function __construct($database = 'dyostest', $username = 'root', $password = '@soyd237', $host = 'localhost')
    {
        $this->database = $database;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getPDO()
    {
        if ($this->pdo === null) {
            $pdo = new PDO("mysql:dbname=$this->database;host=$this->host", $this->username, $this->password);
//            $pdo = new PDO("mysql:dbname=dyostest;host=localhost", 'root', '@soyd237');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name, $one = false)
    {
        $req = $this->getPDO()->query($statement);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one) {
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    public function prepare($statement, $attributes, $class_name, $one = false)
    {
        $req = $this->getPDO()->prepare($statement);
        if (strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0){
            return $req->execute($attributes);
        }

        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if($one) {
            $datas = $req->fetch();
        }else{
            $datas = $req->fetchAll();
        }
        return $datas;
    }

    public function lastInsertId()
    {
        return $this->getPDO()->lastInsertId();
    }

}
/*
class Database{

    public static $table;

    public static function find($id)
    {
        return static::query("
            SELECT * FROM ".static::$table." WHERE id = ?
        ", [$id], get_called_class(), true);
    }

    public static function query($statement, $attributes = null, $one = false)
    {
        return [];
    }

    public static function update($datas)
    {
        $sql = 'UPDATE '.static::$table.' SET ';
        $fragments = [];
        foreach ($datas as $k => $v){
            $fragments[] = "$k = ?";
        }
        $sql .= implode(', ', $fragments);
        $sql .= " WHERE id = ?";
        $values[] = $this->id;
        if ($this->query($sql, $values)){
            foreach ($datas as $k => $v) {
                $this->$k = $v;
            }
            return true;
        }else{
            return false;
        }
    }

    public static function delete()
    {
        $sql = 'DELETE FROM '.static::$table.' WHERE id = ?';
        if($this->query($sql, [$this->id])){
            return true;
        }else{
            return false;
        }
    }

}*/
