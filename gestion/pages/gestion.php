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

<?php
/*
    On fait appelle à la fonction qui récupere les projets
*/
$projets = getProjets();
?>

<!--Afficher les projets dans la table-->
<table>
    <thead>
        <tr>
            <th>Projet</th>
            <th>Date publication</th>
            <th>Propriétaire</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /*
            On parcour le tableau projets ($projets)
        */
        foreach ($projets as $projet) {
        ?>
            <tr id="post_<?= $projet->id ?>">
                <td><?= $projet->title ?></td>
                <td><?= date("d/m/Y à H:i", strtotime($projet->date)); ?></td>
                <td><?= $projet->name ?></td>
                <td>
                    <a href="#" id="<?= $projet->id; ?>" class="btn-floating btn-small waves-effect waves-light green see_projet"><i class="material-icons">done</i></a>
                    <a href="#" id="<?= $projet->id; ?>" class="btn-floating btn-small waves-effect waves-light red delete_projet"><i class="material-icons">delete</i></a>
                    <a href="#projet_<?= $projet->id; ?>" class="btn-floating btn-small waves-effect waves-light blue modal-trigger"><i class="material-icons">more_vert</i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>