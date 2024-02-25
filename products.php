<?php
include('zpress/connections/dbconnect.php');
include('zpress/connections/functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/styles.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            min-height: 100vh;

            font-family: "poppins",sans-serif;
        }
        #product-details{
            width: 100%;
            overflow: hidden;
        
            display: flex;
            justify-content: space-between;
            align-items: center;

            /* padding: 10px; */
        }
        .product-details-sub{
            width: 50%;
            padding: 10px
        }
        .product-details-right{
            padding: 50px;
        }
        .product-details-right ul{
            font-size: 1rem;
        }
        .product-details-sub img{
            width: 80%;
            height: auto;

            padding: 0px auto;
        }
        .product-details-sub h2{
            padding: 20px 0px;
            font-size: 1.4rem;
        }

        #products-technology-section{
            width: 100%;
            margin: 20px 0px;

            padding: 20px;
        }

        .product-technology-section{
            display: flex;
            justify-content: space-between;
            align-items: start;
            flex-wrap: wrap;

            width: 100%;
            
        }
        .product-tech{
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;

            padding: 50px;
            border: 1px solid black;
            padding-top: 0px;
        }
        .product-tech .product-tech-image img{
            width: 100%;
        }
        .product-tech-discription ul{
            padding: 0px 20px;
            font-size: 0.9rem;
            padding: 10px;

            border: 1px solid black;
        }
        /* Components  */


        .Advanced_Technology {
            background: #f8f8f8;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            font-family: "Poppins", sans-serif;
            line-height: 20px;
            justify-items: center;
            padding: 2%;
        }

        .Advanced_Technology>div>h4 {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            font-family: "Poppins", sans-serif;
        }

        .components {
            background: #f8f8f8;
            margin-top: 3%;
        }

        .components>h2 {
            margin-left: 9%;
            padding-top: 2%;
            font-weight: 900;
        }

        h2:hover {
            color: #6eb3f3;
        }

        .Working_Principles img {
            transition: transform 0.3s ease-in-out;
            border: 1px solid rgb(81, 81, 114);
        }

        .Working_Principles img:hover {
            transform: scale(1.1);
        }

        .controlsDesc {
            display: none;
        }

        .controlsDesc.active {
            display: block;
            margin-left: 35%;
        }

        .selects.toggle {
            text-align: center;
        }


        .controlsDesc2 {
            display: none;
        }

        .controlsDesc2.active2 {
            display: block;
            margin-left: 35%;
        }

        .selects2.toggle {
            text-align: center;
        }

        .controlsDesc3 {
            display: none;
        }

        .controlsDesc3.active3 {
            display: block;
            margin-left: 35%;
        }

        .selects3.toggle {
            text-align: center;
        }

        .controlsDesc4 {
            display: none;
        }

        .controlsDesc4.active4 {
            display: block;
            margin-left: 35%;
        }

        .selects4.toggle {
            text-align: center;
        }

        .controlsDesc5 {
            display: none;
        }

        .controlsDesc5.active5 {
            display: block;
            margin-left: 35%;
        }

        .selects5.toggle {
            text-align: center;
        }

        .controlsDesc6 {
            display: none;
        }

        .controlsDesc6.active6 {
            display: block;
            margin-left: 35%;
        }

        .selects6.toggle {
            text-align: center;
        }

        .controlsDesc7 {
            display: none;
        }

        .controlsDesc7.active7 {
            display: block;
            margin-left: 35%;
        }

        .selects7.toggle {
            text-align: center;
        }

        .controlsDesc8 {
            display: none;
        }

        .controlsDesc8.active8 {
            display: block;
            margin-left: 35%;
        }

        .selects8.toggle {
            text-align: center;
        }

        .controlsDesc9 {
            display: none;
        }

        .controlsDesc9.active9 {
            display: block;
            margin-left: 35%;
        }

        .selects9.toggle {
            text-align: center;
        }

        .controlsDesc10 {
            display: none;
        }

        .controlsDesc10.active10 {
            display: block;
            margin-left: 35%;
        }

        .selects10.toggle {
            text-align: center;
        }


        @media screen and (max-width:786px) {
            .Comaas_Uniqueness {
                width: 100%;
            }

            .Working_Principles>img {
                width: 100%;
            }

            .Advanced_Technology {
                display: flex;
                flex-direction: column;
            }

            .Advanced_Technology>div>div>img {
                margin: 2%;
                text-align: center;
                margin-left: 40%;
            }

            .selects.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects2.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects3.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects4.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects5.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects6.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects7.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects8.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects9.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .selects10.toggle {
                text-align: center;
                margin-right: 25%;
            }

            .controlsDesc.active {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc2.active2 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc3.active3 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc4.active4 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc5.active5 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc6.active6 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc7.active7 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc8.active8 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc9.active9 {
                display: block;
                margin-left: 15%;
            }

            .controlsDesc10.active10 {
                display: block;
                margin-left: 15%;
            }
        }
        .top-bar-heading{
            color: black;
        }


        /* table css  */
        #product-table{
            margin: 10px 0px;
            padding: 10px;

            width: 100%;
            overflow-x: scroll;
        }
        #product-table table{

            width: 100%;
            overflow-x: scroll;
            text-align: center;

            border: 1px solid black;
            border-radius: 10px;
        }
        #product-table h2{
            padding: 20px;
        }
        table tr:nth-child(odd) {
            border: 2px solid black;
            background-color: #f2f2f2;
        }
        table tr {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <special-navbar></special-navbar>

    <?php
        
        $new = $_GET['page'];
    ?>
    <?php
        
        // $new = $_GET['page'];
        // $new = "ULTIMA SORTER";
        $Sorter_details = selectProduct('products',$new);


        foreach($Sorter_details as $row => $header){ ?>

    <div class="top-bar-section">
        <img src="./Images/products/<?= $header['bgImage']?>" alt="No Image">
        <h1 class="top-bar-heading">
            <?=$new ?>
        </h1>
    </div>

    <section id="product-details">
        
        <div class="product-details-sub">
            <img src="./Images/products/<?= $header['image'] ?>" alt="">
        </div>
        <div class="product-details-sub product-details-right">
            <?= $header['product_description'] ?>
            <!-- <h2>Product Description:</h2>
            <ul>
                <li>Simultaneously Sorting MULTI color defects of grain with <strong>online Rejection Separation</strong>.</li>
                <li>Able to Sort Multi grains with high Prrecessiom.</li>
                <li>RGB sorter is available with <strong>64-128-192-256-320-384-448</strong> Channels.</li>
                <li>Pixel by pixel which ensures highly precise, accurate & consistent performance throughout the life of machine.</li>
            </ul> -->
        </div>
        <?php } ?>

    </section>


    <!-- <section id="products-technology-section">
        <h2>Advanced With Technology</h2>
    </section> -->
    <?php
    if($new != "Scales" ){?>

    <div class="components">
        <h2>Technology Components</h2>
        <div class="Advanced_Technology">
            <div>
                <h4>Controller</h4>
                <div class="selects">
                    <img src="./Images/Technology/controller1.jpg" alt="Controller photo">
                </div>
                <div class="controlsDesc">
                    <ul>
                        <li>Most advanced user friendly Multi tasking controller with 12 inch display and linux
                            operating system to ensure fastest and stable operation.</li>
                        <li>Pixel by pixel real time auto calibration capability for precise and accurate sorting.</li>
                        <li>Individual configuration for primary, secondary and tertiary grain runs.</li>
                        <li>Self Diagnosis and alarm monitoring capability for easy maintanance.</li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>Teledyne Dalsa <br> Camera</h4>
                <div class="selects2">
                    <img src="./Images/Technology/camera_1.jpg" alt="Teledyne Dalsa Camera photo">
                </div>
                <div class="controlsDesc2">
                    <ul>
                        <li>BOA is a highly integrated optical inspection tool for controlling quality and increasing
                            productivity.</li>
                        <li>It comprises all the elements of an industrial machine vision system in a tiny smart camera
                            style package..</li>

                    </ul>
                </div>
            </div>
            <div>
                <h4>Ejectors</h4>
                <div class="selects3">
                    <img src="./Images/Technology/enject.jpg" alt="Ejectors photo">
                </div>
                <div class="controlsDesc3">
                    <ul>
                        <li>Japan Made very high speed, extremely precise shooting, Long life and Less Air consumption
                            ejectors.</li>
                        <li>Quick response time with shooting speed of 1200-3000 times per second.</li>
                        <li>Serviceable ejectors with extra long life (more than 6 billion shots).</li>
                    </ul>
                </div>
            </div>
            
            <div>
                <h4>LED</h4>
                <div class="selects5">
                    <img src="./Images/Technology/led.jpg" alt="LED photo">
                </div>
                <div class="controlsDesc5">
                    <ul>
                        <li>CREE's are super high-performing, energy-efficient LEDs which provide a crisp, but low-glare
                            output.</li>
                        <li>CREE-USA make Broad band, Long Life, Highly Bright LED Lamps provides clear vision to
                            Cameras.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="product-table">
        <h2>Specifications</h2>
        <table>

                <tr>
                    <th>Modal</th>
                    <?php
                    if($new != 'RGB SORTER'){
                        echo "<th>No of Chutes</th>
                    <th>No. of cameras</th>";
                    }?>
                    <th>CHANNELS</th>
                    <th>INPUT CAPACITY (ton/hr)</th>
                    <th>POWER (kw)</th>
                    <?php
                    if($new != 'RGB SORTER'){
                        echo "<th>Air in cfm (kw)</th>";
                    }?>
                    <th>COMPRESSOR (hp)</th>
                    <th>SIZE mm (LxWxH)</th>
                </tr>
                <?php 
        include("./zpress/connections/dbconnect.php");
        $technology_query = "Select * from `product_table` where `product_name` = '$new'";
        $technology_result = mysqli_query($con,$technology_query);
        foreach ($technology_result as $row => $header) : ?>
                <tr>
                    <td><?= $header['model'] ?></td>
                    <?php
                        if ($new != 'RGB SORTER') {
                            echo "<td>" . $header['number_of_chutes'] . "</td>";
                            echo "<td>" . $header['number_of_cameras'] . "</td>";
                        }
                    ?>
                    <td><?= $header['channels'] ?></td>
                    <td><?= $header['input_capacity'] ?></td>
                    <td><?= $header['power'] ?></td>
                    <?php
                        if ($new != 'RGB SORTER') {
                            echo "<td>" . $header['air_in_cfm'] . "</td>";
                        }
                    ?>
                    <td><?= $header['compressor'] ?></td>
                    <td><?= $header['size'] ?></td>
                </tr>
                <?php endforeach; ?>
        </table>
    </div>
    <?php  } ?>

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

    <script src="https://use.fontawesome.com/1744f3f671.js"></script>

    <script src="components.js"></script>
    <script src="./js/app.js"></script>

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
        })

        let pic5 = document.querySelector('.selects5');
        let event5 = document.querySelector('.controlsDesc5');
        pic5.addEventListener('click', () => {
            event5.classList.toggle('active5');
            pic5.classList.toggle('toggle');
        })

        let pic6 = document.querySelector('.selects6');
        let event6 = document.querySelector('.controlsDesc6');
        pic6.addEventListener('click', () => {
            event6.classList.toggle('active6');
            pic6.classList.toggle('toggle');
        })

        let pic7 = document.querySelector('.selects7');
        let event7 = document.querySelector('.controlsDesc7');
        pic7.addEventListener('click', () => {
            event7.classList.toggle('active7');
            pic7.classList.toggle('toggle');
        })

        let pic8 = document.querySelector('.selects8');
        let event8 = document.querySelector('.controlsDesc8');
        pic8.addEventListener('click', () => {
            event8.classList.toggle('active8');
            pic8.classList.toggle('toggle');
        })

        let pic9 = document.querySelector('.selects9');
        let event9 = document.querySelector('.controlsDesc9');
        pic9.addEventListener('click', () => {
            event9.classList.toggle('active9');
            pic9.classList.toggle('toggle');
        })

        let pic10 = document.querySelector('.selects10');
        let event10 = document.querySelector('.controlsDesc10');
        pic10.addEventListener('click', () => {
            event10.classList.toggle('active10');
            pic10.classList.toggle('toggle');
        })

    </script>
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