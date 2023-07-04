<?php

include_once("model/chercheur.php");
include_once("model/publication.php");
include_once("model/journal.php");
include_once("model/conference.php");


class Model {
	//recuperer la liste de tous chercheurs 
	public function getChercheurList()
	{
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM chercheur order by nom";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
			$rows[]=new Chercheur($row['nom'],$row['prenom'],0," "," "," ",$row['affiliation'],$row['biographie'],"jj","hhh","Algerie","");
			}  
		}
		$conn->close();
		return $rows;		
	}
	//recuprer la liste des chercheurs qui ont nom et prenom bien precis
	public function getChercheur($nom,$prenom)
	{
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM chercheur WHERE nom='".$nom."' and prenom='".$prenom."' order by nom";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
			$rows[]=new Chercheur($row['nom'],$row['prenom'],0," "," "," ",$row['affiliation'],$row['biographie'],"Entreprise","hhh","Algerie","");
			}  
		}
		$conn->close();
		return $rows;	
	}
	//recuprer la liste des chercheurs d'un pays
	public function getChercheurPays($pays){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouée");
		}
		$sql="SELECT nom,prenom,affiliation,biographie FROM chercheur WHERE pays='".$pays."' order by nom";
		$rows=[];
		$chaine="";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				$rows[]=new Chercheur(utf8_encode($row['nom']),utf8_encode($row['prenom']),0," "," "," ",utf8_encode($row['affiliation']),utf8_encode($row['biographie']),"jj","hhh","Algerie","cv");
				$chaine=$chaine.'<tr class="chercheur">  
                                        <td>                              		
                                        <img  class="img-user" src="view/img/in7.jpg" alt="image d\'un chercheur\'">                          	 
                                        </td><td class="table-text"> <h3 class="gris">';
                        $chaine=$chaine.$row['nom'].'  '.$row['prenom'].'</h3>';
                        $chaine=$chaine.'<p>'.$row['affiliation'].$row['biographie'].' </p>';
                        $chaine=$chaine.'<p>C\'est une publication</p>';
                        $chaine=$chaine.'</td>                      
                                    </tr>';
			}  
		}
		else echo "Aucune réponse";
		$conn->close();
		return $chaine;	
	}
	//trier selon le continent
	public function getChercheurContinent($continent){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouée");
		}
		$sql="SELECT nom,prenom,affiliation,biographie FROM chercheur WHERE continent='".$continent."' order by nom";
		$rows=[];
		$chaine="";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				//$rows[]=new Chercheur(utf8_encode($row['nom']),utf8_encode($row['prenom']),0," "," "," ",utf8_encode($row['affiliation']),utf8_encode($row['biographie']),"jj","hhh","Algerie","cv");
				$chaine=$chaine.'<tr class="chercheur">  
                                        <td>                              		
                                        <img  class="img-user" src="view/img/in7.jpg" alt="image d\'un chercheur\'">                          	 
                                        </td><td class="table-text"> <h3 class="gris">';
                        $chaine=$chaine.$row['nom'].'  '.$row['prenom'].'</h3>';
                        $chaine=$chaine.'<p>'.$row['affiliation'].$row['biographie'].' </p>';
                        $chaine=$chaine.'<p>C\'est une publication</p>';
                        $chaine=$chaine.'</td>                      
                                    </tr>';
			}  
		}
		else echo "Aucune réponse";
		$conn->close();
		return $chaine;	
	}
	//trier selon le domaine de recherche 
	public function getChercheurDomaine($domaine){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouée");
		}
		$sql="SELECT nom,prenom,affiliation,biographie FROM chercheur WHERE domaineRecherche='".$domaine."' order by nom";
		$rows=[];
		$chaine="";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				$rows[]=new Chercheur(utf8_encode($row['nom']),utf8_encode($row['prenom']),0," "," "," ",utf8_encode($row['affiliation']),utf8_encode($row['biographie']),"jj","hhh","Algerie","cv");
				$chaine=$chaine.'<tr class="chercheur">  
                                        <td>                              		
                                        <img  class="img-user" src="view/img/in7.jpg" alt="image d\'un chercheur\'">                          	 
                                        </td><td class="table-text"> <h3 class="gris">';
                        $chaine=$chaine.$row['nom'].'  '.$row['prenom'].'</h3>';
                        $chaine=$chaine.'<p>'.$row['affiliation'].$row['biographie'].' </p>';
                        $chaine=$chaine.'<p>C\'est une publication</p>';
                        $chaine=$chaine.'</td>                      
                                    </tr>';
			}  
		}
		else echo "Aucune réponse";
		$conn->close();
		return $chaine;
	}
	//tous les criteres de recherche
	public function getChercheurTous($pays,$continent,$domaine){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouée");
		}
		$sql="SELECT nom,prenom,affiliation,biographie FROM chercheur WHERE domaineRecherche='".$domaine."'and 
		continent='".$continent."'and pays='".$pays."' order by nom";
		$rows=[];
		$chaine="";
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				$rows[]=new Chercheur(utf8_encode($row['nom']),utf8_encode($row['prenom']),0," "," "," ",utf8_encode($row['affiliation']),utf8_encode($row['biographie']),"jj","hhh","Algerie","cv");
				$chaine=$chaine.'<tr class="chercheur">  
                                        <td>                              		
                                        <img  class="img-user" src="view/img/in7.jpg" alt="image d\'un chercheur\'">                          	 
                                        </td><td class="table-text"> <h3 class="gris">';
                        $chaine=$chaine.$row['nom'].'  '.$row['prenom'].'</h3>';
                        $chaine=$chaine.'<p>'.$row['affiliation'].$row['biographie'].' </p>';
                        $chaine=$chaine.'<p>C\'est une publication</p>';
                        $chaine=$chaine.'</td>                      
                                    </tr>';
			}  
		}
		else echo "Aucune réponse";
		$conn->close();
		return $chaine;
	}
	//recuprer les publications 
    public function getPublications()
	{
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM publication WHERE annee='2017' order by annee";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
			$rows[]=new Publication($row['annee'],utf8_encode($row['domaineRecherche']),$row['image'],utf8_encode($row['article']),utf8_encode($row['titre']));
			}  
		}
		$conn->close();
		return $rows;			
	}	
	//recuperer la liste des journaux de la BDD
	public function getJournaux(){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM journal order by ISBN";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				$rows[]=new Journal(utf8_encode($row['titre']),$row['ISBN'],utf8_encode($row['editeur']),utf8_encode($row['impactFactor']),utf8_encode($row['theme']),utf8_encode($row['site']),$row['image']);
			}  
		}
		$conn->close();
		return $rows;	
	}
	//recuprer la liste des conférences pour cette semaine
	public function getConferences(){
		//on les recupere à partir de la BDD
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM conference WHERE date='2017'";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){			
			while ($row=$result->fetch_assoc()){
			$rows[]=new Conference($row['date'],utf8_encode($row['theme']),utf8_encode($row['description']),$row['image']);
			}  
		}
		$conn->close();
		return $rows;	
	}
	//verifier l'existance utilisateur 
	public function verifierUSer($username,$password){
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouéé");
		}
		$sql="SELECT * FROM chercheur WHERE username='".$username."' and password='".$password."'";
		$rows=[];
		$result=$conn->query($sql);
		if ($result->num_rows>0){
			$row=$result->fetch_assoc();
			session_start();
			session_unset();
			$_SESSION['username']=utf8_encode($username);		
			$rows[]=new Chercheur(utf8_encode($row['nom']),utf8_encode($row['prenom']),0,"","","","","","","","","");
		}
		$conn->close();
		return $rows;	
	}
	//creer un nouveau utilisateur
	public function newUser($nom,$prenom,$age,$adresse,$fonction,$grade,$affiliation,$etablissement,$biographie,$thematique,$cv,$username,$password,$pays){
		$conn=new mysqli("localhost","root","","recherche");
		if ($conn->connect_error){
			die("Connexion échouée");
		}
		$sql="insert into chercheur(nom,prenom,adresse,age,travail,grade,biographie,domaineRecherche,affiliation,pays, username,password) 
		values('".$nom."','".$prenom."','".$adresse."',".$age.",'".$fonction."','".$grade."','".$biographie."','".$thematique."'
		,'".$affiliation."','".$pays."','".$username."', '".$password."')";
		if ($result=$conn->query($sql)){
			session_start();
			session_unset();
			$_SESSION['username']=utf8_encode($username);
		}
		$conn->close();
	}
	//afficher l'utilisateur courant dans la page
	function afficherUser(){
		if ($_SESSION['username']!=null){//l'utisateur est authentifier
			echo '<script>afficherUser("'.$_SESSION['username'].'")</script>';
		}
	}
	//afficher le sign in 
	public function afficherSignIn(){
		echo '<script>afficherSignIn()</script>';
	}
}

?>