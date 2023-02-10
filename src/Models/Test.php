<?php
namespace DyosBuscenco\Models;


/**
 * La class Test permet d'effectuer les operations dans la base de donnees
 * Les fonctions declarees ici peuvent etre utilise dans le controller
 */
class Test extends Model{

    /**
     * ce qui permet d'indiquer que les operations effectuer ici sont ceux de la table products
     * A modifier celon la table ou vous operez
     */
    var $table = 'products';

    public function getLast($db, $id = null)
    {
        if(is_null($id)){
            return $db->prepare('SELECT * FROM '.$this->table);
        }else{
            return $db->prepare('SELECT * FROM '.$this->table.' WHERE id=:id', ['id' => $id]);
        }
    }
}
