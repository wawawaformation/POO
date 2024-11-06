<?php

require_once __DIR__ . '/Compte.php';


/**
 * Représente un Compte Courant
 */
class CompteCourant extends Compte
{
    /**
     * Le découvert autorisé
     * @var int
     */
    private int $decouvertAutorise=0;
    
    /**
     * modifie le Solde
     * @param float $solde montant du nouveau solde
     * @throws \Exception
     * @return CompteCourant
     */
    public function setSolde(float $solde): self 
    {
        if($solde < $this->decouvertAutorise * -1){
            throw new Exception('Découvert dépasssé');
        }
		$this->solde = $solde;
		return $this;
	}

    /**
     * Retirer de l'argent
     * @param int $somme somme à retirer
     * @throws \Exception
     * @return CompteCourant
     */
    public function retirer(int $somme): self
    {
        // on fait gaffe que somme < solde (envoie exception)
		 //on appelle le setter de solde

         if($somme <= 0){
            throw new Exception('La somme à retirer doit être supérieur à 0');
         }
        
         $this->setSolde($this->solde - $somme);
         return $this;
    }


	/**
	 * retourne la valeur du découvert autorisé
     * @return int
	 */
	public function getDecouvertAutorise(): int 
    {
		return $this->decouvertAutorise;
	}
	
	/**
	 * Modifie le découvert autorisé
     * @param int $decouvertAutorise 
	 * @return self
	 */
	public function setDecouvertAutorise(int $decouvertAutorise): self 
    {
        if($decouvertAutorise <0 ){
            throw new Exception('Un nombre strictement positif est attendu');
        }
		$this->decouvertAutorise = $decouvertAutorise;
		return $this;
	}
}