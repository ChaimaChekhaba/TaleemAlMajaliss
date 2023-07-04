<?php

class Journal {
	public $titre;
    public $ISBN;
    public $editeur;
    public $impactFactor;
    public $theme;
    public $site;
    public $image;
   
	
    public function __construct($titre,$ISBN,$editeur,$impactFactor,$theme,$site,$image)  
    {  
        $this->titre = $titre;
	    $this->ISBN = $ISBN;
        $this->editeur=$editeur;
        $this->impactFactor=$impactFactor;
        $this->theme=$theme;
        $this->site=$site;
        $this->image=$image;
    } 
}

?>