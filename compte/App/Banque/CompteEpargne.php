<?php

namespace App\Banque;

require_once __DIR__ .'/Compte.php';
/**
 * represente un compte epargne
 */
class CompteEpargne extends Compte
{


    /**
     * tauxInteret
     * @var float
     */
    static  public float $tauxInteret = 1.03;

    

    /**
     * Verse les interets sur le compte
     * @return CompteEpargne
     */
        public function verserInteret() : self
    {
        $this->setSolde($this->solde * self::$tauxInteret);
        return $this;
    }
}