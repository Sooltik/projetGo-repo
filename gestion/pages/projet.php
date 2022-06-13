<?php
//affecter la variable $post à la fonction qui récupere la totalité des attribut de la table posts
$post = getProjet();
?>
</div>
<!--afficher l'image du projet-->
<div class="parallax">
    <img src="../../img/posts/" <?= $post->image; ?> alt="<?= $post->title; ?>" style=" transform: translate3d(-50%, 432.451px, 0px);opacity: 0.5;" />
</div>
<div class="container">
    <form method="POST">
        <div class="row">
            <div class="input-field col s12">
                <input type="text" name="title1" id="title" value="<?= $post->title; ?>" />
                <label for="title">Nom du projet</label>
            </div>
            <div class="input-field col s12">
                <textarea id="content" name="content" class="materialize-textarea" style="height: 300px;">
                    <?= nl2br($post->content); ?>

                </textarea>
                <label for="content">Détail du projet</label>
            </div>

            <div class="col s6">
                <p>Publication du projet</p>
                <div class="switch">
                    <label>
                        Non
                        <input type="checkbox" name="public" <?php echo ($post->posted == "1") ? "checked" : "" ?> />
                        <span class="lever"></span>
                        Oui
                    </label>
                </div>
            </div>
            <div class="col s6 right-align">
                <br /><br />
                <button type="submit" class="btn" name="submit">Modifier</button>
            </div>
        </div>
    </form>