/* NAVBAR position fixée quand scroll de page en bas */
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
    document.getElementById("newsOne").setAttribute("style","width:1000px; height:500px; display:block; transform:scale(1); transition: margin-top 2s");
    document.getElementById("newsTwo").style.display = "none";
    document.getElementById("newsThree").style.display = "none";
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
