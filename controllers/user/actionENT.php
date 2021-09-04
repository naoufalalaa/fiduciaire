<?php
$bdd = new PDO("mysql:host=127.0.0.1;dbname=fidu;charset=utf8", "root", "");

if(isset($_GET['type']) && !empty($_GET['type'])){
    $type=$_GET['type'];
    if($type=='creerENT') $type = 'Créer entreprise';
    if($type=='PlanComptable') $type = 'Plan comptable';
    if($type=='Demenagement') $type = 'Déménagement siège';
    if($type=='creerENT') $type = 'Domiciliation';
}elseif(!isset($_GET['type']) || empty($_GET['type'])){
    $type='Créer Entreprise';
}

    $fidus=$bdd->prepare('SELECT * FROM fiduciaire WHERE specialite LIKE ?');
    $fidus->execute(array('%'.$type.'%'));

?>