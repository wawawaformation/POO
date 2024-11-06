<?php

/**
 * Représente un personnage
 * @author david.legrand@gmail.com
 * 
 */
class Personnage
{
    const FORCE_PETITE = 10;
    const FORCE_MOYENNE = 20;
    const FORCE_GRANDE = 30;

    /**
     * Nombre d'objet créé
     * @var int
     */
    static protected int $occurence = 0;
   
    /**
     * Point de vie
     * @var int
     */
    protected int $pv = 100;

    /**
     * Force (on peut utiliser les constantes de classe)
     * @var int
     */
    protected int $force;

    /**
     * Expérience du Personnage
     * @var int
     */
    protected int $xp = 0;

    /**
     * Nom su personnage
     * @var string
     */
    protected string $nom;


    /**
     * Instancie un objet 
     * @param string $nom le nom du personnage
     * @param int $force la force du personnage
     */
    public function __construct(string $nom, int $force)
    {
        $this->nom = $nom;
        $this->force = $force;
        self::$occurence++;

    }

    /**
     * REtourne le nombre d'occurence
     * @return int
     */
    static public function getOccurence()
    {
        return self::$occurence;
    }


    /**
     * Frapper un personnage
     * @param Personnage $personnage
     * @return void
     */
    public function frapper(Personnage $personnage){
       
        $personnage->pv -= $this->force;
        $this->xp += 10;

        if($personnage->pv > 0){
            echo $personnage->nom . ' a survécu avec '
            . $personnage->pv . ' points de vie';
        }else{
            echo $personnage->nom . ' est ko'; 
            unset($personnage);
        }
    }

    
    /**
     * Retourne la valeur de pv
     * @return int
     */
    public function getPv(): int{
        return $this->pv;
    }


    /**
     * Modifie les points de vie
     * @param int $point_de_vie
     * @return Personnage
     */
    public function setPv(int $point_de_vie): self
    {
        $this->pv = $point_de_vie;
        return $this;
    }


    /**
     * Retourne la force
     * @return int
     */
    public function getForce():int
    {
        return $this->force;
    }

    /**
     * Modifie la force
     * @param int $force
     * @return Personnage
     */
    public function setForce(int $force):self
    {
        $this->force = $force;
        return $this;
    }

    /**
     * Retorune l'XP
     * @return int
     */
    public function getXp():int
    {
        return $this->xp;
    }

    /**
     * Modifie l'XP
     * @param int $xp
     * @return Personnage
     */
    public function setXp(int $xp): self
    {
        $this->xp = $xp;
        return $this;
    }


    /**
     * retourne le nom
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Modifie le nom
     * @nom 
     * @Personnage
     */
    public function setNom(string $nom):self
    {
        $this->nom = $nom;
        return $this;
    }


}

