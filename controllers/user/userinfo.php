<?php
    include '../connexion.php';
    if(isset($_SESSION['id'])){
        $user = $bdd->query('SELECT * FROM users WHERE id = '.$_SESSION['id']);
        $u = $user->fetch();
        $entre=$bdd-> query('SELECT * FROM entreprise WHERE id_user = '.$_SESSION['id']);
    }
?>