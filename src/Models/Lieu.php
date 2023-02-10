<?php
namespace TourismusTeam\Models;

/**
 * La class Test permet d'effectuer les operations dans la base de donnees
 * Les fonctions declarees ici peuvent etre utilise dans le controller
 */
class Lieu extends Model{

    /**
     * ce qui permet d'indiquer que les operations effectuer ici sont ceux de la table products
     * A modifier celon la table ou vous operez
     */
    var $table = 'articles';

    public function getLast($db, $params = [], $slugmdem = false)
    {
        if(empty($params)){
            return $db->prepare('SELECT * FROM '.$this->table);
        }else{
            if($slugmdem){
                $article = $db->prepare('SELECT * FROM ' . $this->table . ' WHERE slug=:slug', ['slug' => $params['slugs']]);
                if (empty($article)) {
                    $article = $db->prepare('SELECT * FROM ' . $this->table . ' WHERE slug=:slug', ['slug' => $params['slug']]);
                }
            }else {
                $article = $db->prepare('SELECT * FROM ' . $this->table . ' WHERE id=:id', ['id' => $params['id']]);
                if (empty($article)) {
                    $article = $db->prepare('SELECT * FROM ' . $this->table . ' WHERE slug=:slug', ['slug' => $params['slug']]);
                }
            }
            if (!empty($article)) {
                return $article[0];
            }
            return null;
        }
    }
}
