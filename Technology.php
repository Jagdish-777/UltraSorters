<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technology</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .Comaas_Uniqueness {
            background: #f8f8f8;
            font-family: "Poppins", sans-serif;
            padding: 5%;

        }

        .Comaas_Uniqueness>h2 {
            padding-bottom: 1%;
            margin-left: 10%;
            letter-spacing: 0.5px;
            font-weight: 900;
        }

        .Comaas_Uniqueness>ul {
            color: #555555;
            line-height: 30px;
            margin-left: 11%;
        }

        /* Working_Principles */

        .Working_Principles {
            background: #f8f8f8;
            font-family: "Poppins", sans-serif;
            margin-top: 4%;
            text-align: center;
            padding: 3%;
        }

        .Working_Principles>h2 {
            padding-bottom: 2%;
            letter-spacing: 0.5px;
            font-weight: 900;
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
    </style>


</head>

<body>
    <special-navbar></special-navbar>

    <div class="top-bar-section">
        <img src="./images/Technology/tech bg (2).png" alt="No Image">
        <h1 class="top-bar-heading">
            Technology
        </h1>
    </div>

    <div class="Comaas_Uniqueness">
        <h2>Comaas Uniqueness</h2>
        <ul>
            <li>Most advanced Complete Color Ultra vision Camera Technology to sort Multi Grains most efficiently with
                lowest air and power consumption.</li>
            <li>SMC-Japan made Extremely precise shooting >1200 cycles per second, Long life , less air consumption and
                Serviceable ejectors ensures trouble free operation years together.</li>
            <li>SMC-Japan made Extremely precise shooting >1200 cycles per second, Long life , less air consumption and
                Serviceable ejectors ensures trouble free operation years together.</li>
            <li>Pixel by pixel which ensures highly precise, accurate & consistent performance throughout the life of
                machineOverall Cost of COMAS Sorter is less than the Other leading brand sorter with all advance
                features and made in Japan components.</li>
        </ul>
    </div>

    <div class="Working_Principles">
        <h2>Working Principles</h2>
        <img src="./Images/Technology/Technology-gif.gif" alt="">
    </div>

    <div class="components">
        <h2>Components</h2>
        <?php 
        include("./zpress/connections/dbconnect.php");
        $technology_query = "Select * from `technologies`";
        $technology_result = mysqli_query($con,$technology_query);

        foreach($technology_result as $row => $header){ ?>

        <div class="Advanced_Technology">
            <div>
                <h4><?= $header['name'] ?></h4>
                <div class="selects">
                    <img src="./Images/Technology/<?= $header['image'] ?>" alt="Controller photo">
                </div>
                <div class="controlsDesc">
                <?= $header['description'] ?>
                    <!-- <ul>
                        <li>Most advanced user friendly Multi tasking controller with 12 inch display and linux
                            operating system to ensure fastest and stable operation.</li>
                        <li>Pixel by pixel real time auto calibration capability for precise and accurate sorting.</li>
                        <li>Individual configuration for primary, secondary and tertiary grain runs.</li>
                        <li>Self Diagnosis and alarm monitoring capability for easy maintanance.</li>
                    </ul> -->
                </div>
            </div>
        </div>

            <?php } ?>
            <!-- <div>
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
                <h4>Software</h4>
                <div class="selects4">
                    <img src="./Images/Technology/Software.jpeg" alt="Software photo">
                </div>
                <div class="controlsDesc4">
                    <ul>
                        <li>Extremely efficient software capable of processing various materials with Data Summing
                            technology and HSI.</li>
                        <li>Online Video option to check material condition and grind defects.</li>
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
            <div>
                <h4>Feeder</h4>
                <div class="selects6">
                    <img src="./Images/Technology/Feeder.jpeg" alt="Feeder photo">
                </div>
                <div class="controlsDesc6">
                    <ul>
                        <li>Auto feeding system with acceleration sensor & overload protection.</li>
                    </ul>
                </div>
            </div>

            <div>
                <h4>Chutes</h4>
                <div class="selects7">
                    <img src="./Images/Technology/Chutes.jpeg" alt="Chutes photo">
                </div>
                <div class="controlsDesc7">
                    <ul>
                        <li>Special coated anodized aluminum flat and channelized chutes with heaters for various
                            grains.</li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>Air Filters</h4>
                <div class="selects8">
                    <img src="./Images/Technology/filter.jpg" alt="Air Filters photo">
                </div>
                <div class="controlsDesc8">
                    <ul>
                        <li>SMC - Japan Made air filters with 0.01 and 0.001 accuracy & Digital Air regulators.</li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>Wireless Control</h4>
                <div class="selects9">
                    <img src="./Images/Technology/wireless.jpeg" alt="Wireless Control photo">
                </div>
                <div class="controlsDesc9">
                    <ul>
                        <li>Wireless control system to monitor machine remotely through Android Phones/TAB/PC/Laptop.
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>SMPS</h4>
                <div class="selects10">
                    <img src="./Images/Technology/Smps.jpeg" alt="SMPS photo">
                </div>
                <div class="controlsDesc10">
                    <ul>
                        <li>All SMPS from COSEL - Japan.</li>
                    </ul>
                </div>
            </div> -->

        
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

    <!-- java script -->

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

</body>

</html>