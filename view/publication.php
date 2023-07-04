<html>
    <head>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/style.css">
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
    <!--les nouveautés-->
    <article class="entete">
        <h1 class="gris padding"> Publications  </h1>
         <?php 
                foreach ($publications as $annee => $pub)
                {
                    echo '<h2 class="gris padding">'.$pub->titre.'</h2><h3 class="gris padding">'.$pub->annee.'  '.$pub->domaineRecherche.'</h3><img class="padding"src="view/img/'.$pub->image.'" alt="image" width="90%" height="50%"/>';
                 	echo '<p class="padding corps">'.$pub->article.'</p>';			
                }   
                echo '<br><br>';                
	    ?>    
    </article>
   
	<!--début pied de page-->
		<?php 
			include_once('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>