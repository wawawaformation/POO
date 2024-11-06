<?php

/**
 * Représente un Magicien
 */
class Magicien extends Personnage
{
    /**
     * Diminue par deux la force du personnage qui recoit le sort
     * @param Personnage $personnage
     * @return void
     */
    public function jeterUnSort(Personnage $personnage):void
    {
        $personnage->force /= 2;
    }
}