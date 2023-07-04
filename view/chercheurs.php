<html>
    <head>
    <link rel="stylesheet" href="view/css/style.css">
    <script src="view/js/jquery.min.js"> </script>
    <script src="view/js/javascript.js"></script>
    <meta name="author" content="CHEKHABA Chaima">
    <meta name="keywords" content="Plateforme,collaboration,chercheurs,monde,site web">
    <meta name="description" content="Plateforme de collaboration entre chercheurs du monde entier">
    <meta charset="utf-8">
    <title>Plateforme de collaboration entre chercheurs dans le monde entier</title>
  </head>
<body>
    <!--début logo du site web-->
    <?php 
		include_once('view/header.php');
	?>
    <!--fin logo du site web-->
    <!--début menu-->
    <?php 
		include_once('view/menu.php');
	?>
    <!--fin menu-->
    <!--Début de la liste des chercheurs-->
    <article class="entete">
        <h1 class="gris padding"> Vous connaissez ... </h1>
        <!--Trier la liste des chercheurs par pays-->
        <center>
         <div class="form-group">
            <select name="continent" id="continent" onchange="showResearcherContinent(this.value)"style="width:30%!important;">
                <option value="" disabled selected hidden>Trier selon le continent</option>
                <option value="Afrique">Afrique</option>
                <option value="Amerique">Amérique</option>
                <option value="Asie">Asie</option>
                <option value="Australie">Australie</option>
                <option value="Europe">Europe</option>
            </select>               
            <select name="pays" id="pays" onchange="showResearcher(this.value)"  style="width:30%!important;">
                <option value="" disabled selected hidden>Trier selon le pays</option>
                <option value="Algerie">Algérie</option>
                <option value="Qatar">Qatar</option>
                <option value="UAE">UAE</option>
                <option value="Australie">Australie</option>
                <option value="France">France</option>
            </select>
            <input type="search" placeholder="Domaine de recherche"style="width:30%!important;"onsearch="showResearcherDomaine(this.value)"/>
        </div>
        <br>
        </center>
        <!--On recupere de la base de donnée la liste des chercheurs-->
        <table id="listeRecherche">
                    <tbody>                    	
                         <?php            
                            foreach ($chercheurs as $nom => $chercheur)
                            {
                                echo '<tr class="chercheur">  
                                        <td>                          		
                                        <img  class="img-user" src="view/img/in7.jpg" alt="image d\'un chercheur\'">                          	 
                                        </td><td class="table-text"> <h3 class="gris"><a class="gris" href="index.php?nom="'. $chercheur->nom.'"& prenom="'.$chercheur->prenom.'"">';
                                echo    $chercheur->nom.'  '.$chercheur->prenom.'</a></h3>';
                            echo '<p>'.$chercheur->structureAfiliation.' '.$chercheur->biographie.' </p>';
                            echo '<p>'.$chercheur->publications.'</p>';
                            echo '</td>                      
                                    </tr>  ';
                            }
                   
	                    ?>                                               
                    </tbody>
                </table>
      </article>
   <!--fin de la liste des chercheurs-->
	<!--début pied de page-->
		<?php 
			include_once('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>