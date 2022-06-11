<div class="row">

    <?php
    $tables = [
        "Projets" => "posts",
        "Administrateurs" => "admins"
    ];

    $couleur = [
        "posts" => "red",
        "admins" => "blue"
    ];
    ?>

    <?php
    //Récuperer le nom de la table
    foreach ($tables as $table_name => $table) {
    ?>
        <div class="col l4 m6 s12">
            <div class="card">
                <div class="card-content <?= couleur($table, $couleur); ?> white-text">
                    <!--Afficher le nom de la table-->
                    <span class="card-title"><?= $table_name; ?></span>
                    <?php
                    //Récuperer le resultat retourné par la fonction tableau
                    $nbID = tableau($table);
                    ?>
                    <!--Afficher le resultat -->
                    <h4><?= $nbID[0] ?></h4>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<h4></h4>