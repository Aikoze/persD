/* NAVBAR position fixée quand scroll de haut en bas */
$(window).scroll(function() {
    var height = $(window).scrollTop();

    if (height  > 150) {
        document.getElementById("navMenu").setAttribute("style", "top: 10px; position: fixed");
    }

    if (height < 50) {
        document.getElementById("navMenu").setAttribute("style", "");
    }
});

/* +++++ Display des news en plein écran +++++ */
var plusBtn = document.getElementsByClassName("showMore");
var homeBtn = document.getElementsByClassName("backHome");

function fullDisplayOne() {
    plusBtn[0].style.display = "none";
    homeBtn[0].style.display = "block";
    document.getElementById("newsOne").setAttribute("style","width:1000px; height:500px; display:block; transform:scale(1)");
    document.getElementById("newsTwo").classList.remove("hidden");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsThree").classList.remove("hidden");
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsFour").classList.remove("hidden");
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayTwo() {
    plusBtn[1].style.display = "none";
    homeBtn[1].style.display = "block";
    document.getElementById("newsTwo").setAttribute("style","width:1000px; height:500px; display:block; transform:scale(1)");
    document.getElementById("newsOne").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayThree() {
    plusBtn[2].style.display = "none";
    homeBtn[2].style.display = "block";
    document.getElementById("newsThree").setAttribute("style","width:1000px; height:500px; display:block; transform:scale(1)");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsOne").style.display = "none";
    document.getElementById("newsFour").style.display = "none";
}

function fullDisplayFour() {
    plusBtn[3].style.display = "none";
    homeBtn[3].style.display = "block";
    document.getElementById("newsFour").setAttribute("style","width:1000px; height:500px; display:block; transform:scale(1)");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
    document.getElementById("newsOne").style.display = "none";
}

/* ++++++++++++ DISPLAY PROGRESSIF DES NEWS ++++++ */

/* !!!!!!! A RECTIFIER : Apparition des div à l'exécution de la fonction fullDisplay()
Voir lignes 22/24/26 JS - 101/102 SCSS - 30/45/57/69 html */
$(function() {
    // fonction ci-dessous
    showDiv();
});

function showDiv() {
    // Check si div cachées
    if($('div:hidden').length) {
        // Effet sur la première div en display:hidden trouvée
        $('div:hidden:first').fadeIn();
        // Temps d'attente avant effet sur la suivante
        setTimeout(showDiv, 700);
    }
}
