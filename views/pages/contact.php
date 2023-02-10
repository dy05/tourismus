<header id="cover-other">
    <div class="bg-cover-other">
        <h1>Tourismus</h1>
        <p>
            Nous Contacter
        </p>
    </div>
</header>

<section class="content">
    <div class="contents">
        <div class="team cont content1">
            <h1>Membres de la team</h1>
            <div class="team-item team-item1">
<!--
                <img src="img/team1.jpg" alt="">
                <img class="team-im" ids="team-img" src="<?= MEDIA.'/img/team.jpg'; ?>" alt="">
-->
                <img class="team-img" id="team-img1" src="<?= MEDIA.'/img/team1.jpg'; ?>" alt="">
                <h2>KAMBOU KEMAMEN</h2>
<!--
                <h2>KAMBOU KEMAMEN Audrey</h2>
-->
                <h3>Directrice</h3>
            </div>
            <div class="team-item team-item1">
                <img class="team-img" id="team-img2" src="<?= MEDIA.'/img/team2.jpg'; ?>" alt="">
<!--
                <img src="img/team2.jpg" alt="">
-->
                <h2>MANEFA Yousouf</h2>
                <h3>Developpeur</h3>
            </div>
            <div class="team-item team-item1">
<!--
                <img src="img/team3.jpg" alt="">
                <img class="team-im" ids="team-img" src="<?= MEDIA.'/img/team.jpg'; ?>" alt="">
-->
                <img class="team-img" id="team-img3" src="<?= MEDIA.'/img/team3.jpg'; ?>" alt="">
                <h2>TAGNE YOUBI</h2>
                <!--<h2>TAGNE YOUBI Audrey</h2>-->
                <h3>Communicatrice</h3>
            </div>
            <div class="team-item">
<!--
                <img src="img/team4.jpg" alt="">
                <img class="team-im" ids="team-img" src="<?= MEDIA.'/img/team.jpg'; ?>" alt="">
-->
                <img class="team-img" id="team-img4" src="<?= MEDIA.'/img/team4.jpg'; ?>" alt="">
                <h2>YOUTA OBBY</h2>
<!--
                <h2>YOUTA OBBY Sidane</h2>
-->
                <h3>Vice-directeur</h3>
            </div>
            <div class="team-item">
<!--
                <img src="img/team5.jpg" alt="">
                <img class="team-im" ids="team-img" src="<?= MEDIA.'/img/team.jpg'; ?>" alt="">
-->
                <img class="team-img" id="team-img5" src="<?= MEDIA.'/img/team5.jpg'; ?>" alt="">
                <h2>NOUPA YOMEN</h2>
<!--
                <h2>NOUPA YOMEN Alvin</h2>
-->
                <h3>Designer</h3>
            </div>
        </div>
        <div class="form-align cont content2">
            <h2>Remplissez le formulaire pour nous contacter</h2>
            <form method="post" action="" onsubmit="contactSend()" class="form">
                <fieldset>
                    <legend>
                        Informations personnelles
                    </legend>
                    <div class="form-group">
                        <input type="radio" name="titre" value="Monsieur" id="Monsieur" checked/>
                        <label for="Monsieur">Monsieur</label>
                        <input type="radio" name="titre" Value="Madame" id="Madame"/>
                        <label for="Madame">Madame</label>
                        <input type="radio" name="titre" value="Groupe" id="Groupe"/>
                        <label for="Groupe">Groupe/Association</label>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom: </label>
                        <input type="text" name="nom" id="nom" required>
<!--
                        <input type="text" name="nom" id="nom" required autofocus>
-->
                    </div>
                    <div class="form-group">
                        <label for="prénom">Prenom: </label>
                        <input type="text" name="prénom" id="prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="contact">Numero: </label>
                        <input type="text" name="contact" id="contact"/>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse mail: </label>
                        <input type="email" name="adresse" id="adresse" required/>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Votre demande</legend>
                    <div class="form-group">
                        Vous etes interessé(s) par:
                        <br/>
                        <input type="checkbox" id="sites" name="site"/>
                        <label for="sites">Sites touristiques</label>
                        <input type="checkbox" id="lacsetfleuves" name="lacsetfleuves"/>
                        <label for="lacsetfleuves">Lacs et fleuves</label>
                        <input type="checkbox" id="montagnes" name="montagnes"/>
                        <label for="montagnes">Montagnes</label>
                        <br/>
                        <input type="checkbox" id="hotels" name="hotels"/>
                        <label for="hotels">Hotels</label>
                        <input type="checkbox" name="autres" id="other"/>
                        <label>Other...</label>
                    </div>
                    <div class="form-group">
                        <label for="region">
                            Regions
                        </label>
                        <select id="region">
                            <option value="other">N'importe quel</option>
                            <option value="Adamaoua">Adamaoua</option>
                            <option value="Centre">Centre</option>
                            <option value="Extreme-Nord">Extreme-Nord</option>
                            <option value="Est">Est</option>
                            <option value="Littoral">Littoral</option>
                            <option value="Nord">Nord</option>
                            <option value="Nord-Ouest">Nord-Ouest</option>
                            <option value="Sud">Sud</option>
                            <option value="Sud-Ouest">Sud-Ouest</option>
                            <option value="Ouest">Ouest</option>
                        </select>
                    </div>
                    <!--
                    <div class="form-group">
                        <label for="motif">Motif</label>
                        <input type="text" name="motif" id="motif" required>
                    </div>
                    -->
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="20" rows="10"></textarea>
                    </div>
                </fieldset>
                <div class="form-group send-group">
                    <input type="submit" name="envoyer" value="Envoyer"/>
                    <input type="reset" name="reset" value="Renitialiser"/>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    var img1 = document.getElementById("team-img1");
    var width1 = img1.width;
    var height1 = img1.height;
    var img2 = document.getElementById("team-img2");
    var img3 = document.getElementById("team-img3");
    var img4 = document.getElementById("team-img4");
    var img5 = document.getElementById("team-img5");
    var width2 = img2.width;
    var height2 = img2.height;
    var width3 = img3.width;
    var height3 = img3.height;
    var width4 = img4.width;
    var height4 = img4.height;
    var width5 = img5.width;
    var height5 = img5.height;


    var ratio = 1;
    var heigh1 = 200;
    img2.style.height = heigh1+'px'
    img2.style.width = heigh1/ratio+'px'
    img1.style.height = heigh1+'px'
    img1.style.width = heigh1/ratio+'px'
    img3.style.height = heigh1+'px'
    img3.style.width = heigh1/ratio+'px'
    img4.style.height = heigh1+'px'
    img4.style.width = heigh1/ratio+'px'
    img5.style.height = heigh1+'px'
    img5.style.width = heigh1/ratio+'px'


</script>

