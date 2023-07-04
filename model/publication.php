<?php

class Publication {
	public $annee;
    public $domaineRecherche;
    public $image;
    public $article;
    public $titre;
   
	
    public function __construct($annee,$domaineRecherche,$image,$article,$titre)  
    {  
        $this->annee = $annee;
	    $this->domaineRecherche = $domaineRecherche;
        $this->image=$image;
        $this->article=$article;
        $this->titre=$titre;
    } 
}

?>