class SpecialNavBar extends HTMLElement{
    connectedCallback(){
        this.innerHTML = `
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
        `
    }
}

customElements.define('special-navbar', SpecialNavBar);