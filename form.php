<?php

function aleaNbr ($x, $y){
    echo rand($x, $y);
}

if(isset($_POST['minNbr']) && isset($_POST['maxNbr'])){
    aleaNbr($_POST['minNbr'], $_POST['maxNbr']);
}

