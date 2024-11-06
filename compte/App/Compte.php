<?php

/**
 * Représente un compte en banque
 */
class Compte
{
    /*==Les attributs==*/
    

    /**
     * Titulaire du compte bancaire
     * Summary of setSolde
     * @param float $solde
     * @throws \Exception
     * @return CompteCourant
     */
    protected string $titulaire;


    /**
     * Solde du compte
     * @var float
     */
    protected float $solde;
    


    /*==Les Méthodes==*/
    
    
    /**
     * Instancie la classe Compte
     * @param string $titulaire Titulaire du compte
     * @param float $solde Solde du compte
     */
    
    public function __construct(string $titulaire, float $solde)
    {
        $this->setTitulaire($titulaire);
        $this->setSolde($solde);
    }


    

    /**
     * Faire un retrait
     *
     * @param integer $somme la somme à retirer
     * @return self
     */
    public function retirer(int $somme): self
    {
        // on fait gaffe que somme < solde (envoie exception)
		 //on appelle le setter de solde

         if($somme <= 0){
            throw new Exception('La somme à retirer doit être supérieur à 0');
         }
         if($somme > $this->solde){
            throw new Exception('Solde insuffisant');
         }
         $this->setSolde($this->solde - $somme);
         return $this;
    }
    
    /**
     * Déposer sur le compte
     * @param int $somme la somme à déposer
     * @throws \Exception
     * @return Compte
      */
   	public function deposer(int $somme):self
	{
        if($somme < 0){
            throw new Exception('dépôt négatif');
        }
        $this->setSolde($this->solde + $somme);
        return $this;
    }

    /**
     * Faire un virement
     * @param Compte $compte compte sur lequel on fait un virement
     * @param int $somme 
     * @return Compte
     */
    public function virer(Compte $compte, int $somme):self
    {
        $this->retirer($somme);
        $compte->deposer($somme);
        return $this;
    }

    
	public function getTitulaire(): string 
	 {
		return $this->titulaire;
	}
	
	/**
	 * Modifier titulaire du compte
	 * @param string $titulaire Titulaire du compte bancaire
	 * @return self
	 */
	public function setTitulaire(string $titulaire): self 
    {
        if(empty($titulaire)){
            throw new Exception('Il faut renseigner un nom.');
        }
		$this->titulaire = $titulaire;
		return $this;
	}

	
	
	/**
	 * Renvoie le solde du compte
	 * @return float
	 */
	public function getSolde(): float 
    {
		return $this->solde;
	}
	
	/**
	 * Modifie le solde du compte
	 * @param float $solde Solde du compte
	 * @return self
	 */
	public function setSolde(float $solde): self 
    {
        if($solde < 0){
            throw new Exception('Le solde ne peut pas être négatif.');
        }
		$this->solde = $solde;
		return $this;
	}
}
