
function myFunction() {
    var nav = document.getElementById("mobile-nav");
    if (nav.style.display === "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
}

document.getElementById("mobile-nav").style.display = 'none';
