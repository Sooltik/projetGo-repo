<?php
function tableau($table)
{
    global $db;
    //Calculer le nombre d'entrée dans la table
    $query = $db->query("SELECT COUNT(id) FROM $table");

    //retourner le resultat calculé
    return $nb = $query->fetch();
}

function couleur($table, $couleur)
{
    if (isset($couleur[$table])) {
        return $couleur[$table];
    } else {
        return "green";
    }
}
