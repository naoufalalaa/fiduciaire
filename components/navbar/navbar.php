
    <nav class="uk-visible@m uk-navbar-container uk-navbar-dark uk-light" uk-sticky="animation: uk-animation-slide-top; sel-target: #nav; cls-active: uk-navbar-not-transparent-danger nabs uk-light uk-navbar-sticky ; cls-inactive: uk-navbar-not-transparent-danger uk-light; top: 300" uk-navbar="mode: click; offset:0">

<div class="uk-margin-large-left uk-navbar-left">
    <a href="index.php">
        <img src="./assets/img/FIDUVer.png" width="150px" alt="">
    </a>
</div>

<div class="uk-navbar-center">

    <ul class="uk-navbar-nav">
        <li class="uk-active"><a href="index.php">Home</a></li>
        <li>
            <a href="#">Action Entreprise <span uk-icon="icon: chevron-down"></span></a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="#">Créer votre Entreprise</a></li>
                    <li><a href="#">Plan Comptable</a></li>
                    <li><a href="#">Déménagement siège</a></li>
                    <li><a href="#">Domiciliation</a></li>
                </ul>
            </div>
        </li>
        <li><a href="#">Blog Entrepreneur</a></li>
    </ul>

</div>
<div class="uk-margin-large-right uk-navbar-right">
    <ul class="uk-navbar-nav">
        <li>
<?php 
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
?>
            <a href="">UserName</a>
<?php
}else{
    ?>
            <a href="#">S'inscrire <span uk-icon="icon: chevron-down"></span></a>
            <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="signup.php?type=entrepreneur">Entrepreneur</a></li>
                    <li><a href="signup.php?type=fiduciaire">Fiduciaire</a></li>
                </ul>
            </div>
<?php
}
?>
        </li>
    </ul>
</div>
</nav>
