<?php

if(isset($_POST['minNbr']) && isset($_POST['maxNbr'])){
    echo "nombre aleatoire entre " . $_POST['minNbr'] . " et " . $_POST['maxNbr'] . " : " . rand($_POST['minNbr'], $_POST['maxNbr']);
}

