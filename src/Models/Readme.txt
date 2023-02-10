Chaque fichier ne doit contenir qu'une seule class et qui de plus doit avoir le meme nom que le nom du fichier
De plus, cette class doit extends la class Modal contenue dans le fichier Model.php contenu dans le dossier Src situe a la racine
On doit declare la table dans laquelle on travaille au prealable en faisant comme suit
    var $table = 'nom_de_la_table';
Pour faire une interaction avec la base de donnees il faut appeller le $db et le mettre en paramettre aussi
