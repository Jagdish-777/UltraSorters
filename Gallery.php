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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            --primary-color: #3498db;
            --primary-2: rgb(216, 232, 245);
        }

        body {
            font-family: "Poppins", sans-serif;
            margin: 0px;
            padding: 0px;
            font-size: 16px;
            box-sizing: border-box;
            min-height: 100vh;
        }
        /* top bar css  */
        .top-bar-section {
            position: relative;
            left: 0;
            width: 100%;
            z-index: -1;
            height: 300px;

        }

        .top-bar-section img {
            width: 100%;
            height: 100%;

        }

        .top-bar-section h1 {
            color: #fff;
            font-family: poppins;
            font-size: 2rem;
            font-weight: 700;
            left: 50%;
            position: absolute;
            text-shadow: 2px 2px 4px #00000080;
            top: 50%;
            transform: translate(-50%, -50%);

        }
        /* topbar css end   */

        section {
            margin: 0px auto;
            background-color: var(--primary-2);
            background: linear-gradient(0deg, rgba(214, 214, 214, 1) 0%, rgba(255, 255, 255, 1) 100%);
            width: 100%;
            overflow: hidden;
        }

        .flex {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        #Gallery-Products {
            margin: 0px auto;
            padding: 30px auto;
            padding-top: 30px;
            padding-bottom: 30px;

            flex-wrap: wrap;
        }

        .gallery {
            overflow: hidden;
            justify-content: space-between;
            border: 1px solid black;
            width: 25%;
            margin: 10px;
            background-color: #fff;

            border-radius: 10px 15px;
        }

        .gallery:hover {
            border-radius: 15px 30px;
            box-shadow: 5px 10px rgb(104, 187, 243);
        }

        .image-gallery {
            width: 100%;
            height: 100%;
            overflow: hidden;
            transition: transform .2s;
        }

        .image-gallery:hover {
            transform: scale(1.1);
        }

        .image-gallery img {
            width: 100%;
            height: 100%;
        }

        .gallery-heading h1 {
            text-decoration: underline;
            padding: 10px;
            color: var(--primary-color);
            font-size: 1.2rem;

        }

        .gallery-paragraph p {
            padding: 10px;
            font-size: 1rem;

        }

        .space {
            margin: 10px;
        }

        /* grains section css */
        .sub-Grains {
            width: 50%;
            overflow: hidden;
            font-size: 1rem;
        }

        #Grains .Grains-Heading {
            font-size: 2rem;
            padding: 20px;
            text-align: center;
            text-decoration: underline;
        }

        .sub-Grains img {
            width: 100%;
        }

        .Technology-heading {
            text-decoration: underline;
            padding: 10px;
        }
        .Grains-right{
            align-items: start;
        }

        .Grains-content {
            box-sizing: border-box;
            padding: 10px;
        }
        .Grains-Technology{
            align-items: start;
        }
        .Grains-Paragraph{
            padding: 10px;
        }

        .technology-image {
            overflow: hidden;
        }

        .technology-image img {
            width: 50%;
        }

        .technology {
            width: 30%;
        }

        .technology h1 {
            font-size: 1rem;

        }

        .controlsDesc {
            display: none;
        }

        .controlsDesc.active {
            display: block;
        }

        .controlsDesc2 {
            display: none;
        }

        .controlsDesc2.active2 {
            display: block;
        }

        .controlsDesc3 {
            display: none;
        }

        .controlsDesc3.active3 {
            display: block;
        }

        @media screen and (max-width: 768px) {
            .flex {
                flex-direction: column;
            }

            .image-gallery {
                overflow: hidden;
                transition: transform .2s;
            }

            .image-gallery:hover {
                transform: scale(1.05);
                /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }

            .gallery {
                width: 80%;
            }

            .sub-Grains {
                width: 80%;
            }

        }
    </style>
</head>

<body>

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
                    <div class="technology">
                        <h1>Teledyne Dalsa Camera</h1>
                        <div class="technology-image selects">
                            <img src="./Images/Gallery/camera_1.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc">
                            <ul>
                                <li>BOA is a highly integrated optical inspection tool for controlling quality and
                                    increasing productivity.</li>
                                <li>It comprises all the elements of an industrial machine vision system in a tiny smart
                                    camera style package..</li>

                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Ejectors</h1>
                        <div class="technology-image selects2">
                            <img src="./Images/Gallery/enject.jpg" alt="No-Source!">
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
                            <img src="./Images/Gallery/filter.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc3">
                            <ul>
                                <li>SMC - Japan Made air filters with 0.01 and 0.001 accuracy & Digital Air regulators.
                                <li>
                            </ul>
                        </div>
                    </div>


                    <div class="technology">
                        <h1>Teledyne Dalsa Camera</h1>
                        <div class="technology-image">
                            <img src="./Images/Gallery/camera_1.jpg" alt="No-Source!">
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Ejectors</h1>
                        <div class="technology-image">
                            <img src="./Images/Gallery/enject.jpg" alt="No-Source!">
                        </div>
                    </div>
                    <div class="technology">
                        <h1>Air Filters</h1>
                        <div class="technology-image">
                            <img src="./Images/Gallery/filter.jpg" alt="No-Source!">
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>

    <special-footbar></special-footbar>

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
        })
    </script>

</body>

</html>