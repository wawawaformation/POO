<?php

/**
 * Représente la Brute
 */
class Brute extends Personnage
{
    public function ecraserTete(Personnage $personnage)
    {
        $personnage->pv /= 2;
        $this->xp += 10;
    }
}