<?php
// On definit les consante a utiliser dans tout le code tel que le chemin d'acces
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('ROOTER', 'http://'.$_SERVER['HTTP_HOST'].'/tourismus/');
define('MEDIA', ROOTER.'views/public/');

//RewriteRule ^([a-zA-Z0-9\-\_\/\'\"\*\=\(\)\^\%\$\#\@\!\~\`\+\;\'\,\.\?\&]*)$ index.php?p=$1

//insertion de la base de donnees et instancion de la db pour les differentes requettes au serveur
require (ROOT.'src/Db.php');
$db = new TourismusTeam\Db();


//==================================================
// la function qui permet de gerer les lens en function des pages a afficher..
//
///
//==================================================
//$dir = dirname(__FILE__).'/views/pages/';
//$dirs = glob($dir.'*');
//$dirs = str_replace('.php', '', str_replace($dir, '', $dirs));
/*foreach ($dirs as $k => $v){
    echo $k.' => '.$v.'<br/>';
}*/
//var_dump(in_array('home', $dirs));
//die();
//==================================================
//==================================================



//lien vers la class Model principale et la class Controller principale
require (ROOT.'src/Models/Model.php');
require (ROOT.'src/Controllers/Controller.php');

//Apres la redirection des donnees on a une adresse du type index.php?p= , donc on recupere les paramettres contenues dans p, et on separe en tableau les elements avant et apres le '/'
$params = explode('/', $_GET['p']);



// le controller est le premier paramettre et l'action est le second
$controller = $params[0];
//Si le controller est home ou est vide, on le redirige vers la page views/home.php
if($controller === 'admin') {
    echo "<h1>Bienvenue dans votre interface d'administration</h1>";
}elseif($controller === 'home' || $controller === 'index' || empty($controller)){
    /**
     * Ici on va ajouter le home pour la page d'accueil
     * Le fichier views/layouts/index.php sert de template et a l'interieur on a un disign deja fait
     * et ici les informations du fichier views/home.php sont enregistre dans la variable $content et vont apparaitre dans le fichier views/layouts/index.php
     */
    ob_start();
    require(ROOT.'views/pages/home.php');
    $content = ob_get_clean();
    require(ROOT.'views/layouts/index.php');

}else{
    //si il n'a pas d'action, l'action par defaut est index
    //==================================================
    //On pet utiliser l'approche des methodes presente, qui peuvent etre utiliser comme les noms d'uri
    //==================================================
    require('src/Controllers/PagesController.php');
    $page = $params[0];
    $pagesController = new \TourismusTeam\Controllers\PagesController($db);
    if(method_exists($pagesController, $page)){
        call_user_func_array(array($pagesController, $page), array($db, $params));
    }else{
        $db->notFound();
    }

}
