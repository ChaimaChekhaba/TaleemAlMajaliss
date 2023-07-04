function afficherUser(str){
    var username="<a href=\"index.php?signout=true\" id=\"user\" class=\"dropdwon\"><span>Déconnexion<div class=\"dropdown-content\"><p>Déconnexion</p></div></a>"
    $("a#btn.menu.login").replaceWith(username)
    $("a#user").css("margin-left","20%")
    $("a#user").css("color","white")
    $("a#user").css("font-size","20px")
    $("a#user").css("cursor","auto")
}
function afficherSignIn(){
    var username="<a href=\"#\" class=\"menu login\" id=\"btn\"><img src=\"view/img/Guest Male-50.png\" alt=\"se connecter\" height=\"80%\" style=\"margin-right:0px;\"/></a>";
     $("a#user").replaceWith(username)
}
function showResearcher(str){
    if(str==""){
        document.getElementById("listeRecherche").innerHTML="";
        return ;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("listeRecherche").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","index.php?q="+str,true);
    xmlhttp.send();
}
function showResearcherContinent(str){
    if(str==""){
        document.getElementById("listeRecherche").innerHTML="";
        return ;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("listeRecherche").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","index.php?p="+str,true);
    xmlhttp.send();
}
function showResearcherDomaine(str){
    if(str==""){
        document.getElementById("listeRecherche").innerHTML="";
        return ;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("listeRecherche").innerHTML=this.responseText;
        }
    }
    xmlhttp.open("GET","index.php?d="+str,true);
    xmlhttp.send();
}
$(document).ready(function (){
    $("tr.chercheur").click(function(){
        
    })
})