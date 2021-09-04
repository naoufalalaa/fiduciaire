<?php
    $statistic_ENT=$bdd->query('SELECT * FROM entreprise');
    $nbrENT=$statistic_ENT->rowCount();
    $statistic_FIDU=$bdd->query('SELECT * FROM fiduciaire');
    $nbrFIDU=$statistic_FIDU->rowCount();
?>