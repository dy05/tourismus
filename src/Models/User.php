<?php
namespace TourismusTeam\Models;

/**
 * La class Test permet d'effectuer les operations dans la base de donnees
 * Les fonctions declarees ici peuvent etre utilise dans le controller
 */
class User extends Model{

    /**
     * ce qui permet d'indiquer que les operations effectuer ici sont ceux de la table products
     * A modifier celon la table ou vous operez
     */
    var $table = 'users';

    public function getLast($db, $id = null)
    {
        if(is_null($id)){
            return $db->prepare('SELECT * FROM '.$this->table);
        }else{
            return $db->prepare('SELECT * FROM '.$this->table.' WHERE name=:id', ['id' => $id])[0];
        }
    }
}
