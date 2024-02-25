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
        .Advanced_Technology .tech{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: baseline;


        }

        .controlsDesc {
            display: none;
            /* margin-left: 35%; */
}

.controlsDesc.active {
    display: block;
}

.selects.toggle {
    text-align: center;
}

@media screen and (max-width: 786px) {
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
        /* margin-left: 40%; */
    }
}
.top-bar-heading {
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
        $var=0;
        ?>

            <div class="Advanced_Technology">
                <?php foreach ($technology_result as $row => $header) : ?>
                <div class="tech">
                    <h4><?= $header['name'] ?></h4>
                    <div class="selects selects<?= $var ?>">
                        <img src="./Images/Technology/<?= $header['image'] ?>" alt="Controller photo">
                    </div>
                    <div class="controlsDesc controlsDesc<?= $var ?>">
                        <?= $header['description'] ?>
                    </div>
                </div>
                <?php $var++; ?>
                <?php endforeach; ?>
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