<nav class="light-orange">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo" style="font-size: 35px; font-weight:bold">GoFundMe-ProjetGo | Administration</a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class="<?php echo ($page == "gestion") ? "active" : ""; ?>"><a href="index.php?page=gestion" style="font-size: 25px; font-weight:bold"><i class="material-icons">dashboard</i></a></li>

            </ul>

            <ul class="side-nav" id="mobile-menu">
                <li class="<?php echo ($page == "gestion") ? "active" : ""; ?>"><a href="index.php?page=gestion"><i class="material-icons">dashboard</i></a></li>

            </ul>

        </div>
    </div>
</nav>