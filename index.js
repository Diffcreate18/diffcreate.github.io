var a = 0;
function mouseOver(){
    document.getElementById("logo-changes").style.content = "url(images/logo-light.png)";
}
function mouseOut(){
    document.getElementById("logo-changes").style.content = "url(images/logo-dark.png)";
}
function LightMode()
{
document.getElementById("logo-changes").src="images/logo-light.png";
document.getElementById("nav").className="navbar navbar-light bg-light fixed-top";
document.getElementById("bg").style.background = "white";
document.getElementById("offcanvasDarkNavbar").className="offcanvas offcanvas-end text-bg-light";
document.getElementById("progress").style.background = "black";
document.getElementById("progress-bar").style.color = "white";
document.getElementById("welcome").style.color = "black";
}

function DarkMode()
{
    a++;
    if(a == 10){
        document.getElementById("bg").style.background = "red";
    }else if(a == 20){
        a = 0;
    }else{
        document.getElementById("bg").style.background = "black";
    }
document.getElementById("logo-changes").src="images/logo-dark.png";
document.getElementById("nav").className="navbar navbar-dark bg-dark fixed-top";
document.getElementById("offcanvasDarkNavbar").className="offcanvas offcanvas-end text-bg-dark";
document.getElementById("progress").style.background = "white";
document.getElementById("progress-bar").style.color = "black";
document.getElementById("welcome").style.color = "white";
}

var x = document.getElementById("progress-bar");
x.addEventListener("animationend", end);
function end(){
 document.getElementById("progress").style.display = "none";
 document.getElementById("progress-bar").style.display = "none";
 document.getElementById("welcome").style.display = "block";
}

