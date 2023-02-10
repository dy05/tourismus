<header id="cover">
    <img src="<?= MEDIA.'img/header.jpg'; ?>" id="font">
    <span id="cmr" class="ok">
            <img src="<?= MEDIA.'img/cmr.png'; ?>" class="cmr" id="cmrimg">
            <h3>Cliquez sur une region dans l'image</h3>
        </span>
    <div class="bg-cover">
        <div class="header-content container" id="header-content">
            <h1>Tourismus</h1>
            <p>Trouvez un lieu a visiter au Cameroun selon votre convenance et votre budget</p>
            <div class="header-btns">
                <a href="lieu" class="btn btn-transparent">Decouvrez un lieu</a>
                <a href="contact" class="btn btn-yellow">Nous contacter</a>
            </div>
        </div>
    </div>
</header>
<style>
    @media (min-width: 900px) {
        .content{
            margin-top: 400px;
        }
    }
    @media (max-width: 900px) {
        .content{
            margin-top: 200px;
        }
    }
</style>
<section class="content">
    <div class="firstElement">
        <div class="col bar-right">
            <p>
                Vous voulez decouvrir un site touristique au Cameroun ?
                <br/>Vous êtes au bon endroit. Bienvenu sur <b>Tourismus</b>, le site qui vous amène à la décourverte du Cameroun.
            </p>
        </div>
        <div class="col bar-left">
            <p>
                Trouver des lieux extra-ordinaires dans différentes villes, les informations adéquates pour assouvrir votre curiosité et votre enthousiasme.
                <br/>Vous en parlerez comme ci vous étiez deja y aller.
            </p>
        </div>
        <div class="col bar-right">
            <p>
                Rejoignez des groupes d'expeditions accompagnés par des guides expérimentés.
                <br/>Grâce à nos acompagnements lors de différents évènements, redecouvrer la culture camrounaise sous d'autres formes.
            </p>
        </div>
    </div>
    <div class="secondElement">
        <h1>Espaces touristiques</h1>
        <div class="slide" id="slider">
            <div class="slide1 show up">
                <img src="<?= MEDIA.'img/800px-Chutes_de_la_Lobe.jpg'; ?>"/>
            </div>
            <div class="slide2 down up">
            </div>
            <div class="slide3 down up">
            </div>
            <div class="slide4 down up">
            </div>
        </div>
    </div>
    <div class="evenements">
        <h1>Quelques Evenements</h1>
        <div class="card">
            <div class="card__thumb">
                <a href="../../evenements/evenement1.html"><img src="<?= MEDIA.'img/ngondo.JPG'; ?>"/></a>
            </div>
            <div class="card__date">
                <span class="card__date__day">
                    A
                </span>
                <span class="card__date__month">
                    Douala
                </span>
            </div>
            <div class="card__body">
                <div class="card__category">
                    Culture, Festival
                </div>
                <div class="card__title">
                    Festival du Ngondo
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Dans un an.</span>
                </div>
                <p class="card__description">
                    C'est une fête traditionnelle et culturelle antique de la tribu Douala et Grand Sawa (Littoral), qui a pour objectif de réunir les peuples côtiers une fois tous les douze mois en célébrant une grande fête rituelle, mystique et culturelle animée par les hauts dirigeants des différents cantons de la Ville de Douala et sa Métropole...
                    <!--
                                            C'est une fête traditionnelle et culturelle antique de la tribu Douala et Grand Sawa (Littoral), qui a pour objectif de réunir les peuples côtiers une fois tous les douze mois en célébrant une grande fête rituelle, mystique et culturelle animée par les hauts dirigeants des différents cantons de la Ville de Douala et sa Métropole , son déroulement se fait très tôt à l'aube par les Initiés qui pratique le Culte des ancêtres en communiant avec les forces ou esprits de l'eau protecteur du fleuve Wouri, des ondines dénommées Mengu au pluriel ou Jengu en langue duala. Jusqu'en 1972, cette fête était célébrée chaque 12 juillet de l'année civile pour honorer la culture et la civilisation Duala et Sawa et également en souvenir du traité Camerouno-germanique signé par les rois Duala et les autorités allemandes. Après la célèbre et mémorable fête du 12 juillet 1972, cette fête fut interdite par les autorités camerounaises avant de connaître un véritable renouveau et une renaissance. Depuis lors, elle est célébrée au mois de décembre.                    </p>
                    -->
                </p>
            </div>
            <div class="card__button">
                <div class="card__title">
                    Festival du Ngondo
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Dans un an.</span>
                </div>
                <p class="card__description">
                    C'est une fête traditionnelle et culturelle antique de la tribu Douala et Grand Sawa (Littoral), qui a pour objectif de réunir les peuples côtiers une fois tous les douze mois en célébrant une grande fête rituelle...
                    <!--
                                            C'est une fête traditionnelle et culturelle antique de la tribu Douala et Grand Sawa (Littoral), qui a pour objectif de réunir les peuples côtiers une fois tous les douze mois en célébrant une grande fête rituelle, mystique et culturelle animée par les hauts dirigeants des différents cantons de la Ville de Douala et sa Métropole , son déroulement se fait très tôt à l'aube par les Initiés qui pratique le Culte des ancêtres en communiant avec les forces ou esprits de l'eau protecteur du fleuve Wouri, des ondines dénommées Mengu au pluriel ou Jengu en langue duala. Jusqu'en 1972, cette fête était célébrée chaque 12 juillet de l'année civile pour honorer la culture et la civilisation Duala et Sawa et également en souvenir du traité Camerouno-germanique signé par les rois Duala et les autorités allemandes. Après la célèbre et mémorable fête du 12 juillet 1972, cette fête fut interdite par les autorités camerounaises avant de connaître un véritable renouveau et une renaissance. Depuis lors, elle est célébrée au mois de décembre.                    </p>
                    -->
                </p>
                <a href="../../evenements/evenement1.html">
                    Voir plus
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card__thumb">
                <a href="../../evenements/evenement2.html"><img src="<?= MEDIA.'img/niannian.jpg'; ?>"/></a>
            </div>
            <div class="card__date">
                <span class="card__date__day">
                    A
                </span>
                <span class="card__date__month">
                    Ouest
                </span>
            </div>
            <div class="card__body">
                <div class="card__category">
                    Culture, Festival
                </div>
                <div class="card__title">
                    Festival du Baleng
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Fin Decembre 2018.</span>
                </div>
                <p class="card__description">
                    L’apothéose de cette tradition vieille de 800 ans a lieu la dernière semaine pendant laquelle se succèdent carnaval, foire, animations culturelles, défilé de mode, un marathon, une soirée gastronomique ou encore l’élection de Miss Nyang Nyang.
                    <br/>
                    <br/>
                    <br/>
                    <!--
                                            A l'age de 10ans, tout enfant de sexe masculin doit passer un rite initiatique au terme duquel, il peut s’affirmer comme un adulte...
                    -->
                </p>
            </div>
            <div class="card__button">
                <div class="card__title">
                    Festival du Baleng
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Fin Decembre 2018.</span>
                </div>
                <p class="card__description">
                    <br/>
                    L’apothéose de cette tradition vieille de 800 ans a lieu la dernière semaine pendant laquelle se succèdent carnaval, foire, animations culturelles...
                    <!--
                                        A l'age de 10ans, tout enfant de sexe masculin doit passer un rite initiatique au terme duquel, il peut s’affirmer comme un adulte...
                    -->
                </p>
                <a href="../../evenements/evenement2.html">
                    Voir plus
                </a>
            </div>
        </div>
        <div class="card">
            <div class="card__thumb">
                <a href="../../evenements/evenement3.html"><img src="<?= MEDIA.'img/nguon.jpg'; ?>"/></a>
            </div>
            <div class="card__date">
                <span class="card__date__day">
                    A
                </span>
                <span class="card__date__month">
                    Ouest
                </span>
            </div>
            <div class="card__body">
                <div class="card__category">
                    Culture, Festival
                </div>
                <div class="card__title">
                    Festival du Nguon
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Decembre 2018.</span>
                </div>
                <p class="card__description">
                    Du 2 au 9 décembre 2018, la ville de Foumban dans le département du Noun, région de l’Ouest sera parée aux couleurs de la 547e édition du  NGUON, les grandes journées traditionnelles, culturelles et économiques du peuple Bamoun.
                    <!--
                    Comme il est de coutume, plusieurs attractions ludiques vont accompagner ce rendez-vous placé cette année sous le thème
                                            ‘’Le Nguon cadre de ressourcement culturel et d’affermissement du vivre ensemble’’.
                    -->
                    <br/>
                    <br/>
                    <br/>
                </p>
            </div>
            <div class="card__button">
                <div class="card__title">
                    Festival du Nguon
                </div>
                <div class="card__subtitle">
                    Nouvelle edition: <span>Decembre 2018.</span>
                </div>
                <p class="card__description">
                    Du 2 au 9 décembre 2018, la ville de Foumban dans le département du Noun, région de l’Ouest sera parée aux couleurs de la 547e édition du  NGUON, les grandes journées traditionnelles, culturelles et économiques du peuple Bamoun. Comme il est de coutume, plusieurs attractions ludiques vont accompagner ce rendez-vous placé cette année sous le thème ‘’Le Nguon cadre de ressourcement culturel et d’affermissement du vivre ensemble’’.
                </p>
                <a href="../../evenements/evenement3.html">
                    Voir plus
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById("cmrimg").onclick = function () {
        location.href = "<?= MEDIA.'regions/regions'; ?>";
    }
    var images = document.getElementsByClassName("up");
    var i=0;
    setInterval(function()
    {
        images[i].className.toggle("down")
        images[i].className.toggle("show")
        document.getElementById('slider').src=images[i];
        i++;
        if(i==4)
        {
            i=0;
        }
    }, 2000);
</script>

