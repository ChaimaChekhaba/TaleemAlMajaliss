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
    <!--début zone du contenu-->
    <!--début news events c'est un aside-->
			<article class="aside entete">
			<center>
				<h2 class="gris">Cette semaine </h2>
			</center>
				<aside>
					<div class="event">
						<a href="#" class="red"><h3>Conférence à l'ESI</h3>
						<img src="view/img/téléchargement.jpg" alt="Recherche et développement" width="50%" height="10%"/></a>
						<div class="gauche">
							<p>Une conférence à l'école nationale d'informatique sur le KDD...</p>
						</div>
					</div>
					<div class="event">
						<a href="#" class="red"><h3>Compétition</h3>
						<img src="view/img/algeria-team.jpg" alt="Recherche et développement" width="50%" height="10%"/></a>
						<div class="gauche">
							<p>Une conférence à l'école nationale d'informatique sur le KDD...</p>
						</div>
					</div>
					<div class="event">
						<a href="#" class="red"><h3>Loi de finance</h3>
						<img src="view/img/parlement.jpg" alt="Recherche et développement" width="50%" height="10%"/></a>
						<div class="gauche">
							<p>Une conférence à l'école nationale d'informatique sur le KDD...</p>
						</div>
					</div>
				</aside>
			
			</article>
		<!--fin news events-->
		<!--début news diapo-->
        <article class="diapo-class entete">
		<h1 class="gris padding"> A la une </h1>
			<center>
            <div id="diaporama">
                <div id="diainterne">
                    <a href="view/equipe.php" ><img src="view/img/algeria-team.jpg" alt="L'équipe algérien"  width="90%" height="90%"/><p class="white inside">L'équipe de l'algérie</p></a>
                    <a href="view/mosque.php" ><img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="90%"/><p class="white inside">Le grand mosqué</p></a>
                    <a href="view/money.php" ><img src="view/img/money.jpg" alt="Devise" width="90%" height="90%" /><p class="white inside">Devise</p></a>
                    <a href="view/parlement.php"><img src="view/img/parlement.jpg" alt="Le parlement algérien" width="90%" height="90%"/><p class="white inside">Le parlement algérien</p></a>
                </div>
            </div> 
			</center>
        </article>
        <!--fin news diapo-->
		<!--début news moins récentes-->
        <article class="recent-new entete">
		<h1 class="gris padding"> Informations moins récentes  </h1>
			
				<div class="news">
						<h3><a href="#" class="red">Titre1</a></h3>
						<img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="50%"/>
						<p>La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre</p>
				</div>
				<div class="news">
						<h3><a href="#" class="red">Titre1</a></h3>
						<img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="50%"/>
						<p>La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre</p>
				</div>
				<div class="news">
						<h3><a href="#" class="red">Titre1</a></h3>
						<img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="50%"/>
						<p>La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre</p>
				</div>
				<div class="news">
						<h3><a href="#" class="red">Titre1</a></h3>
						<img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="50%"/>
						<p>La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre</p>
				</div>
				<div class="news">
						<h3><a href="#" class="red">Titre1</a></h3>
						<img src="view/img/grandmosque.jpg" alt="Le grand mosqué" width="90%" height="50%"/>
						<p>La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre</p>
				</div>
			
        </article>
        <!--fin news moins récentes-->
		<br><br>
		<!--début numéro-->
		<article>
			<center>
				<a href="view/equipe.php" class="red numero">1</a>
				<a href="view/mosque.php" class="red numero">2</a>
				<a href="view/money.php" class="red numero">3</a>
				<a href="view/article.php" class="red numero">Suivant</a>
			</center>
		</article>
		<!--fin numéro-->
        <!--début présentation générale du site-->
        <article class="entete padding presentation">
			<h1 class="gris"> Présentation générale du site </h1>
			<p class="corps">
			La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre amicale Algérie – Mauritanie prévue le 7 janvier 2017 à 17h 00 au stade Mustapha Tchaker de Blida qu’ils pourront récupérer leurs accréditations au siège de la FAF à Dely Brahim le samedi 7 janvier 2017 de 9h 30 à 14h 00.
			</p>
		    <h1 class="gris">les objectifs du site </h1>
			<p class="corps">
			La division médias de la Fédération algérienne de football informe l’ensemble des journalistes et photographes accrédités pour la rencontre amicale Algérie – Mauritanie prévue le 7 janvier 2017 à 17h 00 au stade Mustapha Tchaker de Blida qu’ils pourront récupérer leurs accréditations au siège de la FAF à Dely Brahim le samedi 7 janvier 2017 de 9h 30 à 14h 00.
			</p>
			<br><br>
        </article>
        <!--fin présentation générale du site-->      
    <!--fin zone du contenu-->
	<!--début pied de page-->
		<?php 
			include('view/footer.php');
		?>
    <!--fin pied de page-->
</body>
</html>