<nav>   
		<a href="index.php" class="menu"><img src="view/img/Home-52.png" alt="se connecter"  height="80%"/></a>
        <a href="index.php?Chercheur=true" class="menu" name="Chercheur">Chercheurs</a>
        <a href="index.php?publication=true" class="menu" name="publication">Publications</a>
        <a href="index.php?journal=true" class="menu" name="journal">Journaux</a>
        <a href="index.php?conference=true" class="menu" name="conference">Conférence</a>
        <a href="index.php?contact=true" class="menu" name="contact">Contact</a>
        <a href="#" class="menu login" id="btn"><img src="view/img/Guest Male-50.png" alt="se connecter" height="80%" style="margin-right:0px;"/></a>
         <!-- début modal connexion  -->
		<form method="post" action="index.php?login=true">
        <div id="myModal" class="modal">            
            <div class="modal-content">
                <div class="modal-header">
                <span class="close">&times;</span>
                    <h2 class="white">Login in</h2>
                </div>
                <div class="modal-body">       
                    <br><br>         
                    <input type="text" placeholder="Username" name="username" /><br><br>
                    <input type="password" placeholder="Password" name="password" /><br><br>
                    <input type="submit" value="Connexion" class="white" /><br><br>
                    <hr>
                    <a href="#" class="gris" id="inscrit" onclick="afficher()"style="font-size:20px;">S'inscrire</a> <br><br>                           
               
                </div>
            </div>
		</div>
        </form>
         <!-- fin du modal connexion -->
        <script>
       
            var modal = document.getElementById('myModal');
            var btn = document.getElementById("btn");
            var span = document.getElementsByClassName("close")[0];
            btn.onclick = function() {
                modal.style.display = "block";
            }
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        
        </script>
        <!-- début modal inscription  -->
		<form method="post" action="index.php?newuser=true">
        <div id="inscriptionModal" class="modal">            
            <div class="modal-content" style="width:50%!important;">
                <div class="modal-header">
                <span class="close1">&times;</span>
                    <h2 class="white">S'inscrire</h2>
                </div>
                <div class="modal-body" >      
                <div class="form-group">          
                    <input type="text" placeholder="Nom" name="nom" style="width:30%!important;" required/>
                    <input type="text" placeholder="Prénom" name="prenom" style="width:30%!important;"required />     
                    <input type="number" placeholder="Age" name="age" style="width:30%!important;"required/>           
                </div> 
                <div class="form-group">    
                    <input type="text" placeholder="Adresse" name="adresse" style="width:30%!important;"required />
                    <input type="text" placeholder="Pays" name="pays" style="width:30%!important;"required/>
                    <input type="text" placeholder="Fonction" name="fonction" style="width:30%!important;" required/>
                 </div> 
                <div class="form-group">    
                    <select name="grade" placeholder="Grade" style="width:30%!important; "required>
                        <option value="" disabled selected hidden>Séléctionner votre grade</option>
                        <option value="docteur">Docteur</option>
                        <option value="Professeur">Professeur</option>
                    </select>
                    <select name="affiliation" placeholder="Affiliation" style="width:30%!important;" required>
                        <option value="" disabled selected hidden>Séléctionner votre affiliation</option>
                        <option value="Laboratoire">Laboratoire</option>
                        <option value="Entreprise">Entreprise</option>
                        <option value="Universite">Universite</option>
                        <option >Autre ...</option>
                    </select>
                     <input type="text" placeholder="Nom de l'établissement" name="etablissement" style="width:30%!important;" required/>
                 </div> 
                <div class="form-group">  
                    <input type="text" placeholder="Biographie" name="biographie"style="width:30%!important;" required/>
                    <input type="text" placeholder="Titre du publication"style="width:30%!important;" required/>
                    <input type="text" placeholder="Domaine de recherche"style="width:30%!important;"required />
                </div> 
                <div class="form-group">                    
                    <select name="thematique"  multiple  placeholder="Thématique de recherche"style="width:30%!important;" size="1" required>
                        <option value="" disabled selected hidden>Séléctionner la thématique de recherche</option>
                        <option value="informatique">Informatique</option>	
                        <option value="mathematique">Mathématique</option>
                        <option value="medecine">Médecine</option>	
                        <option >Autre ...</option>				
                    </select>
                    <textarea placeholder="Taper ici l'article de votre publication" style="width:30%!important;" required> </textarea>  
                     <input type="file" placeholder="CV" name="cv" style="width:30%!important;" required/>
                </div>                 
                <div class="form-group">  
                    <input type="text" placeholder="Username" name="username"style="width:45%!important;" required/>
                    <input type="password" placeholder="Password" name="password" style="width:45%!important;" required/>
                </div>
                    <hr>
                <div class="form-group"> 	
                    <input type="reset" value="Annuler" style="width:20%!important;"/> 
                    <input type="submit" value="Enregistrer" style="width:20%!important;"/>                                          
                </div>
                
            </div>
		</div>
        </form>
         <!-- fin du modal inscription -->
      <script>     
      function afficher(){  
            var modal = document.getElementById('inscriptionModal');
            var modal1 = document.getElementById('myModal');
            var btn = document.getElementById("inscrit");
            var span = document.getElementsByClassName("close1")[0];
            var close=document.getElementsByClassName("close")[0];
            btn.onclick = function() {
                modal.style.display = "block";
                modal1.style.display = "none";
            }
            span.onclick = function() {
                modal.style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                    modal1.style.display = "none";
                }
            }
      }
        </script>

</div>
</nav>
<br><br>
<!--chahra mehtar ma copine de chambre rahi ga3da mfou9 rassi rahi takel fl 3sel-->