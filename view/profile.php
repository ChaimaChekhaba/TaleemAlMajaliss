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
   <!--On affiche le profile du chercheur séléctionné-->
    <div class=" profile">
		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/Medecin.jpg" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6>FEKIH Anis</h6>
				<table>
				<tbody><tr><td>Hopital</td>  
				<td>:</td>  
				<td>Mustapha Bacha</td></tr>
				
				<tr>
				<td>Métier</td>
				<td> :</td>
				<td>Médecin </td>
				</tr>
				<tr>
				<td>Spécialité</td>
				<td> :</td>
				<td> Cardiologue</td>
				</tr>
				<tr>
				<td>Adresse </td>
				<td>:</td>
				<td> Alger Algérie</td>
				</tr>
				</tbody></table>
			</div>
			<div class="clearfix"></div>
			</div>

			<div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Modifier</button>
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--début pied de page-->
		<?php 
			include('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>