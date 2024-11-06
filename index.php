<?php

require_once __DIR__ .'/src/Personnage.php';
require_once __DIR__ .'/src/Brute.php';
require_once __DIR__ .'/src/Magicien.php';
require_once __DIR__ . '/src/Magicarpe.php';
require_once __DIR__ .'/src/Guerrier.php';

$david = new Guerrier('David', Personnage::FORCE_MOYENNE);
$joana = new Personnage('joanna', 300);
echo '<pre>';
var_dump($david);




