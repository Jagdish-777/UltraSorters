<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        *{
            --primary-color: #3498db;
            --primary-2: rgb(216, 232, 245);
        }
        body{
            font-family: Arial, sans-serif;
            margin: 0px;
            padding: 0px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .Products-header{
            text-align: center;
            font-size: 2rem;
            text-decoration: underline;

        }
        section{
            margin: 0px auto;
            background-color: var(--primary-2);
            width: 100%;
            overflow: hidden;
        }
        .flex{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .gallery{
            overflow: hidden;
            border: 2px solid black;
            width: 25%;
            margin: 10px;
            
            border-radius: 10px 15px;
        }
        .gallery:hover{
            border-radius: 15px 30px;
            box-shadow: 5px 10px rgb(104, 187, 243);
        }
        .image-gallery{
            overflow: hidden;
            transition: transform .2s;
        }
        .image-gallery:hover{
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .image-gallery img{
            width: 100%;
            height: auto;
        }
        .gallery-heading h1{
            text-decoration: underline;
            color: var(--primary-color);
            font-size: 1.2rem;
            
        }
        .gallery-paragraph p{
            font-size: 1rem;
            
        }
        .space{
            margin: 10px;
        }

    /* grains section css */
        .sub-Grains{
            width: 50%;
            overflow: hidden;
            font-size: 1rem;
        }
        #Grains .Grains-Heading{
            font-size: 2rem;
            text-align: center;
            text-decoration: underline;
        }
        .sub-Grains img{
            width: 100%;
        }
        .Technology-heading{
            text-decoration: underline;

        }
        .Grains-content{
            box-sizing: border-box;
            padding: 5px;
        }
        .technology-image{
            overflow: hidden;
            
        }
        .technology-image img{
            width: 50%;
        }
        .technology{
            width: 30%;
            
        }
        .technology h1{
            font-size: 1rem;
            
        }

        .controlsDesc{display: none;}
        .controlsDesc.active{display: block;}
        .controlsDesc2{display: none;}
        .controlsDesc2.active2{display: block;}
        .controlsDesc3{display: none;}
        .controlsDesc3.active3{display: block;}


        
        
        
        @media screen and (max-width: 768px){
            .flex{
                flex-direction: column;
            }
            .image-gallery{
                overflow: hidden;
                transition: transform .2s;
            }
            .image-gallery:hover{
                transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            }
            .gallery{
                width: 80%;
            }
            .sub-Grains{
                width: 80%;
            }
            
        }
    </style>
</head>
<body>

<?php include 'Navbar.php'; ?>

    <section>
        <h1 class="Products-header">Products</h1>
    </section>

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
        <div class="flex">
            <div class="sub-Grains">
                <img src="./Images/Gallery/Seeds_new11.jpg" alt="No-Source!">
            </div>
            <div class="sub-Grains Grains-content">
                <div class="Technology-heading">
                    <h1><Strong>Samples</Strong></h1>
                </div>
                <div class="Grains-Paragraph">
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                </div>
                <div class="Grains-Technology flex">
                    <div class="technology">
                        <h1>Teledyne Dalsa Camera</h1>
                        <div class="technology-image selects">
                            <img src="./Images/Gallery/camera_1.jpg" alt="No-Source!">
                        </div>
                        <div class="controlsDesc">
                            <ul>
                                <li>BOA is a highly integrated optical inspection tool for controlling quality and increasing productivity.</li>
                                <li>It comprises all the elements of an industrial machine vision system in a tiny smart camera style package..</li>
                               
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
                                <li>Japan Made very high speed, extremely precise shooting, Long life and Less Air consumption ejectors.</li>
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
                                <li>SMC - Japan Made air filters with 0.01 and 0.001 accuracy & Digital Air regulators.<li>
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

    <!-- js  -->
    <script>
        let pic1 = document.querySelector('.selects');
        let event1 = document.querySelector('.controlsDesc');
        pic1.addEventListener('click', ()=> {
            event1.classList.toggle('active');
            pic1.classList.toggle('toggle');
        })

        let pic2 = document.querySelector('.selects2');
        let event2 = document.querySelector('.controlsDesc2');
        pic2.addEventListener('click', ()=> {
            event2.classList.toggle('active2');
            pic2.classList.toggle('toggle');
        })

        let pic3 = document.querySelector('.selects3');
        let event3 = document.querySelector('.controlsDesc3');
        pic3.addEventListener('click', ()=> {
            event3.classList.toggle('active3');
            pic3.classList.toggle('toggle');
        })

        let pic4 = document.querySelector('.selects4');
        let event4 = document.querySelector('.controlsDesc4');
        pic4.addEventListener('click', ()=> {
            event4.classList.toggle('active4');
            pic4.classList.toggle('toggle');
        })
    </script>
    
</body>
</html>