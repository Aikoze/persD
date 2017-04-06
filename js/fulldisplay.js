var longueur = document.getElementByClassName("title");
var titleOne = longueur.length;

if (titleOne.value < 44) {
    longueur[0].innerHTML += "<br />";
}
else {
}

function fullDisplayOne() {
    var x = document.getElementsByClassName("showMore");
    x[0].style.display = "none";
    document.getElementById("newsOne").setAttribute("style","width:1000px; height:500px; display:block");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayTwo() {
    var x = document.getElementsByClassName("showMore");
    x[1].style.display = "none";
    document.getElementById("newsTwo").setAttribute("style","width:1000px; height:500px; display:block");
    document.getElementById("newsOne").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayThree() {
    var x = document.getElementsByClassName("showMore");
    x[2].style.display = "none";
    document.getElementById("newsThree").setAttribute("style","width:1000px; height:500px; display:block");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsOne").style.display = "none";
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayFour() {
    var x = document.getElementsByClassName("showMore");
    x[3].style.display = "none";
    document.getElementById("newsFour").setAttribute("style","width:1000px; height:500px; display:block");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsOne").style.display = "none";
}

var test = "Interview avec XxYouenfr4g45xX joueur pro de";
var testo = "Évolutions économiques et digitalisation des";
var testii = testo.length;
var testi = test.length;
console.log(testi);
console.log(testii);