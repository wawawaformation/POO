<?php

/**
 * Entrée de notre application
 */

require_once 'App/CompteEpargne.php';

try{
    $epargeEmilia = new CompteEpargne('emilia', 4000);
    $epargeEmilia->verserInteret();
    var_dump($epargeEmilia);
   
}catch(Exception $e){
    echo 'Oops, ' . $e->getMessage();
}



 