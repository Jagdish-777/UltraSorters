<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        *{
            --primary-color: #00b4d8;
            --Light-grey: #f5f5f5 ;
            /* font-size: 16px; */
            font-size: 1.6vw;
        }
        body{
            margin: 0px;
            padding: 0px;
            font-size: 0.5rem;
            box-sizing: border-box;
            /* background-color: var(--Light-grey); */
            font-family: Georgia;
        }
        section{
            margin: 0px;
            padding: 0px;
            /* overflow: hidden; */
            
            width: 100%;
            z-index: -1;
            /* border: 2px solid black; */

            background-color: var(--Light-grey);
        }
        .flex{
            display: flex;
            justify-content: space-between;
            align-items: center;
            overflow: hidden;
        }
        .sub-container{
            width: 50%;
            overflow: hidden;
            height: auto;
            object-fit: cover;
            object-position: center;
        }
        .sub-container img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        .right{
            padding: 10px;
            font-size: 1rem;
        }
        .space{
            margin: 10px;
            padding: 10px;
        }
        .btn {
            align-items: center;
            appearance: none;
            background-color: #3EB2FD;
            background-image: linear-gradient(1deg, #4F58FD, #149BF3 99%);
            background-size: calc(100% + 20px) calc(100% + 20px);
            border-radius: 100px;
            border-width: 0;
            box-shadow: none;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-flex;
            font-family: CircularStd,sans-serif;
            font-size: 1rem;
            height: auto;
            justify-content: center;
            line-height: 1.5;
            padding: 6px 20px;
            position: relative;
            text-align: center;
            text-decoration: none;
            transition: background-color .2s,background-position .2s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: top;
            white-space: nowrap;
        }
        
        .btn:active,
        .btn:focus {
            outline: none;
        }
        
        .btn:hover {
            background-position: -20px -20px;
        }
        
        .btn:focus:not(:active) {
            box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
        }


        /* section 2  */
        .image{
            overflow: hidden;
            width: 100%;
            height: 100%;
        }
        .sub-1{
            width: 30%;
            overflow: hidden;
        }


        /* section 3 */
        article {
            --img-scale: 1.001;
            --title-color: black;
            --link-icon-translate: -20px;
            --link-icon-opacity: 0;
            position: relative;
            border-radius: 16px;
            box-shadow: none;
            background: #fff;
            transform-origin: center;
            transition: all 0.4s ease-in-out;
            overflow: hidden;
            }

            article a::after {
            position: absolute;
            inset-block: 0;
            inset-inline: 0;
            cursor: pointer;
            content: "";
            }

            /* basic article elements styling */
            article h2 {
            margin: 0 0 18px 0;
            font-family: "Bebas Neue", cursive;
            font-size: 1.4rem;
            letter-spacing: 0.06em;
            color: var(--title-color);
            transition: color 0.3s ease-out;
            }

            figure {
            margin: 0;
            padding: 0;
            aspect-ratio: 16 / 9;
            overflow: hidden;
            }

            article img {
            max-width: 100%;
            transform-origin: center;
            transform: scale(var(--img-scale));
            transition: transform 0.4s ease-in-out;
            }

            .article-body {
            padding: 24px;
            }

            article a {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            color: #28666e;
            }

            article a:focus {
            outline: 1px dotted #28666e;
            }

            article a .icon {
            min-width: 24px;
            width: 24px;
            height: 24px;
            margin-left: 5px;
            transform: translateX(var(--link-icon-translate));
            opacity: var(--link-icon-opacity);
            transition: all 0.3s;
            }

            /* using the has() relational pseudo selector to update our custom properties */
            article:has(:hover, :focus) {
            --img-scale: 1.1;
            --title-color: #28666e;
            --link-icon-translate: 0;
            --link-icon-opacity: 1;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
            }

            *,
            *::before,
            *::after {
            box-sizing: border-box;
            }

            body {
            margin: 0;
            padding: 48px 0;
            font-family: "Figtree", sans-serif;
            font-family: 'Arial Narrow';
            font-size: 1rem;
            line-height: 1rem;
            /* background-image: linear-gradient(45deg, #7c9885, #b5b682); */
            min-height: 100vh;
            }

            .articles {
            display: grid;
            max-width: 1200px;
            margin-inline: auto;
            padding-inline: 24px;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 24px;
            }
            .image1{
                width: 100px;
                padding: 0px 10px;
            }
            .sub{
                display: flex;
                /* justify-content: center;
                align-items: center; */
                margin: 50px;

            }
            .para1{
                font-size: 1rem;
                padding-top: 10px;
                margin: 0px;
            }
            .heading1{
                font-size: 1rem;
                padding: 0px;
                margin: 0px;

            }
        
        
        /* for mobile screens */
        @media only screen and (max-width: 600px) {
            section{
                width: 100%;
            }
            .right{
                padding: 10px;
                padding-left: 10px;
                font-size: 1.5rem;
            }
            .flex{
                flex-direction: column;
            }
            .sub-container{
                width: 90%;
                height: auto;
                
            }
            .sub-container img{
                width: 100%;
                object-fit: cover;
                object-position: center;
            }
            
            .sub-1{
                width: 100%;
                overflow: hidden;
            }
            
        }
        @media screen and (max-width: 960px) {
            article {
                container: card/inline-size;
            }
            .article-body p {
                display: none;
            }
            }

        @container card (min-width: 380px) {
        .article-wrapper {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 16px;
        }
        .article-body {
            padding-left: 0;
        }
        figure {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        figure img {
            height: 100%;
            aspect-ratio: 1;
            object-fit: cover;
        }
        }

        .sr-only:not(:focus):not(:active) {
        clip: rect(0 0 0 0); 
        clip-path: inset(50%);
        height: 1px;
        overflow: hidden;
        position: absolute;
        white-space: nowrap; 
        width: 1px;
        }
    </style>

</head>
<body>

<?php include 'Navbar.php'; ?>

    <section>
        <h1 class="Products-header">Products</h1>
    </section>

    
    <section class="flex">
        <div class="sub-container left">
            <img src="./Images/Home/home1.jpg" alt="" srcset="">
        </div>
        <div class="sub-container right">
            <h1 class="heading">
                <strong>Welcome to COMAAS</strong>
            </h1>
            <p class="paragraph">
                COMAS CO LTD. is a south Korean based company and founded in 2009. We are dedicated to supply High precision Rice sorters, Grain sorters, Peanut sorter, Tea sorter packaging machinery and scales to customers spread across the world.
            </p>
            <button class="btn">
                Explore more
            </button>
        </div>
        
    </section>

    <div class="space">   
    </div>
    
    <section class="articles">
        <article>
            <div class="article-wrapper">
            <figure>
              <img src="./Images/home/Mission.jpg" alt="" />
            </figure>
            <div class="article-body">
              <h2>Mission</h2>
              <p>
                To supply a world class High precision sorters for Food grains, Quartz, plastics, Minerals and packaging machinery, scales and Rice mill machinery to the Food processing industry in the world.        </p>
              <a href="#" class="read-more">
                Read more <span class="sr-only">about this is some title</span>
                
              </a>
            </div>
          </div>
        </article>
      
        <article>
          <div class="article-wrapper">
            <figure>
              <img src="./Images/home/vision.png" alt="" />
            </figure>
            <div class="article-body">
              <h2>Vision</h2>
              <p>
                To become a Global Leader in Grain Sorting and packaging machinery Technology.
              </p>
              <a href="#" class="read-more">
                Read more <span class="sr-only">about this is some title</span>
                
              </a>
            </div>
          </div>
        </article>

        <article>
          <div class="article-wrapper">
            <figure>
              <img src="./Images/home/person.png" alt="" />
            </figure>
            <div class="article-body">
              <h2>Persons Behind</h2>
              <p>
                Mr.Jang Kyung Un is having enriched experience in design, development and deployment of Grain sorters. He was instrumental in design of first RGB technology (Tri-chromatic or full color) sorters in the World from Korea.
              </p>
              <a href="#" class="read-more">
                Read more <span class="sr-only">about this is some title</span>
                
              </a>
            </div>
          </div>
        </article>

    </section>

    <div class="space">
    </div>

    <section class="flex">
        <div class="sub-container">
            <div class="sub-container  sub">
                <div class="image1">
                    <img src="./Images/Home/innovation.png" alt="">
                </div>
                <div class="text-link">
                    <p class="para1">Quality</p>
                    <h1 class="heading1"><a href="" target="_blank" rel="noopener noreferrer">Products</a></h1>
                </div>
            </div>
            <div class="sub-container sub">
                <div class="image1">
                    <img src="./Images/Home/innovation.png" alt="">
                </div>
                <div class="text-link">
                    <p class="para1">Advance</p>
                    <h1 class="heading1"><a href="" target="_blank" rel="noopener noreferrer">Technology</a></h1>
                </div>
            </div>
            <div class="sub-container sub">
                <div class="image1">
                    <img src="./Images/Home/innovation.png" alt="">
                </div>
                <div class="text-link">
                    <p class="para1">Customer</p>
                    <h1 class="heading1"><a href="" target="_blank" rel="noopener noreferrer">Support</a></h1>
                </div>
            </div>


        </div>
        <div class="sub-container">
            <img src="./Images/Home/DSC_0708.jpg" alt="">

        </div>
    </section>

    <!-- /////including javascript -->
    
</body>
</html>