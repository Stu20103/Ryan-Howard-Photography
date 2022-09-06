$.backstretch([
    "Images/lambo.JPG"
], {duration: 3000, fade: 750});

function toggleMobileMenu(menu) {
    menu.classList.toggle('open');

}

function myFunction(){
    document.body.classList.toggle('disable-scroll');
}

document.getElementById("hamburger-icon").addEventListener("click", myFunction);

