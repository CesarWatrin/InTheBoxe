<?php
//classe des adhérents
abstract class Adherent {
  //////////////////////declaration des attributs///////////////////
  protected $nom;
  protected $prenom;
  protected $datenaiss;
  protected $taille;
  protected $poids;
  protected $genre;
  protected $categorie;
  protected $licence;
  protected $victoire;
  protected $defaite;
  protected $nul;
  //////////////////declaration des getter//////////////////////
  public function getLicence() {return $this->licence;}
  public function getNom() {return $this->nom;}
  public function getPrenom() {return $this->prenom;}
  public function getDateNaiss() {return $this->datenaiss;}
  public function getTaille() {return $this->taille;}
  public function getPoids() {return $this->poids;}
  public function getCategorie() {return $this->categorie;}
  public function getTel() {return $this->tel;}
  public function getVictoire() {return $this->victoire;}
  public function getDefaite() {return $this->defaite;}
  public function getNul() {return $this->nul;}
  //////////////////autres Methodes//////////////////
  public function getPalmares():string{return "Adherent : '$this->getNom()' '$this->getPrenom()' Nombre de victoire : '$this->getVictoire()' Nombre de match nul : '$this->getNul' Nombre de défaite : '$this->getDefaite' ";}

}

//////////////////////////////ADHERENT CLUB/////////////////////

class AdherentClub extends Adherent {
  private $mail;
  private $motdepasse;
  private $adresse;
  private $tel;
  private $statut;
  private $combattant;
  private $certificat;
  private $apayer;

  public function __construct(array $param = array()) {
      var_dump($param);
      foreach ($param as $key => $value) {
          var_dump($key);
          $this->$key = $value;
      }
    }
  //////////////////declaration des getter//////////////////////
  public function getMotDePasse(){return $this->motdepasse;}
  public function getStatut() {return $this->statut;}
  public function getCombattant() {return $this->combattant;}
  public function getCertificat() {return $this->certificat;}
  public function getMail() {return $this->mail;}
  public function getAdresse() {return $this->adresse;}
  public function getApayer() {return $this->apayer;}
  public function getTel() {return $this->tel;}
}


//////////////////////////////ADHERENT EXTERIEUR/////////////////////
class AdherentExterieur extends Adherent{

    public function __construct(array $param = array()) {
      var_dump($param);
      foreach ($param as $key => $value) {
          var_dump($key);
          $this->$key = $value;
      }
    }
  }
 ?>
