<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
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

    <div class="top-bar-section">
        <img src="./images/Home/home1.jpg" alt="No Image">
        <h1 class="top-bar-heading">
            Products
        </h1>
    </div>

    <!-- <section>
        <h1 class="Products-header">Products</h1>
    </section> -->

    <section id="Gallery-Products" class="flex">
    <?php 
        include("./zpress/connections/dbconnect.php");
        $technology_query = "Select * from `gallery`";
        $technology_result = mysqli_query($con,$technology_query);
        foreach ($technology_result as $row => $header) : ?>
        <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/<?= $header['image'] ?>" alt="">
            </div>
            <div class="gallery-heading">
                <h1><?= $header['name'] ?></h1>
            </div>
            <div class="gallery-paragraph">
                <p><?= $header['bottom_content'] ?></p>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/Ultima.png" alt="">
            </div>
            <div class="gallery-heading">
                <h1>Grain Sorter (Ultima Sorter)</h1>
            </div>
            <div class="gallery-paragraph">
                <p>Supplying most advanced color sorters which enables to get safe and clean food grains.</p>
            </div>
        </div>
        <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/UltraS.png" alt="">
            </div>
            <div class="gallery-heading">
                <h1>Grain Sorter (Ultima Sorter)</h1>
            </div>
            <div class="gallery-paragraph">
                <p>Supplying most advanced color sorters which enables to get safe and clean food grains.</p>
            </div>
        </div>



        <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/RGB.png" alt="">
            </div>
            <div class="gallery-heading">
                <h1>Rice Sorter (RGB Sorter)</h1>
            </div>
            <div class="gallery-paragraph">
                <p>Supplying most advanced color sorters which enables to get safe and clean food grains.</p>
            </div>
        </div>
        <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/Ultima.png" alt="">
            </div>
            <div class="gallery-heading">
                <h1>Grain Sorter (Ultima Sorter)</h1>
            </div>
            <div class="gallery-paragraph">
                <p>Supplying most advanced color sorters which enables to get safe and clean food grains.</p>
            </div>
        </div>
        <div class="gallery">
            <div class="image-gallery">
                <img src="./Images/Gallery/UltraS.png" alt="">
            </div>
            <div class="gallery-heading">
                <h1>Grain Sorter (Ultima Sorter)</h1>
            </div>
            <div class="gallery-paragraph">
                <p>Supplying most advanced color sorters which enables to get safe and clean food grains.</p>
            </div>
        </div> -->

    </section>

    <div class="space">

    </div>

    <section id="Grains">
        <h1 class="Grains-Heading">Grains Samples And Technology Used</h1>
        <div class="Grains-right flex">
            <div class="sub-Grains">
                <img src="./Images/Gallery/Seeds_new11.jpg" alt="No-Source!">
            </div>
            <div class="sub-Grains Grains-content">
                <div class="Technology-heading">
                    <h1><Strong>Samples</Strong></h1>
                </div>
                <div class="Grains-Paragraph">
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita
                        erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                </div>
                <div class="Grains-Technology flex">
                <?php 
                    include("./zpress/connections/dbconnect.php");
                    $technology_query = "Select * from `technologies`";
                    $technology_result = mysqli_query($con,$technology_query);
                    $var=0;
                ?>
                <?php foreach ($technology_result as $row => $header) : ?>
                    <div class="technology">
                        <h1><?= $header['name'] ?></h1>
                        <div class="technology-image selects selects<?= $var ?>">
                            <img src="./Images/Technology/<?= $header['image'] ?>" alt="No-Source!">
                        </div>
                        <div class="controlsDesc controlsDesc<?= $var ?>">
                        <?= $header['description'] ?>
                            <!-- <ul>
                                <li>BOA is a highly integrated optical inspection tool for controlling quality and
                                    increasing productivity.</li>
                                <li>It comprises all the elements of an industrial machine vision system in a tiny smart
                                    camera style package..</li>
                            </ul> -->
                        </div>
                    </div>
                <?php $var++; ?>
                <?php endforeach; ?>
                    <!-- <div class="technology">
                        <h1>Ejectors</h1>
                        <div class="technology-image selects2">
                            <img src="./Images/Technology/enject.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc2">
                            <ul>
                                <li>Japan Made very high speed, extremely precise shooting, Long life and Less Air
                                    consumption ejectors.</li>
                                <li>Quick response time with shooting speed of 1200-3000 times per second.</li>
                                <li>Serviceable ejectors with extra long life (more than 6 billion shots).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Air Filters</h1>
                        <div class="technology-image selects3">
                            <img src="./Images/Technology/Air-filter.jpeg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc3">
                            <ul>
                                <li>SMC - Japan Made air filters with 0.01 and 0.001 accuracy & Digital Air regulators.
                            </ul>
                        </div>
                    </div>


                    <div class="technology">
                        <h1>LED</h1>
                        <div class="technology-image selects4">
                            <img src="./Images/Technology/led.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc4">
                            <ul>
                                <li>CREE's are super high-performing, energy-efficient LEDs which provide a crisp, but
                                    low-glare output.</li>
                                <li>CREE-USA make Broad band, Long Life, Highly Bright LED Lamps provides clear vision
                                    to Cameras.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Wireless Control</h1>
                        <div class="technology-image selects5">
                            <img src="./Images/Technology/wireless.jpeg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc5">
                            <ul>
                                <li>Wireless control system to monitor machine remotely through Android
                                    Phones/TAB/PC/Laptop.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <h1>SMPS</h1>
                        <div class="technology-image selects6">
                            <img src="./Images/Technology/Smps.jpeg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc6">
                            <ul>
                                <li>All SMPS from COSEL - Japan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Controller</h1>
                        <div class="technology-image selects7">
                            <img src="./Images/Technology/controller1.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc7">
                            <ul>
                                <li>Most advanced user friendly Multi tasking controller with 12 inch display and linux
                                    operating system to ensure fastest and stable operation.</li>
                                <li>Pixel by pixel real time auto calibration capability for precise and accurate
                                    sorting.</li>
                                <li>Individual configuration for primary, secondary and tertiary grain runs.</li>
                                <li>Self Diagnosis and alarm monitoring capability for easy maintanance.</li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </section>

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
                                <img src="./Images/Testimonials/<?= $header['client_image'] ?>" alt="">
                            </div>
                            <h2>
                                <?= $header['client_name'] ?>
                            </h2>
                            <p>
                                <?= $header['client_comment'] ?>
                            </p>
                        </div>
                        <?php } else {?>
                        <div>
                            <div class="img">
                                <img src="./Images/Testimonials/<?= $header['client_image'] ?>" alt="">
                            </div>
                            <h2>
                                <?= $header['client_name'] ?>
                            </h2>
                            <p>
                                <?= $header['client_comment'] ?>
                            </p>
                        </div>
                        <?php } ?>
                        <?php } ?>

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

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr,te,ko,ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <script src="components.js"></script>
    <script src="./js/app.js"></script>

    <!-- js  -->
    <script>
        let pic1 = document.querySelector('.selects');
        let event1 = document.querySelector('.controlsDesc');
        pic1.addEventListener('click', () => {
            event1.classList.toggle('active');
            pic1.classList.toggle('toggle');
        })

        let pic2 = document.querySelector('.selects2');
        let event2 = document.querySelector('.controlsDesc2');
        pic2.addEventListener('click', () => {
            event2.classList.toggle('active2');
            pic2.classList.toggle('toggle');
        })

        let pic3 = document.querySelector('.selects3');
        let event3 = document.querySelector('.controlsDesc3');
        pic3.addEventListener('click', () => {
            event3.classList.toggle('active3');
            pic3.classList.toggle('toggle');
        })

        let pic4 = document.querySelector('.selects4');
        let event4 = document.querySelector('.controlsDesc4');
        pic4.addEventListener('click', () => {
            event4.classList.toggle('active4');
            pic4.classList.toggle('toggle');
        });

        let pic5 = document.querySelector('.selects5');
        let event5 = document.querySelector('.controlsDesc5');
        pic5.addEventListener('click', () => {
            event5.classList.toggle('active5');
            pic5.classList.toggle('toggle');
        });

        let pic6 = document.querySelector('.selects6');
        let event6 = document.querySelector('.controlsDesc6');
        pic6.addEventListener('click', () => {
            event6.classList.toggle('active6');
            pic6.classList.toggle('toggle');
        });

        let pic7 = document.querySelector('.selects7');
        let event7 = document.querySelector('.controlsDesc7');
        pic7.addEventListener('click', () => {
            event7.classList.toggle('active7');
            pic7.classList.toggle('toggle');
        });

    </script>
    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selects = document.querySelectorAll('.selects');
            selects.forEach(select => {
                select.addEventListener('click', function() {
                    const index = this.classList[1].slice(-1);
                    const controlsDesc = document.querySelector('.controlsDesc' + index);
                    controlsDesc.classList.toggle('active');
                    this.classList.toggle('toggle');
                });
            });
        });
    </script> -->
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