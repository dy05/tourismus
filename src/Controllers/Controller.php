<?php
namespace TourismusTeam\Controllers;


class Controller{

    /**
     * Les trois variables suivantes permettent de garder les parametres $_POST, $_SESSION, $_COOKIE
     * et $db lui il permet de sauvegarder les informations de connexion a la base de donnees
     */
    public $post;
    public $session;
    public $cache;
    public $db;

    public function __construct($db)
    {
        /**
         * Cette ligne permet d'enregistrer la connexion a la base de donnees
         */
        $this->db = $db;
        /**
         * La condition if suivante permet d'ouvrir tous les models dont le controller a besoin
         * s'il yen a un il l'ouvre et pour decharer un on fait comme suivant
         * var $models = array('Test','Login');
         * donc il va ouvrir le fichier Test.php et Login.php contenues dans le dossier models/ a la racine grace a la fonction modelLoad()
         */

        if(isset($this->models)){
            foreach($this->models as $model){
                $this->modelLoad($model);
            }
        }
        /**
         * Les 3 conditions suivantes permettent de sauvegarder dans les variables $post, $session, $cache les  variables $_POST, $_SESSION, $_COOKIE
         */
        if(isset($_POST)){
            $this->post = $_POST;
        }
        if(isset($_SESSION)){
            $this->session = $_SESSION;
        }
        if(isset($_COOKIE)){
            $this->cache = $_COOKIE;
        }
        /*
        if(isset($_)){
            $this-> = $_;
        }
        */
    }

    /**
     * la variable $vars est le tableau de donnees a renvoyer aux viewers
     * et la variable $layout est la variable qui aide a appelle le fichier test.php contenu dans le dossier /vews/layouts/
     * Vous pouvez faire appell a un autre fichier du meme dossier en faisant dans ce controller ou une autre class enfant la commande suivante
     *     var $layout = 'default';
     * et ou mettre     var $layout = false; si vous ne voulez pas inclure de layout
     * Notez bien que les layouts sont des pages avec un disign ou un certain nombre d'information deja present. et qui permettra juste d'inclure des donnees a l'interieur
     */
    var $vars = array();
    var $layout = 'index';

    /**
     * Cette fonction envoie toutes les donnees recues dans le tableau $vars,
     * Ce qui va permettre de renvoyer les informations des models aux viewers
     */
    public function getVars($p)
    {
        $this->vars = array_merge($this->vars, $p);
    }

    /**
     * cette fonction permet de renvoyer la page a afficher apres avoir renvoye le tableau $vars
     */
    public function render($info = 'home')
    {

        /**
         * cette ligne permet d'extraire le tableau $vars..
         */
        extract($this->vars);

        ob_start();
        require(ROOT.'views/pages/'.$filename.'.php');
        $content = ob_get_clean();

        /**
         * on va faire une petite verification de if layout est false ou est egale a un layout specifique
         * si layout est false, on ne charge pas la page de layout
         * sinon on charge la page de layout et le contenu recemment mit dans la variable $content s'insere dans le layout
         * le layout est le un fichier default.php contenu dans views/layouts, qui peut etre changer par un $layout = 'le_layout_quon_veut'; tout simplement et le fichier le_layout_quon_veut.php doit etre contenue dans le dossiers views/layouts/
         */

        if($this->layout == false){
            echo $content;
        }else{
            require(ROOT.'views/layouts/'.$this->layout.'.php');
        }
    }

    /**
     * Cette fonction permet de charger la page de model dont le controller a besoin
     * Quand on l'appelle on doit obligatoirement donner le nom du fichier model en paramettre
     */
    public function modelLoad($name)
    {
        /**
         * le fichier model se trouve dans le dossiers models/ a la racine
         * et la ligne qui suit permet d'initialiser la variable avec le nom du model qui est en fait une instantion de la class meme presente dans le fichier model actuel portant le meme nom
         */
        $nam = ucfirst($name);
        require(ROOT.'src/Models/'.$nam.'.php');
        $model = str_replace("Controllers\Controller", "Models".'\\'.$name, get_class());
        $modelname = $nam.'Model';
        $this->$modelname = new $model();
    }

}

