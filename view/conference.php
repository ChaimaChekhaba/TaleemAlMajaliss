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
    
 <!--les conférences-->
    <article class="entete">
        <h1 class="gris padding"> Conférences </h1>
         <?php  
                foreach ($conferences as $date => $conference)
                {                  
                    echo '<h2 class="red padding">'.$conference->theme.'</h2><img class="padding" src="view/img/'.$conference->image.'" alt="image" />';
                    echo '<p class="padding corps">'.$conference->description;	
                    echo 'Date '.$conference->date.'</p>';                    			
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