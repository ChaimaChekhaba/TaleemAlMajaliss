<?php

class Chercheur {
	public $nom;
	public $prenom;
    public $age;
    public $adresse;
    public $travail;
    public $grade;
    public $structureAfiliation;
    public $biographie;
    public $publications;//elle doit etre une liste
	public $domaineRecherche;
    public $pays;//le pays du chercheur
	public $cv;
	
	public function __construct($nom, $prenom, $age,$adresse,$travail,$grade,$structureAfiliation,$biographie,$publications,$domaineRecherche,$pays,$cv)  
    {  
        $this->nom = $nom;
	    $this->prenom = $prenom;
	    $this->domaineRecherche = $domaineRecherche;
        $this->structureAfiliation=$structureAfiliation;
        $this->biographie=$biographie;
        $this->publications=$publications;
        $this->pays=$pays;
		$this->cv=$cv;
    } 
}

?>