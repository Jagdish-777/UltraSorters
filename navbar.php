<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

            /* colors  */
            --blue-color: #2596be;
            --white: #fff;
            --light-grey: #f5f5f5;
            --footer-dark-bg: #353535;
        }

        body {
            font-family: 'poppins';
            font-size: 16px;
            min-height: 100vh;
        }

        #top-header {
            height: 100px;
            background-color: var(--light-grey);
            /* border: 2px solid black; */
            box-shadow: 5px 5px 5px var(--footer-dark-bg);

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-top a img {
            width: 300px;
        }

        .menu-bar {
            /* background-color: var(--blue-color); */
            margin-right: 20px;
        }

        .menu-bar ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;

            list-style-type: none;
        }

        .menu-bar ul li {
            text-decoration: none;
            font-size: 1rem;
            padding: 10px;
            text-align: center;

            transition: all 0.3s ease-in-out;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: black;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 10px;
        }

        .menu-bar ul li a:hover {
            color: var(--blue-color);
        }

        .submenu-1 {
            display: none;
            transition: all 1s ease-in-out;
        }

        .menu-bar ul li:hover .submenu-1 {
            display: block;
            background-color: lightgray;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;

            position: absolute;
            margin-top: 10px;
            margin-left: -50px;
            /* width: 250px; */
        }

        .menu-bar ul li:hover .submenu-1 ul {
            display: block;
            margin: 5px;
        }

        /* sub menu css  */
        .submenu-2 {
            display: none;
        }

        .hover-me:hover .submenu-2 {
            display: block;
            background-color: lightgray;

            position: absolute;
            top: 0px;
            left: 0px;
            border: 1px solid black;
            /* border-left: 1px solid black; */
            box-shadow: 5px 5px 5px grey;
            border-radius: 10px;
            margin-left: 200px;
            width: 230px;
            /* padding: 5px; */
        }

        .submenu-3 {
            display: none;
        }

        .hover-me-1:hover .submenu-3 {
            display: block;
            background-color: lightgray;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 5px 5px 5px grey;

            position: absolute;
            /* top: 10px; */
            margin-top: -15px;
            margin-left: 200px;

            width: 180px;
            /* padding: 5px; */
        }

        .burger {
            display: none;
        }

        @media (max-width:1100px) {
            .burger {
                display: block;
                margin-right: 10px;
            }

            .menu-bar {
                display: none;
            }

            .logo-top a img {
                width: 50%;
            }

            .menu-bar ul{
                flex-direction: column;
            }
            .nav-active {
                display: block;
                position: absolute;
                top: 100px;
                background-color: var(--light-grey);
                width: 100%;
            }
            .menu-bar ul li:hover .submenu-1{
                display: block;
                position: relative;
                top: 0;
                left: 0;
                margin-top: 0;
                margin-left: 0;
                align-items: center;
            }
            .hover-me:hover .submenu-2 {
                display: block;
                position: relative;
                top: 0;
                left: 0;
                margin-left: 0;
                margin-top: 0;
            }
            .hover-me-1:hover .submenu-3{
                display: block;
                position: relative;
                top: 0;
                left: 0;
                margin-left: 0;
                margin-top: 0;
                
            }
        }
    </style> -->
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header id="top-header">
        <div class="logo-top">
            <a href="#"><img src="./Images/Logo/comas_logo.png" alt="No Source"></a>
        </div>

        <div class="menu-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Products</a> <i class="fa-solid fa-chevron-down"></i>
                    <div class="submenu-1">
                        <ul>
                            <li class="hover-me"><a href="#">Sorter</a><i class="fa-solid fa-angle-right"></i>
                                <div class="submenu-2">
                                    <ul>
                                        <li class="hover-me-1"><a href="#">Rice Sorter</a><i
                                                class="fa-solid fa-angle-right"></i>
                                            <div class="submenu-3">
                                                <ul>
                                                    <li class="hover-me"><a href="#">Rgb Sorter</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="hover-me-1"><a href="#">Multi Grain Sorter</a><i
                                                class="fa-solid fa-angle-right"></i>
                                            <div class="submenu-3">
                                                <ul>
                                                    <li class="hover-me"><a href="#">Ultima Sorter</a></li>
                                                    <li class="hover-me"><a href="#">Ultra Sorter</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Dry Fruit Sorter</a></li>
                                        <li class="hover-me-1"><a href="#">Quartz Sorter</a><i
                                                class="fa-solid fa-angle-right"></i>
                                            <div class="submenu-3">
                                                <ul>
                                                    <li class="hover-me"><a href="#">Falcon Sorter</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="hover-me-1"><a href="#">Mineral Sorter</a><i
                                                class="fa-solid fa-angle-right"></i>
                                            <div class="submenu-3">
                                                <ul>
                                                    <li class="hover-me"><a href="#">Falcon Sorter</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="hover-me-1"><a href="#">Plastic Sorter</a><i
                                                class="fa-solid fa-angle-right"></i>
                                            <div class="submenu-3">
                                                <ul>
                                                    <li class="hover-me"><a href="#">Falcon Sorter</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Packing Machinery</a></li>
                            <li><a href="#">Scales</a></li>
                        </ul>
                    </div>

                </li>

                <li><a href="#">Gallery</a></li>
                <li><a href="#">Technology</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
        </div>

        <div class="burger">
            <i class="fa-solid fa-bars fa-2x"></i>
        </div>

    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let nav = document.querySelector('.menu-bar');
            let burger = document.querySelector('.burger');

            burger.addEventListener('click', () => {
                nav.classList.toggle('nav-active');
                // burger.classList.toggle('toggle');
            });
        });
    </script>
</body>

</html>