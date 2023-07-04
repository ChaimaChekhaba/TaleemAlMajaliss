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
		include('view/header.php');
	?>
    <!--fin logo du site web-->
    <!--début menu-->
    <?php 
		include('view/menu.php');
	?>
    <!--fin menu-->
    <!--les journaux-->
    <article class="entete">
        <h1 class="gris padding"> Journaux  </h1>
         <?php 
                foreach ($journaux as $titre => $journal)
                {
                    echo '<div class="news-journaux">';
                    echo '<a href="'.$journal->site.'">';
                    echo '<h2 class="red padding">'.$journal->titre.'</h2><img class="padding" src="view/img/'.$journal->image.'" alt="image" width="90%" height="50%"/>';
                 	echo '<p class="padding corps">ISBN :'.$journal->ISBN;	
                    echo '  '.$journal->editeur.'</p>';
                    echo '<p class="padding corps">'.$journal->impactFactor.' ';	
                    echo ' '.$journal->theme.'</p></a>';
                    echo '</div>';				
                }   
                echo '<br><br><br>';                
	    ?>    
    </article>
   
 
   
	<!--début pied de page-->
		<?php 
			include('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>