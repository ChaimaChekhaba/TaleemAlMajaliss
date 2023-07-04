<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invoke()
	{
		
		if (isset($_GET['Chercheur'])){
			$chercheurs = $this->model->getChercheurList();
			include_once 'view/chercheurs.php';
		}
		else  if((isset($_GET['q']))&&(isset($_GET['p']))&&(isset($_GET['d']))){
			  $pays=$_GET['q'];
			  $continent=$_GET['p'];
			  $domaine=$_GET['d'];
			  $chaine = $this->model->getChercheurTous($pays,$continent,$domaine);
			  echo $chaine;
		}
		else if(isset($_GET['nom']) && isset($_GET['prenom'])&&($_SESSION['username']!=null)){
			$chercheur = $this->model->getChercheur($_GET['nom'],$_GET['prenom']);
			include_once 'view/profile.php';
		}
		//pays
		else  if(isset($_GET['q'])){
			  $pays=$_GET['q'];
			  $chaine = $this->model->getChercheurPays($pays);
			  echo $chaine;		 
		}//contient
		else  if(isset($_GET['p'])){
			  $continent=$_GET['p'];
			  $chaine = $this->model->getChercheurContinent($continent);
			  echo $chaine;		 
		}//domaine de recherche
		else  if(isset($_GET['d'])){
			  $domaine=$_GET['d'];
			  $chaine = $this->model->getChercheurDomaine($domaine);
			  echo $chaine;		 
		}
		else if(isset($_GET['publication'])){ 
			  $publications = $this->model->getPublications();
			  include_once 'view/publication.php';
		} 
		else if(isset($_GET['journal'])){ 
			  $journaux = $this->model->getJournaux();
			  include_once 'view/journaux.php';
		} 
		else if(isset($_GET['conference'])){ 
			  $conferences = $this->model->getConferences();
			  include_once 'view/conference.php';
		} 
		else if(isset($_GET['newuser'])){ 
			$nom=$_POST['nom'];
			$prenom=$_POST['prenom'];
			$age=$_POST['age'];
			$adresse=$_POST['adresse'];
			$fonction=$_POST['fonction'];
			$grade=$_POST['grade'];
			$affiliation=$_POST['affiliation'];
			$etablissement=$_POST['etablissement'];
			$biographie=$_POST['biographie'];
			$thematique=$_POST['thematique'];
			$cv=$_POST['cv'];
			$username=$_POST['username'];
			$password=$_POST['password'];
			$pays=$_POST['pays'];
			$result=$this->model->newUser($nom,$prenom,$age,$adresse,$fonction,$grade,$affiliation,$etablissement,$biographie,$thematique,$cv,$username,$password,$pays);
			include_once 'view/viewSite.php';
			if ($result){
				$this->model->afficherUser();
			}			
		}
		else  include_once 'view/viewSite.php';
		if(isset($_GET['login'])){ 
			$username=$_POST['username'];echo 'username='.$username;
			$password=$_POST['password'];
			$result=$this->model->verifierUSer($username,$password);
			if ($result){
				//l'utilisateur existe
				$this->model->afficherUser();
			}	
		}
		if(isset($_GET['signout'])){ 
				if ($result){
					//l'utilisateur existe
					$this->model->afficherSignIn();
				}	
		}
	}
}

?>