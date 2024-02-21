<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

    <special-navbar></special-navbar>

    <section id="about-container" class="flex">
        <div class="about-sub-section about-content flex">
            <h1>
                About Us:
            </h1>
            <p>
                COMAS CO LTD., is a south Korean based company and founded in 2009. We are dedicated to supply High precision Rice sorters, Grain sorters, Peanut sorter, Tea sorters, packaging machinery and scales to customers spread across the world. We are pioneered in most advanced technology Sorter for all Food grains, Plastics and Quartz etc.., which uses latest AI algorithms. Our Color Sorter machines are designed with cutting edge technology for maximizing the profits of our customer with almost nil slippage of good grains into final rejection, lowest power consumption and highest productivity per chute.
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
            <img src="./Images/about.png" alt="No Source">
        </div>
    </section>

    <div class="mission-vision-container flex">
        <div class="sub-mission-vision">
            <h1>Our Mission</h1>
            <p>To supply a world class High precision sorters for Food grains, Quartz, plastics, Minerals and packaging machinery, scales and Rice mill machinery to the Food processing industry in the world.</p>
        </div>
        <div class="sub-mission-vision">
            <h1>Our vision</h1>
            <p>To become a Global Leader in Grain Sorting and packaging machinery Technology.</p>
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
    
    <script src="components.js"></script>
    <script src="./js/app.js"></script>
    
</body>
</html>