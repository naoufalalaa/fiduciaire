<?php
    if(isset($_POST['connect'])){
        $email=htmlspecialchars($_POST['email']);
        $password=htmlspecialchars(sha1($_POST['post']));
        $req=$bdd->query('SELECT * FROM users WHERE email = '.$email);
        if($req->rowCount()>0){
            $r=$req->fetch();
            $passver=$bdd->query('SELECT * FROM entreprise WHERE id_user = '.$r['id']);
            $passver=$passver->fetch();
            $userENT=$bdd->query('SELECT * FROM entreprise WHERE password ='.$passver['password']);
            if($userENT->rowCount()>0){
                $userENT=$userENT->fetch();
                session_start();
                $_SESSION['id']=$userENT['id_user'];
            }

        }
    }
?>