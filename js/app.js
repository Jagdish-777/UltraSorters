
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



// testimonial slider js 
        // vars
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;
        ;

        window.onload = function () {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function () {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function () {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function () {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function () {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function (e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function (e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function (e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
// testimonial slider js end

