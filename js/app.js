
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

// navbar js 
var index_value = 1;

        function slideShow() {
            var x = 0;
            setTimeout(slideShow, 2500); // Call slideShow function recursively every 2500 milliseconds
            const slide_img = document.querySelectorAll(".slid-img");

            for (x = 0; x < slide_img.length; x++) {
                slide_img[x].style.display = "none";
            }
            
            index_value++;
            if (index_value > slide_img.length) {
                index_value = 1;
            }
            if (index_value < 1) {
                index_value = slide_img.length;
            }
            
            slide_img[index_value - 1].style.display = "block";
        }
        

        // Start the slideshow when the page loads
        slideShow();

        // Function to move slide left or right
        function moveSlide(n) {
            index_value += n;
            slideShow();
        }
// navbar js end 

