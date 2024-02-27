<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .slider {
            width: 100%;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        .slides {
            display: flex;
            transition: transform 0.5s ease-in-out;
            width: 300%; /* Default width */
        }

        .slides img {
            width: 100vw; /* Adjusted to 100% of viewport width */
            height: auto;
            height: 500px;
            object-fit: cover; /* Ensures the entire viewport width is covered */
        }

        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            z-index: 1;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        @media (max-width: 768px) {
            .slider {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .slider {
                width: 100%;
            }
        }
    
    </style>
</head>
<body>
    <special-navbar></special-navbar>

    <section class="slider">
        <button class="prev">&#10094;</button>
        <div class="slides">
        <?php 
        include("./zpress/connections/dbconnect.php");
        $slider_query = "Select * from `home`";
        $slider_res = mysqli_query($con,$slider_query);
        foreach ($slider_res as $row => $header) :
        ?>
            <!-- <img src="./Images/<?= $header['bgImage'] ?>" alt=""> -->
            <img src="./Images/Home/<?= $header['bgImage'] ?>" alt="No Image">
            <!-- <img src="./Images/slid1.jpg" alt="">
            <img src="./Images/slid1.jpg" alt=""> -->
            <!-- Add more images here -->
        <?php endforeach; ?>
        </div>
        <button class="next">&#10095;</button>
    </section>


    <!-- slider content home page  -->
    <div class="slider-container">
    <?php 
        include("./zpress/connections/dbconnect.php");
        $slider_query = "Select * from `home`";
        $slider_res = mysqli_query($con,$slider_query);
        foreach ($slider_res as $row => $header) :
        ?>
        <img class="slid-img" src="./Images/Home/<?= $header['bgImage'] ?>" alt="No Image">
        <!-- <img class="slid-img" src="./Images/Home/DSC_0708.jpg" alt="">
        <img class="slid-img" src="./Images/Home/person.png" alt=""> -->
        <?php endforeach; ?>
        <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
        <a class="next" onclick="moveSlide(1)">&#10095;</a>
    </div>
    
    <!-- slider content end home page  -->

    <!-- home page shortlink to about page  -->
    <div class="link-aboutus-container flex">
    <?php 
        include("./zpress/connections/dbconnect.php");
        $about_query = "Select * from `home`";
        $about_res = mysqli_query($con,$about_query);
        $row = mysqli_fetch_assoc($about_res);

        ?>
        <div class="aboutus-image sub-home-about">
            <img src="./Images/Home/<?= $row['image'] ?>" alt="No Image">
        </div>
        <div class="aboutus-content sub-home-about flex">
            <h1>
                Welcome to COMAAS.
            </h1>
            <p><?= $row['content'] ?>
                <!-- COMAS CO LTD. is a south Korean based company and founded in 2009. We are dedicated to supply High precision Rice sorters, Grain sorters, Peanut sorter, Tea sorter packaging machinery and scales to customers spread across the world. -->
            </p>

            <button class="btn"><a href="./about.php">Explore More</a></button>
        </div>
    </div>
    <!-- home page shortlink to about page  end -->

    <!-- mission vission and persons behinf section home  -->
    <div class="mvp-container flex">
    <?php 
        include("./zpress/connections/dbconnect.php");
        $about_query = "Select * from `aboutus` where `id` = 1";
        $about_res = mysqli_query($con,$about_query);
        $row = mysqli_fetch_assoc($about_res);

        ?>
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/<?= $row['our_mission_image']?>" alt="no Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    Mission
                </h1>
                <p>
                <?= $row['our_mission']?>
                </p>
                <button class="btn"><a href="">Learn More-></a></button>
            </div>
        </div>
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/<?= $row['our_vision_image']?>" alt="no Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    Vision
                </h1>
                <p>
                <?= $row['our_vision']?>
                </p>
                <button class="btn"><a href="">Learn More-></a></button>
            </div>
        </div>
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/<?= $row['person_behind_image']?>" alt="No Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    persons Behind
                </h1>
                <p>
                <?= $row['person_behind']?>
                </p>
                <button class="btn"><a href="">Learn More-></a></button>
            </div>
        </div>
    </div>
    <!-- mission vission and persons behinf section home end  -->

    <!-- pts section start  -->
    <div class="pts-section flex">
        <div class="quality-secton flex pts-sub">
            <div class="pts-quality flex">
                <div class="pts-img">
                    <img src="./Images/Home/quality.png" alt="">
                </div>
                <div class="pts-about">
                    <h2>Quality</h2>
                    <hr>
                    <h2>Products</h2>
                </div>
            </div>
            <div class="pts-quality flex">
                <div class="pts-img">
                    <img src="./Images/Home/technology.png" alt="">
                </div>
                <div class="pts-about">
                    <h2>Advanced</h2>
                    <hr>
                    <h2>Technology</h2>
                </div>
            </div>
            <div class="pts-quality flex">
                <div class="pts-img">
                    <img src="./Images/Home/support.png" alt="">
                </div>
                <div class="pts-about">
                    <h2>Customer</h2>
                    <hr>
                    <h2>Support</h2>
                </div>
            </div>
        </div>
        <div class="pts-image pts-sub">
            <img src="./Images/Home/DSC_0708.jpg" alt="">
        </div>
    </div>
    <!-- pts section end  -->

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

    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>

    <script>
        window.addEventListener('load', function () {
            const slides = document.querySelector('.slides');
            const images = document.querySelectorAll('.slides img');

            let counter = 0;
            let slideWidth = images[0].clientWidth;
            let intervalId;

            // Calculate the width of slides dynamically
            slides.style.width = `${images.length * 100}%`;

            function slide() {
                counter++;
                if (counter === images.length) {
                    counter = 0;
                }
                slides.style.transform = `translateX(-${slideWidth * counter}px)`;
            }

            function startTimer() {
                intervalId = setInterval(slide, 4000);
            }

            startTimer();

            document.querySelector('.prev').addEventListener('click', function () {
                counter--;
                if (counter < 0) {
                    counter = images.length - 1;
                }
                slides.style.transition = 'transform 0.5s ease-in-out';
                slides.style.transform = `translateX(-${slideWidth * counter}px)`;

                clearInterval(intervalId);
                startTimer();
            });

            document.querySelector('.next').addEventListener('click', function () {
                counter++;
                if (counter === images.length) {
                    counter = 0;
                }
                slides.style.transition = 'transform 0.5s ease-in-out';
                slides.style.transform = `translateX(-${slideWidth * counter}px)`;

                clearInterval(intervalId);
                startTimer();
            });

            window.addEventListener('resize', function () {
                slideWidth = images[0].clientWidth;
                slides.style.transition = 'none';
                slides.style.transform = `translateX(-${slideWidth * counter}px)`;
                setTimeout(() => {
                    slides.style.transition = '';
                }, 50);
            });
        });

    </script>

    <script src="components.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>