<?php

class Compte{
  private string $_libelle;
  private int $_solde;
  private string $_devise;
  private Titulaire $_titulaire;


public function __construct($libelle, $solde, $devise, $titulaire){
  $this -> _libelle = $libelle;
  $this -> _solde = $solde;
  $this -> _devise = $devise;
  $this -> _titulaire = $titulaire;
  $titulaire -> ajouterCompte($this);
  }

public function getLibelle(){
  return $this -> _libelle;
  }

public function setLibelle($libelle){
  $this -> _libelle = $libelle;
  }

public function getSolde(){
  return $this -> _solde;
  }

public function setSolde($solde){
  $this -> _solde = $solde;
  }

public function getDevise(){
  return $this -> _devise;
  }

public function setDevise($devise){
  $this -> _devise = $devise;
  }

public function getTitulaire(){
  return $this -> _titulaire;
  }

public function setTitulaire($titulaire){
  $this -> _titulaire = $titulaire;
  }

// Crediter sur un compte : 

public function crediterCompte($somme){
  $this -> _solde += $somme; 
  return $this -> afficherSolde();
  }


// Debiter sur un compte : 

public function debiterCompte($somme){
  $this -> _solde -= $somme; 
  return $this -> afficherSolde();
  }

//Effectuer un virement d'un compte à l'autre :


public function virement($somme, $cible){
  $this -> _solde -= $somme;  
  $cible -> _solde +=$somme; 
  return $this -> afficherSolde();
  }



// Afficher toutes les informations d'un Compte Bancaire :


public function infoCompte(){
  echo "<br>" .$this -> _libelle ." " ." : " ." " .$this -> _solde ." " .$this -> _devise ."  "  
  ."appartient à " .$this -> _titulaire -> getNom() ." " .$this -> _titulaire -> getPrenom() .".";
}
 

// Afficher le solde d'un compte :


public function afficherSolde(){
  echo "Solde du compte" ." " .$this -> _libelle ." " .":" ." " .$this -> _solde ." " .$this -> _devise ."<br>";

  }
  

public function __toString(){
  return "{$this -> _libelle} : {$this -> _solde}
  {$this -> _devise}  <br>";
  }

}


?>