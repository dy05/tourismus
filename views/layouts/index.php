<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tourismus</title>
    <link rel="icon" href="<?= MEDIA.'img/logo.png'; ?>">
	<link rel="stylesheet" type="text/css" href="<?= MEDIA.'css/main.css'; ?>">
</head>
<body>
<!--     <div id="divJava" class="ExceptionMessage">
        Veuillez activer le Javascript dans votre navigateur pour une plus bonne navigation !
    </div>
 -->	<nav class="navbar full" id="navbar">
		<div class="container" id="menu">
			<a href="#" class="navbar-logo">
				<img src="<?= MEDIA.'img/logo.png'; ?>" id='img'>
			</a>

 			<div class="navbar-menu" id="navbar-menu">
				<a href="index" class="active">Accueil</a>
                <a href="lieux">
                    Lieux
     <!--       
                <a href="lieux" onclick="lieuxFunction()" class="dropBtn" id="lieuxDropBtn">
                    Lieux
                    <div id="lieuxDrop" class="dropdown-content">
                        <a href="#">Régions</a>
                        <a href="#">Catégories</a>
                        <a href="#">Évènements</a>
                    </div>
      -->
                </a>
                <a href="services">
                    Nos services
<!--
                <a href="services" onclick="servicesFunction()" class="dropBtn" id="servicesDropBtn">
                    Nos services
                    <div id="servicesDrop" class="dropdown-content">
                        <a href="#">Les hébergements</a>
                        <a href="#">Les expéditions</a>
                        <a href="#">Guides touristiques</a>
                    </div>
 -->
                </a>
				<a href="galerie">Galerie</a>
				<a href="contact">Contact</a>
			</div>
 			<div class="menuToggle" id="menuToggle">
		        <!--
		          Les 3 bars
		        -->
		        <span></span>
		        <span></span>
		        <span></span>
			</div>

		</div>
	</nav>

    <?= isset($content) ? $content : ''; // le if c'est dans le cas ou quelquun vient pour foudre le bordel ?>

	<footer>
		<ul class="site-map">
			<h2>SiteMap</h2>
			<li><a href="index">Accueil</a></li>
			<li><a href="lieux">Lieux</a></li>
			<li><a href="services">Nos services</a></li>
			<li><a href="galerie">Galerie</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
		<em><span>Tous droits reservés</span>, nous ne sommes pas auteurs de toutes les images disponibles sur ce site.</em>
	</footer>
    <script type="text/javascript" src="<?= MEDIA.'js/main.js'; ?>"></script>
</body>
</html>