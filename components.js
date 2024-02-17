class SpecialfootBar extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
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
        `
    }
}

customElements.define('special-footbar', SpecialfootBar);

class SpecialNavBar extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
        <header id="top-header">
        <div class="logo-top">
            <a href="#"><img src="./Images/Logo/comas_logo.png" alt="No Source"></a>
        </div>

        <div class="menu-bar">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About Us</a></li>
                <li><a href="">Products</a> <i class="fa-solid fa-chevron-down"></i>
                    <div class="submenu-1">
                        <ul>
                            <li class="hover-me"><a href="">Sorter</a><i class="fa-solid fa-angle-right"></i>
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

                <li><a href="./Gallery.php">Gallery</a></li>
                <li><a href="./Technology.php">Technology</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>

            </ul>
        </div>

        <div class="burger">
            <i class="fa-solid fa-bars fa-2x"></i>
        </div>

    </header>
        `
    }
}

customElements.define('special-navbar', SpecialNavBar);