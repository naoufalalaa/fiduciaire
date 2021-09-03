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
        $email = htmlspecialchars($_POST['email']);
        $nom = htmlspecialchars(($_POST['nom']));
        $prenom = htmlspecialchars(($_POST['prenom']));
        $cin = htmlspecialchars(($_POST['CIN']));
        $phone = htmlspecialchars(($_POST['phone']));
        $adress = htmlspecialchars(($_POST['adress']));
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
            $commentaire = htmlspecialchars(($_POST['commentaire']));

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
            $bio = htmlspecialchars(($_POST['bio']));

            $req=$bdd->prepare('INSERT INTO fiduciaire(id_user,attestation,Bio) values(?,?,?)');
            $req->execute(array($id,
                                $attestation,
                                $bio
                            ));
            $success=1;
        }
    }
}
?>