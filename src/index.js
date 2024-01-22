// JavaScript to add and remove fade class for header
window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    var scrollPosition = window.scrollY;if (scrollPosition > 50) {
        header.classList.add('fade');
    } else {
        header.classList.remove('fade');
    }
});