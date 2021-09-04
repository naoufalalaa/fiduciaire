<?php
include_once './controllers/connexion.php';
include './components/headers/head.php';
include './components/navbar/navbar.php';
include './components/navbar/mobile.php';
include_once './controllers/user/login/signupFidu.php';
?>



<div align="center" class="uk-margin-large">
    <div class="uk-width-2-3@m uk-width-5-6 uk-card uk-card-default-trans uk-card-body">
        <?php
            if(isset($success) && $success == 1 ){
        ?>
            <div class="uk-alert uk-alert-success"uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>Vous êtes désormé inscrit</p>
            </div>
        <?php
            }
        ?>
        <h3>Inscription <?=ucfirst($type) ?></h3>
        <hr>
        <form method="post">
            <div class="uk-text-left" uk-grid>
                <div class="uk-width-1-2@s">
                    <input required class="uk-input" placeholder="Prénom" name="prenom" type="text">
                </div>
                <div class="uk-width-1-2@s">
                    <input required class="uk-input" placeholder="Nom" name="nom" type="text">
                </div>
                <div class="uk-width-1-2@s">
                    <input required name="email" type="email" class="uk-input" placeholder="e-mail">
                </div>
                <div class="uk-width-1-2@s">
                    <input required name="phone" type="text" class="uk-input" placeholder="+212 600-000000">
                </div>
                <div class="uk-width-1-1@s">
                    <input required name="CIN" type="text" class="uk-input" placeholder="CIN">
                </div>

                <div class="uk-width-1-2@s">
                    <select required class="uk-select uk-text-center" name="ville">
                        <option ><------ Choisir une ville ------></option>
                        <?php
                            $ville=$bdd->query('SELECT * FROM ville');
                            while($v = $ville->fetch()){
                        ?>
                        <option value="<?=$v['nomVille']?>"><?=$v['nomVille']?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="uk-width-1-2@s">
                    <input required name="secteur" type="text" class="uk-input" placeholder="Sécteur">
                </div>
                <div class="uk-width-1-1@s">
                    <textarea required name="adresse" class="uk-textarea" placeholder="Adresse"></textarea>
                </div>
            </div>
                <hr>
                <h4>Vous êtes <?=$type ?></h4>
                <div uk-grid>
                    <?php
                    if($type=='entrepreneur'){
                    ?>
                    <div class="uk-width-1-2@s">
                        <input required name="secteurA" type="text" class="uk-input" placeholder="Sécteur d'activité">
                    </div>       
                    <div class="uk-width-1-2@s">
                        <input name="prestation" type="text" class="uk-input" placeholder="Préstation">
                    </div>       
                    <div class="uk-width-1-2@s">
                        <textarea name="commentaire" type="text" class="uk-textarea" placeholder="Commentaire"></textarea>
                    </div>       

                    <?php
                    }else{
                    ?>
                    <div class="uk-width-1-2@s">
                        <input required name="attestation" type="text" class="uk-input" placeholder="Attestation">
                    </div>       
                    <div class="uk-width-1-2@s uk-text-left">
                        <p><strong>Spécialité</strong></p>
                        <label><input name="specialite" value="Création d'entreprise" class="uk-checkbox" type="checkbox" checked> Création d'entreprise</label><br>
                        <label><input name="specialite" value="Plan Comptable" class="uk-checkbox" type="checkbox"> Plan Comptable</label><br>
                        <label><input name="specialite" value="Déménagement siège" class="uk-checkbox" type="checkbox"> Déménagement siège</label><br>
                        <label><input name="specialite" value="Domiciliation" class="uk-checkbox" type="checkbox"> Domiciliation</label>
                    </div>       
                    <div class="uk-width-1-1@s">
                        <textarea name="bio" type="text" class="uk-textarea" placeholder="Bio"></textarea>
                    </div> 
                    <?php }?>

                </div>
            <button type="submit" name="login" class="uk-margin uk-button uk-width-1-2 uk-button-danger">S'inscrire</button>
        </form>
    </div>
</div>

<?php
    include './components/headers/footer.php'
?>