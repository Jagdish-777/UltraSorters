
document.addEventListener('DOMContentLoaded', function () {
        let nav = document.querySelector('.menu-bar');
        let burger = document.querySelector('.burger');

        burger.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        // burger.classList.toggle('toggle');
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Your additional JavaScript code for index.php can go here
    let burger = document.querySelector('.burger');
    let navlink = document.querySelector('.nav-links');
    console.log(burger);

burger.addEventListener('click', () => {
    navlink.classList.toggle('active');
    burger.classList.toggle('toggle');
});
});

