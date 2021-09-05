<?php
include './components/headers/head.php';
include './components/navbar/navbar.php';
include './components/navbar/mobile.php';
include './controllers/user/actionENT.php'
?>
<div class="uk-margin uk-text-center">
    <h2>Action Entreprise</h2>
    <small><?=$type?></small>
</div>
<?php
    if($fidus->rowCount()>0){
?>
<div class="uk-margin uk-text-center">
    <?php
        while($f=$fidus->fetch()){
            $user=$bdd->query('SELECT * FROM users WHERE id = '.$f['id_user']);
            $u=$user->fetch();
            $specialites=explode(',',$f['specialite']);
    ?>
    <div align="center">
        <div class="uk-card-fidu uk-margin uk-width-5-6 uk-padding-small uk-light uk-box-shadow-medium">
            <div class="uk-grid-small" uk-grid>
                <div align="center" uk-grid class="uk-width-1-3@m uk-text-left@l uk-text-center">
                    <div class="wrapp uk-width-1-2@l">
                        <div id="avatar"></div>
                        <i class="icon fa-2x fas fa-briefcase"></i>
                    </div>
                    <div class="uk-width-1-2@l uk-margin-bottom">
                        <h4><?=$u['nom'] ?> <?=$u['prenom'] ?></h4>
                        <small>
                            <i class="fas fa-pager fa-2x" style="color: rgb(118, 68, 236);"></i> <?=$f['attestation'] ?><br/>
                            <i class="fas fa-map-marker-alt fa-2x" style="color: rgb(118, 68, 236);"></i> <?=$u['ville'] ?></small>
                    </div>
                </div>

                <div align="left" class="uk-width-2-3@m uk-margin-remove" uk-grid>
                    <div class="uk-width-3-4@m">
                    <u>Bio</u> :<br><small class="uk-margin"><i><?=$f['Bio']?></i></small>
                    </div>
                    <div class="uk-width-1-4@m">
                        <div class="uk-margin">
                            <button class="uk-button uk-button-user" type="button" uk-toggle="target: #contact<?=$u['id']?>"uk-tooltip="<?=$u['phone'] ?> <?=$u['email'] ?>">Contact</button>
                        </div>

                        <div id="contact<?=$u['id']?>" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body">
                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                <h2 class="uk-modal-title">Contactez Fiduciaire</h2>
                                <p><b>Téléphone : </b> <?=$u['phone']?></p>
                                <p><b>E-mail : </b> <a href="mailto:<?=$u['email']?>"><?=$u['email']?></a></p>
                            </div>
                        </div>

                        
                        <div>
                            <small>
                                <h4>Spécialité:</h4>
                                <ul class="uk-margin-remove">
                                    <?php
                                        $i=0;
                                        while(!empty($specialites[$i])){
                                    ?>
                                    <li>- <?=$specialites[$i]?></li>
                                    <?php 
                                        $i++;  
                                        }
                                    ?>
                                </ul>
                            </small>
                        </div>



                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php }?>
</div>
<?php
    }
?>
<?php
    include './components/headers/footer.php'
?>