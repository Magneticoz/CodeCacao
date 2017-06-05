/* Match heights of news box - homepage */

$(function() {
    $('.box').matchHeight();
});

/* Open/close navigation */

function openNav() {
    document.getElementById("menu").style.width = "100%";
}

function closeNav() {
    document.getElementById("menu").style.width = "0";
}