<?php
namespace TourismusTeam\Controllers;

class TestController extends Controller{

    /**
     * cette variable charge les differents models a ouvrir, dans le cas present, elle ouvre juste le model Test
     */
    var $models = array('Test');
    
    /**
     * La fonction index doit etre presente dans tous les controllers
     * De tel facon que ce soit elle qui soit ouvert par defaut
     */
    public function index()
    {
        /**
         * la variable p est un tableau qui renvoit les differente informations obtenue apres le traitement par les models aux viewers
         * et pour avoir acces a ces informations, si on a un $p['namehere'], dans le viewer, on aura un tableau dans la variable $namehere qu'on doit faire un foreach
         */
        $p = array();
        /**
         * Le Traitement dans la classe Test du model test
         * la function getLast() appelle ci dessous renvoit un tableau d'information issu de la base de donnees
         */
        $p['values'] = $this->Test->getLast($this->db);
        /**
         * Dans le viewer on aura un tableau dans la variable $info qui nous permettra de remplir les differentes informations pour la recherche google par exemple
         * la fonstion getVars( qui prend $p en paramettre) doit obligatoirement contenir un paramattre car ce paramettre va etre ajouter au tableau $vars de la classe Controller parent
         * pour etre ensuite renvoyer aux viewers
         * la fonction render() prend obligatoirement un string en paramettre qui le permet d'afficher la page en <question class="">
         * z.B.: si on a en paramettre 'home', cela ouvrira le fichier home.php contenu dans le dossier ayant le meme nom que le model et ce dossier lui meme est contenu dans le dossiers views/ a la racine
         */
        $p['info'] = array(
            'title' => 'Test',
            'description' => 'Description de test'
        );
        $this->getVars($p);
        $this->render('index');
    }

    /**
     * la fonction view permet de recuperer les informations contenues dans un id et d'ouvrir le fichier views.php contenu dans le dossier ayant le meme nom que la classe et lui meme contenu dans le dossier views/ a la racine
     */
    public function view($db, $id=null)
    {

        $p = array();
        if(!is_null($id)){
            $idi = $id[2];
            if(!empty($idi) && !is_null($id) && filter_var($idi, FILTER_VALIDATE_INT)){
            
                /**
                 * On envoit les informations a la page views.php grace au ligne suivante
                 * et la derniere ligne lui permet d'ouvrir le fichier view.php
                 * Pour faire appelle a une fonction qui communique avec la base de donees, il faut absolument lui passer le $this->db en paramettre
                 */
                $p['values'] = $this->Test->getLast($this->db, $idi);
                $p['test'] = array(
                    'title' => 'Test',
                    'description' => 'Description de test'
                );
                $this->getVars($p);
                $this->render('view');
            }else{
                /**
                 * On renvoit un 404 si le idi nest pas un entier
                 */
                $db->notFound();
            }
        }else{
            /**
             * ce else n'est apprioriment pas neccessaire
             */
            $p['values'] = $this->Test->getLast($this->db);
            $p['test'] = array(
                'title' => 'Test',
                'description' => 'Description de test'
            );
            $this->getVars($p);
            $this->render('index');
        }
        
    }

}