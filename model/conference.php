<?php

class Conference {
	public $date;
    public $lieu;
    public $theme;
    public $description;
    public $image;
      
	
    public function __construct($date,$theme,$description,$image)  
    {  
       $this->date=$date;
       $this->theme=$theme;
       $this->description=$description;
       $this->image=$image;//la bande de publication de la conférence
    } 
}

?>