<div class="row">
    <div class="col l4 m6 s12 offset-l4 offset-m3">
        <div class="card-panel">
            <div class="row">
                <div class="col s6 offset-s3">
                    <img src="../img/admin.png" alt="administrateur" width="100%" />
                </div>
            </div>

            <h4 class="center-align">Se connecter</h4>

            <?php
            //Vérifier si les deux champs existent
            if (isset($_POST['submit'])) {

                //sécuriser les deux champs lors de la saisie de l'utilisateur
                $email = htmlspecialchars(trim($_POST['email']));
                $password = htmlspecialchars(trim($_POST['password']));

                //Vérifier si les deux champs sont vide ou non
                $errors = [];
                if (empty($email) || empty($password)) {
                    $errors['empty'] = "Remplir tous les champs ... !";
                }else if(administrateur_existe($email, $password);
            }
            ?>

            <form method="POST">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="email" id="email" name="email" />
                        <label for="email">Votre Email</label>

                    </div>
                    <div class="input-field col s12">
                        <input type="password" id="password" name="password" />
                        <label for="password">Votre mot de passe</label>
                    </div>
                </div>
                <!--
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" id="password" name="password" />
                        <label for="password">Votre mot de passe</label>
                    </div>
                </div>
                -->

                <button style="margin-left:20%" type="submit" name="submit" class="waves-effect waves-light btn light-blue">
                    <i class="material-icons left">perm_identity</i>Connexion
                </button>
            </form>
        </div>
    </div>
</div>