<nav class="light-green">

    <div class="container">

        <div class="nav-wrapper">

            <a href="../index.php?page=home" class="brand-logo" style="font-size: 25px; font-weight:bold">Administration | Connexion ...</a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page == "gestion") ? "active" : ""; ?>"><a href="index.php?page=gestion" style="font-size: 25px; font-weight:bold"><i class="material-icons">dashboard</i></a></li>

                <li><a href="../index.php?page=home"><i class="material-icons">exit_to_app</i></a>

                </li>
                <li><a href="index.php?page=logout"><i class="material-icons">lock</i></a>
                </li>Logout</a>
                </li>

            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li class="<?php echo ($page == "gestion") ? "active" : ""; ?>"><a href="index.php?page=gestion">Gestion</a></li>
                <li><a href="../index.php?page=home">Exit</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>

            </ul>

        </div>
    </div>
</nav>