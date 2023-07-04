<html>
    <head>
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
		<h1 class="gris padding"> Bienvenue  </h1>  
		<form method="post" action="index.php?newuser=true" class="subscribe">             
            <p class="login-p">Nom</p><input type="text" value=" " name="nom" class="width "/><br><br>
            <p class="login-p">Prénom</p><input type="text" value="" name="prenom" class="width "/><br><br>
            <p class="login-p">Age</p><input type="number" maxlength="2" value="" name="age" class="width "/><br><br>
			<p class="login-p">Adresse</p><input type="text" value="" name="adresse" class="width "/><br><br>
			<p class="login-p">Pays</p><input type="text" value="" name="pays" class="width "/><br><br>
			<p class="login-p">Fonction</p><input type="text" value="" name="fonction" class="width "/><br><br>
			<p class="login-p">Grade</p>
			<select name="grade" name="grade" class="width ">
				<option value="docteur">Docteur</option>
				<option value="Professeur">Professeur</option>
			</select><br><br>
			<p class="login-p">Affiliation</p>
			<select name="affiliation" class="width ">
				<option value="Laboratoire">Laboratoire</option>
				<option value="Entreprise">Entreprise</option>
				<option value="Universite">Universite</option>
				<option >Autre ...</option>
			</select><br><br>
			<p class="login-p">Nom de l'établissement</p><input type="text" value="" name="etablissement" class="width "/><br><br>
			<p class="login-p">Biographie</p><input type="text" value="" name="biographie" class="width "/><br><br>
			<p class="login-p">Publications</p>
			<p class="login-p">Titre</p><input type="text" value="" class="width "/><br><br>
			<p class="login-p">Article</p><textarea class="width "> </textarea><br><br>
			<p class="login-p">Domaine de recherche</p><input type="text" value="" class="width "/><br><br>
			<p class="login-p">Thématique de recherche</p><br>
			<select name="thematique"  multiple class="width">
				<option value="informatique">Informatique</option>	
				<option value="mathematique">Mathématique</option>
				<option value="medecine">Médecine</option>	
				<option >Autre ...</option>				
			</select><br><br>
			<p class="login-p">Joindre le CV</p><input type="file" value="" name="cv" class="width "/><br><br>
			<p class="login-p">User name</p><input type="text" value="" name="username" class="width "/><br><br>
        	<p class="login-p">Password</p><input type="password" value="" name="password" class="width"/><br><br>
			<hr><br>			
            <input type="submit" value="Enregistrer" style="margin-left:80%;"/>   
			<input type="reset" value="Annuler" style="margin-left:70%;margin-top:-4%;"/><br><br><br><br>   
			</form>     
    </article> 
	<!--début pied de page-->
		<?php 
			include('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>