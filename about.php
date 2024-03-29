<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Images/Logo/C logo.png" type="image/x-icon">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div class="topTranslateBar">

        <div class="address">
            <i class="fa-solid fa-location-dot"></i>
            <p>Code: 42902, Republic of Korea.</p>
        </div>

        <div class="phone">
            <i class="fa-solid fa-phone"></i>
            <p>0082-53-592-8257</p>
        </div>

        <div id="google_translate_element"></div>

    </div>

    <special-navbar></special-navbar>

    <section id="about-container" class="flex">
    <?php 
        include("./zpress/connections/dbconnect.php");
        $about_query = "Select * from `aboutus` where `id` = 1";
        $about_res = mysqli_query($con,$about_query);
        $row = mysqli_fetch_assoc($about_res);

        ?>
        <div class="about-sub-section about-content flex">
            <h1>
                About Us:
            </h1>
            <p>
                <?= $row['content'] ?>
                <!-- COMAS CO LTD., is a south Korean based company and founded in 2009. We are dedicated to supply High precision Rice sorters, Grain sorters, Peanut sorter, Tea sorters, packaging machinery and scales to customers spread across the world. We are pioneered in most advanced technology Sorter for all Food grains, Plastics and Quartz etc.., which uses latest AI algorithms. Our Color Sorter machines are designed with cutting edge technology for maximizing the profits of our customer with almost nil slippage of good grains into final rejection, lowest power consumption and highest productivity per chute. -->
            </p>
            <div class="about-show-section flex">
                <div class="tech-about flex">
                    <div class="tech-image">
                        <img src="./Images/Home/quality.png" alt="No Source">
                    </div>
                    <div class="tech-content">
                        <h4>Quality</h4>
                        <hr>
                        <h4>Products</h4>
                    </div>
                </div>
                <div class="tech-about flex">
                    <div class="tech-image">
                        <img src="./Images/Home/technology.png" alt="No Source">
                    </div>
                    <div class="tech-content">
                        <h4>Advanced</h4>
                        <hr>
                        <h4>Technology</h4>
                    </div>
                </div>
                <div class="tech-about flex">
                    <div class="tech-image">
                        <img src="./Images/Home/support.png" alt="No Source">
                    </div>
                    <div class="tech-content">
                        <h4>Customer</h4>
                        <hr>
                        <h4>Support</h4>
                    </div>
                </div>

            </div>
        </div>
        <div class="about-sub-section about-image">
            <img src="./Images/Home/<?= $row['image']?>" alt="No Source">
        </div>
    </section>

    <div class="mission-vision-container flex">
        <div class="sub-mission-vision">
            <h1>Our Mission</h1>
            <p><?= $row['our_mission'] ?></p>
        </div>
        <div class="sub-mission-vision">
            <h1>Our vision</h1>
            <p><?= $row['our_vision'] ?></p>
        </div>
    </div>

    <!-- testimonial slider start  -->
    <div class="container11">
        <section id="testim" class="testim">
            <div class="testim-cover">
                <div class="wrap">

                    <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                    <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>

                    <div id="testim-content" class="cont">
                        <?php
                        $var1 = 1;
                        include('./zpress/connections/dbconnect.php');
                        $testimonial_query = "Select * from `testimonials`";
                        $testmonial_result = mysqli_query($con,$testimonial_query);

                        foreach($testmonial_result as $row => $header){ $var1++ ;?>
                            <?php if($var1 == 2 or $var1 == 1){?>
                                <div class="active">
                            <div class="img">
                                <img src="./Images/Testimonials/<?= $header['client_image'] ?>"
                                    alt="">
                            </div>
                            <h2><?= $header['client_name'] ?></h2>
                            <p><?= $header['client_comment'] ?></p>
                            </div>
                            <?php } else {?>
                                <div >
                            <div class="img">
                                <img src="./Images/Testimonials/<?= $header['client_image'] ?>"
                                    alt="">
                            </div>
                            <h2><?= $header['client_name'] ?></h2>
                            <p><?= $header['client_comment'] ?></p>
                            </div>
                            <?php } } ?>


                    </div>
                    <ul id="testim-dots" class="dots">
                        <li class="dot active"></li>
                        <?php 
                        for($x = 0; $x <= $var1-3; $x++){
                            echo "<li class='dot'></li>";
                        }
                        ?>

                        <!-- <li class="dot"></li> -->
                    </ul>

                </div>
            </div>
        </section>
    </div>
    <!-- testimonial slider end -->

    <special-footbar></special-footbar>

    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr,te,ko,ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    
    <script src="components.js"></script>
    <script src="./js/app.js"></script>
    <script>
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
    </script>
    
</body>
</html>