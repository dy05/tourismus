<?php
namespace TourismusTeam\Controllers;

use TourismusTeam\Db;
use TourismusTeam\Models\Lieu;

class PagesController extends Controller{

    /**
     * cette variable charge les differents models a ouvrir, dans le cas present, elle ouvre juste le model Test
     */
    var $models = array('Lieu');
    
    public function index()
    {
        $p = array(
            'filename' => 'home',
            'titre' => 'Accueil',
            'title' => 'Home',
            'description' => 'Welcome to our website Tourismus',
            'contenu' => 'Bienvenue sur notre site web Tourismus'
        );
        $this->getVars($p);
        $this->render('index');
    }

    /**
     * La methode qui va permettre d'ouvrir la page services
     */
    public function services($db)
    {
        $p = array(
            'filename' => 'services',
            'titre' => 'Nos services',
            'title' => 'Our services',
            'contenu' => 'Nous vous offrons nos meilleurs services',
            'description' => 'We offer you our best features'
        );
        $this->getVars($p);
        $this->render();
    }

    /**
     * La methode qui va permettre d'ouvrir la page contact
     */
    public function contact($db)
    {
        $p = array(
            'filename' => 'contact',
            'titre' => 'Contactez Nous',
            'title' => 'Contact Us',
            'description' => 'Contact Us for any problem or suggestion',
            'contenu' => 'Contactez nous en cas de probleme'
        );
        $this->getVars($p);
        $this->render();
    }

    /**
     * La methode qui va permettre d'ouvrir la page lieux
     */
    public function lieux($db)
    {
        $p = array(
            'filename' => 'lieux',
            'titre' => 'Nos lieux',
            'title' => 'Our places',
            'description' => 'Discover our best Place',
            'contenu' => 'Decrouvrez nos differents lieux'
        );
        $this->getVars($p);
        $this->render();
    }


    /**
     * @param Db $db
     * @param null $params
     * La methode qui va permettre d'ouvrir la page lieu
     */
    public function lieu($db, $params = null)
    {
        $name = $params[1];
        $param = preg_split('/-/', $name);
        $id = end($param);
        $count = mb_strlen($id) + 1;
        $slug = mb_substr($params[1], 0,'-'.$count);

        $lieuModel = new Lieu();

        if (empty($params[1])){
            $lieu = $lieuModel->getLast($db);
        }elseif (!filter_var($id, FILTER_VALIDATE_INT)){
            $lieu = $lieuModel->getLast($db, ['slugs' => $name, 'slug' => $slug], true);
        }else{
            $lieu = $lieuModel->getLast($db, ['slug' => $slug, 'id' => $id]);
        }

        if(is_null($lieu)){
            $db->notFoundArticle();
        }

        //Trouvez un lieu au hasard
        $p = array(
            'filename' => 'lieu',
            'titre' => $lieu->titre,
            'title' => $lieu->title,
            'description' => $lieu->description,
            'contenu' => $lieu->contenu,
            'content' => $lieu->content,
            'lieu' => $lieu
        );
        $this->getVars($p);
        $this->render();
    }


    /**
     * La methode qui va permettre d'ouvrir la page galerie
     */
    public function galerie($db)
    {
        $p = array(
            'filename' => 'galerie',
            'title' => 'Galery',
            'titre' => 'Galerie',
            'contenu' => 'Decouvrez nos meilleurs contenus photos',
            'description' => 'Discover our best pictures'
        );
        $this->getVars($p);
        $this->render();
    }

}