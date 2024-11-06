<?php

class Guerrier extends Personnage
{
    public function __construct(string $nom, int $force)
    {
        //on appelle le constructeur du parent
        parent::__construct($nom, $force);


        $this->pv = 200;
        
    }
}