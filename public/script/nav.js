window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (currentScrollPos < 100) {
        document.getElementById("navbar").style.backgroundColor = "#ffffff00";
    } else {
        document.getElementById("navbar").style.backgroundColor = "#00031b";
    }
}