<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
</head>
<body>
    <special-navbar></special-navbar>

    <!-- slider content home page  -->
    <div class="slider-container">
        <img class="slid-img" src="./Images/Home/home1.jpg" alt="No Image">
        <img class="slid-img" src="./Images/Home/DSC_0708.jpg" alt="">
        <img class="slid-img" src="./Images/Home/person.png" alt="">
        <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
        <a class="next" onclick="moveSlide(1)">&#10095;</a>
    </div>
    <!-- slider content end home page  -->

    <!-- home page shortlink to about page  -->
    <div class="link-aboutus-container flex">
        <div class="aboutus-image sub-home-about">
            <img src="./Images/Home/home1.jpg" alt="">
        </div>
        <div class="aboutus-content sub-home-about flex">
            <h1>
                Welcome to COMAAS.
            </h1>
            <p>COMAS CO LTD. is a south Korean based company and founded in 2009. We are dedicated to supply High precision Rice sorters, Grain sorters, Peanut sorter, Tea sorter packaging machinery and scales to customers spread across the world.</p>

            <button class="btn"><a href="./about.php">Explore More</a></button>
        </div>
    </div>
    <!-- home page shortlink to about page  end -->

    <!-- mission vission and persons behinf section home  -->
    <div class="mvp-container flex">
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/Mission.jpg" alt="no Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    Mission
                </h1>
                <p>
                    To supply a world class High precision sorters for Food grains, Quartz, plastics, Minerals and packaging machinery, scales and Rice mill machinery to the Food processing industry in the world.
                </p>
                <button class="btn"><a href="">Learn More-></a></button>
            </div>
        </div>
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/vision.png" alt="no Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    Vision
                </h1>
                <p>
                    To become a Global Leader in Grain Sorting and packaging machinery Technology.
                </p>
                <button class="btn"><a href="">Learn More-></a></button>
            </div>
        </div>
        <div class="mvp-sub flex">
            <div class="mvp-image">
                <img src="./Images/Home/person.png" alt="no Source">
            </div>
            <div class="mvp-content flex">
                <h1>
                    persons Behind
                </h1>
                <p>
                    Mr.Jang Kyung Un is having enriched experience in design, development and deployment of Grain sorters. He was instrumental in design of first RGB technology (Tri-chromatic or full color) sorters in the World from Korea.
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

    <script src="components.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>