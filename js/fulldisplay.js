/* NAVBAR position fixée quand scroll de page en bas */
$(window).scroll(function() {
    var height = $(window).scrollTop();

    if (height  > 150) {
        document.getElementById("navMenu").setAttribute("style", "top: 10px; position: fixed");
    }

    if (height < 50) {
        document.getElementById("navMenu").setAttribute("style", "margin-top: 0");
    }
});

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
