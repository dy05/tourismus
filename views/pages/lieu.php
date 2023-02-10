 <section class="article-container">
    <div class="article-content">
        <div class="article">
            <div class="article-img">
                <img src="<?= MEDIA.'img/articles/'.$lieu->image; ?>" alt="<?= MEDIA.'img/articles/'.$lieu->titre; ?>">
            </div>
            <div class="article-body">
                <div class="article-category">
                        Categorie(s):
                        <em>Fleuve</em>,
                        <em>Lac</em>
                </div>
                <div class="article-title">
                    <?= $lieu->titre; ?>
                </div>
                <div class="article-description">
                    <?= $lieu->contenu; ?>

                </div>
            </div>
        </div>
    </div>
    <div class="articles-other">
        <div class="article-other">
            <a href="../../regions/regions.html"><h2>Ouvrir d'autres lieux de la meme region</h2></a>
            <div class="article-other-img">                     <img src="../public/img/2.jpg">
            </div>
            <div class="article-other-img">                     <img src="../public/img/3.jpg">
            </div>
        </div>
        <div class="article-other">
            <a href="../../categories/categories.html"><h2>Fleuves et lacs</h2></a>
            <div class="article-other-img">                     <img src="../public/img/2.jpg">
            </div>
            <div class="article-other-img">                     <img src="../public/img/3.jpg">
            </div>
        </div>
    </div>
</section>


