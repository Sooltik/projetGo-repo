<h2>Les différents projets....</h2>
<hr style="margin: auto; width: 350px;">

<?php

$posts = get_posts();
foreach ($posts as $post) {
?>
    <div class="row">
        <div class="col s12 m12 l12">
            <h4><?= $post->title; ?></h4>
            <div class="row">
                <div class="col s12 m6 l8">
                    <?= substr(nl2br($post->content), 0, 1500) ?>....
                </div>
                <div class="col s12 m6 l4">
                    <img src="img/posts/<?= $post->image ?>" class="materialboxed  responsive-img" " alt=" <?= $post->title; ?>" style="height: 280px;" />
                    <br /><br />
                    <a class="btn light-blue waves-effect waves-light" href="index.php?page=post&id=<?= $post->id ?>">Lire détail projet...</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
<?php

}
