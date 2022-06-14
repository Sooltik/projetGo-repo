<?php

//La fonction qui vérifiée si l'adresse émaiil est déja utilisée

function email_prise($email)
{
    global $db;

    $tableau = [

        'email' => $email

    ];

    $sql = "SELECT * FROM admins WHERE email = : email";

    $req = $db->prepare($sql);
    $req->execute($tableau);
    $result = $req->rowCount($sql);
    return $result;
}

function ajout_utilisateur($name, $email, $password, $role)
{
    global $db;
    $tabUtilisateur = [
        'name' => $name,
        'email' => $email,
        'password' => sha1($password),
        'role' => $role
    ];

    $sql = "INSERT INTO admins(name, email, password, role) VALUES(:name, :email, :password, :role)";
    $req = $db->prepare($sql);
    $req->execute($tabUtilisateur);
}

//Fonction qui récupere les utilisateur et non les utilisateur
function getBenevol()
{
    global $db;
    $req = $db->query("
        SELECT  * FROM admins WHERE role='benev';
    ");

    $result = [];
    while ($rows = $req->fetchObject()) {
        $result[] = $rows;
    }
    return $result;
}
