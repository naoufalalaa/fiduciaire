<nav class="uk-navbar uk-navbar-dark uk-light uk-navbar-container uk-hidden@m">
        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" uk-toggle="target: #nav" href="#">
                <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
            </a>
        </div>
        <div class="uk-navbar-center">
            <a href="#">
                <img src="./assets/img/FIDU1.png" width="100px" alt="">
            </a>
        </div>
    </nav>
    <div id="nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

            <div class="uk-text-center">
                <img  src="./assets/img/FIDU1.png" width="150px"  alt="">
            </div>
            
            <ul class="uk-nav uk-margin-xlarge-top uk-nav-default">
                <li><a href="./index.php">Home</a></li>
                <li class="uk-parent">
                    <a href="#">Action Entreprise</a>
                    <ul class="uk-nav-sub">
                        <li><a href="./actionENT.php?type=creerENT">Créer votre Entreprise</a></li>
                        <li><a href="./actionENT.php?type=PlanComptable">Plan Comptable</a></li>
                        <li><a href="./actionENT.php?type=Demenagement">Déménagement siège</a></li>
                        <li><a href="./actionENT.php?type=Domiciliation">Domiciliation</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog Entrepreneur</a></li>
                <li class="uk-nav-divider"></li>
                <li class="uk-parent">


            <?php
                if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
            ?>
            <a href="">Username</a>
            <?php
                }else{
            ?>
                    <a href="#">S'inscrire</a>
                    <ul class="uk-nav-sub">
                        <li><a href="signup.php?type=entrepreneur">Entrepreneur</a></li>
                        <li><a href="signup.php?type=fiduciaire">Fiduciaire</a></li>
                    </ul>
            <?php
                }
            ?>
                </li>
            </ul>
    
        </div>
    </div>  

