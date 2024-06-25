let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () => {
    search.classList.toggle('active');
    menu.classList.remove('active');
}

let menu = document.querySelector('.navbar');

document.querySelector('#menu-icon').onclick = () => {
    menu.classList.toggle('active');
    search.classList.remove('active');
}

// Hide Menu and Search Box on Scroll
window.onscroll = () => {
    menu.classList.remove('active');
    search.classList.remove('active');
}

// Header
let header = document.querySelector('header');

window.addEventListener('scroll', () => {
    header.classList.toggle('shadow', window.scrollY > 0);
});

// JavaScript ile arama kutusunu açma/kapama
document.getElementById("search-icon").addEventListener("click", function() {
    var searchBox = document.querySelector(".search-box");
    searchBox.style.display = (searchBox.style.display === "block") ? "none" : "block";
});   



