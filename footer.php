<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }
        body{
            font-family: "poppins", sans-serif;
            font-size: 16px;

            min-height: 100vh;
        }
        .flex{
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        #footer{
            width: 100%;
            height: auto;
            
            justify-content: space-evenly;
            align-items: center;
            align-items: baseline;

            /* background: rgb(70,70,70);
            background: linear-gradient(0deg, rgba(70,70,70,1) 0%, rgba(98,98,98,1) 100%); */

            background-color: #353535 !important;
        }
        .footer-sub{
            width: 23%;
            padding: 5px;
            /* border: 1px solid black; */
            border-radius: 10px;
            /* background: rgb(79,79,79);
            background: linear-gradient(0deg, rgba(79,79,79,1) 0%, rgba(107,107,107,1) 0%); */

            transition: all 0.4s ease;
        }
        .content-footer i{
            margin: 10px;
            margin-left: 0px;
            font-size: 1.2rem
        }
        .footer-socials i{
            border: 1px solid white;
            border-radius: 5px;
            padding: 5px;
            font-size: 1.4rem;

            transition: all 0.4s ease;
        }
        .footer-socials i:hover{
            color: #00b4d8 !important;
            background-color: white;
        }
        .footer-heading h1{
            padding: 10px 0px;

            font-family: "poppins", sans-serif;
            color: #ffffff;
            font-size: 1.6rem;
            font-weight: 600;
        }
        .content-footer{
            font-family: "poppins", sans-serif;
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 500;

        }
        .footer-2-link i{
            font-size: 0.8rem;
        }
        .footer-2-link a{
            color: #ffffff;
            text-decoration: none;

            transition: all 0.4s ease-in-out;
        }
        .footer-2-link a:hover{
            color: #00b4d8 !important;
            letter-spacing: 2px;
        }
        .footer-section-2{
            justify-content: flex-end;
            align-items: flex-start;
            flex-direction: column;
        }
        @media (max-width: 900.33333px){
            .footer-sub{
                width: 90%;
                margin: 0px auto;
            }
        }


        #bottom-footer-section{
            background-color: #353535 !important;
            border-top: 0.5px solid white;
            padding: 10px;

            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        #bottom-footer-section p{
            color: white;
            display: inline-block;
            margin-left: 20px;
            padding: 10px;

            font-size: 0.8rem;
        }
        #bottom-footer-section p a{
            color: white;
            /* text-decoration: none; */
        }
    </style>
</head>
<body>

<footer id="footer">

    <div class="footer-section-1 footer-sub">
        <div class="footer-heading">
            <h1>Address</h1>
        </div>
        <div class="content-footer">
            <div class="footer-address">
                <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>427, Habin-RO,
                Habin-myeon, Dalseong-gun
                Daegu, Code: 42902
                Republic of Korea
            </div>
            <div class="footer-phone">
                <i class="fa-solid fa-phone" style="color: #ffffff;"></i>0082-53-592-8257
            </div>
            <div class="footer-phone">
                <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>ceo@i-comas.com
            </div>
            <div class="footer-socials">
                <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                <i class="fa-brands fa-facebook" style="color: #ffffff;"></i>
                <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>
                <i class="fa-brands fa-google" style="color: #ffffff;"></i>
            </div>
        </div>
    </div>

    <div class="footer-section-2 footer-sub flex">
        <div class="footer-heading">
            <h1>Products</h1>
        </div>
        <div class="content-footer">
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">RGB Sorter</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Ultra Sorter</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Ultima Sorter</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Falcon Sorter</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Packing Machinery</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Scales</a>
            </div>
            
        </div>

    </div>

    <div class="footer-section-3 footer-sub">
        <div class="footer-heading">
            <h1>About</h1>
        </div>
        <div class="content-footer">
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Team Experts</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Persons Behind</a>
            </div>
        </div>

    </div>

    <div class="footer-section-4 footer-sub">
        <div class="footer-heading">
            <h1>Contact Us</h1>
        </div>
        <div class="content-footer">
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Contact</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">Career</a>
            </div>
            <div class="footer-2-link">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i><a href="#">SiteMap</a>
            </div>
        </div>

    </div>

</footer>
<section id="bottom-footer-section">
    <p>&#169<a href="#">COMAAS CO LTD</a> All Rights Reserved </p>
    <p class="bootom-footer-left">
        Designed By - <a href="#">Saanvika Software Solution</a>
    </p>
</section>




<script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
</body>
</html>