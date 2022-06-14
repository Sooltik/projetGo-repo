<?php
//Vérifier si le boutton submit à été utilisé
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $role = htmlspecialchars(trim($_POST['role']));


    //Vérifier si les champs envoyé ne sont pas vides
    $erreurs = [];
    if (empty($name) || empty($email)) {
        $erreurs['empty'] = "Veuillez remplir les champs";
    }

    //vérifier si l'adresse mail n'existe pas déja

    //if (email_prise($name)) {
    //   $erreurs['prise'] = "L'adresse émail déja utilisée";
    // }

    if (!empty($erreurs)) { //s'il ya des erreurs
?>
        <div class="card red">
            <div class="card-content white-text">
                <?php
                foreach ($erreurs as $erreur) {
                    echo $erreur . "<br/>";
                }
                ?>
            </div>
        </div>

<?php
    } else { //s'il n y a pas d'erreur
        ajout_utilisateur($name, $email, $password, $role);
    }
}
?>


<div class="row" style="width: 500px; margin:auto">


    <div class="col m12 s12">
        <h4>Ajouter un bénevol</h4>
        <form method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons">chat</i>
                    <input type="text" name="name" id="name" />
                    <label for="name" style="margin-left: 30px;">Nom</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons">email</i>
                    <input type="email" name="email" id="email" />
                    <label for="email" style="margin-left: 30px;">Adresse Email</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons">visibility_off</i>
                    <input type="password" name="password" id="password" />
                    <label for="password" style="margin-left: 30px;">Mot de passe</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons">account_circle</i>
                    <select name="role" id="role">
                        <option value="admin">Administrateur</option>
                        <option value="benev">Bénévol</option>
                    </select>
                    <label for="role" style="margin-left: 30px;">Fonction</label>
                </div>
                <div class="col s12">
                    <button type="submit" name="submit" class="btn">Ajouter</button>
                </div>


            </div>
        </form>

    </div>




</div>


<!--Script qui fait apparaitre la liste déroulante de Rôle-->
<script type="text/javascript">
    setTimeout(function() {
        $("select").material_select();
    }, 200);
</script>