<?php
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    header('location : index.php');
}else{
    if($_GET['type']=='fiduciaire'){
        $type='fiduciaire';
    }else{
        $type='entrepreneur';
    }
    if(isset($_POST['login'])){
        $email = htmlspecialchars(strtolower($_POST['email']));
        $nom = htmlspecialchars(ucfirst($_POST['nom']));
        $prenom = htmlspecialchars(ucfirst($_POST['prenom']));
        $cin = htmlspecialchars(strtoupper($_POST['CIN']));
        $phone = htmlspecialchars(($_POST['phone']));
        $adress = htmlspecialchars(($_POST['adresse']));
        $secteur = htmlspecialchars(($_POST['secteur']));
        $ville = htmlspecialchars(($_POST['ville']));
        $req=$bdd->prepare('INSERT INTO users(nom,prenom,email,phone,CIN,secteur,ville,adresse) values(?,?,?,?,?,?,?,?)');
        $req->execute(array($nom,
                            $prenom,
                            $email,
                            $phone,
                            $cin,
                            $secteur,
                            $ville,
                            $adress 
                        ));
        $id=$bdd->lastInsertId();
        if($type=='entrepreneur'){
            $sect = htmlspecialchars(($_POST['secteurA']));
            $prestation = htmlspecialchars(($_POST['prestation']));
            $commentaire = htmlspecialchars(ucfirst($_POST['commentaire']));

            $req=$bdd->prepare('INSERT INTO entreprise(id_user,secteur,prestation,commentaire) values(?,?,?,?)');
            $req->execute(array($id,
                                $sect,
                                $prestation,
                                $commentaire
                            ));
            $success=1;
        }
        if($type=='fiduciaire'){
            $attestation = htmlspecialchars(($_POST['attestation']));
            $bio = htmlspecialchars(ucfirst($_POST['bio']));
            $specialite = $_POST['specialite'];
            $spe="";
            foreach($specialite as $chk1){
                $spe .=$chk1.',';
            }
            $spe=htmlspecialchars($spe);
            $req=$bdd->prepare('INSERT INTO fiduciaire(id_user,attestation,specialite,Bio) values(?,?,?,?)');
            $req->execute(array($id,
                                $attestation,
                                $spe,
                                $bio
                            ));
            if(isset($_FILES['jointeCIN']) AND !empty($_FILES['jointeCIN']['name'])) {
                $type = explode('.',$_FILES['jointeCIN']['name'])[1];
                if(exif_imagetype($_FILES['jointeCIN']['tmp_name']) == 2) {
                   $chemin = './assets/fiduciaire/'.$id.'_F.'.$type;
                   move_uploaded_file($_FILES['jointeCIN']['tmp_name'], $chemin);
                } else {
                   $message = 'Votre image doit être au format jpg';
                }
            }
            $success=1;
        }
    }
}
?>