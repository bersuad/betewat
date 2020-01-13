    <!-- Navbar -->
    <header class="header transparent">
        <div class="container">
            <div class="header-inner">
                <a href="/" class="site-logo">
                    <h1 class="site-logo-title" style="padding-left: 20px;"> Betewat</h1>
                    <h1 class="site-logo-text">Betewat Casting Agents</h1> </a>
                <div class="navigation-wr">
                    <nav class="navigation">
                        <ul>
                            <li {{{ (Request::is('/')? 'class=menu-item-has-children current-menu-paren' : '') }}}> <a href="/">Home</a>
                            </li>
                            <li {{{ (Request::is('models')? 'class=current-menu-paren' : 'menu-item-has-children') }}}>
                                <a href="/models">Models</a>
                            </li>
                            <li class="menu-item-has-children"> <a href="#">Actors</a> <span class="sub-menu-toggle"></span>
                                <ul class="sub-menu">
                                    <li><a href="19_About_Us.html">Profesionals</a></li>
                                    <li><a href="15_Contact.html">Amaturs</a></li>
                                    <li><a href="16_Contact.html">coures</a></li>
                                </ul>
                            </li>
                            <li {{{ (Request::is('about-us')? 'class=nav-active' : 'menu-item-has-children') }}}>
                                <a href="/about-us">About Us</a>
                            </li>
                            <li {{{ (Request::is('blog')? 'class=nav-active' : 'menu-item-has-children') }}}>
                                <a href="/blog">Blog</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="right-sec-nav d-flex align-items-center">
                        <a href="#" id="search-smart" class="d-flex align-items-center"> <i class="icon ion-ios-search"></i> </a>
                        <div class="smart-search-form hidden"> <a href="#" class="smart-search-close"><i class="ion ion-android-close"></i></a>
                            <form class="search-wr">
                                <input type="text" id="search" name="search" placeholder="Enter Keywords">
                                <button type="submit" class="submit" value=""><i class="icon ion-ios-search"></i></button>
                            </form>
                        </div>
                        <a href="/login" class="login d-flex align-items-center"> <i class="icon ion-ios-person-outline"></i> </a>
                        <div class="lang-menu-wr">
                            <button class="btn lang-toggle"> <span>Amharic</span> <i class="icon ion-ios-arrow-down"></i> </button>
                            <ul class="lang-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Amharic</a></li>
                                <li><a href="03_Home_rtl.html">AR</a></li>
                            </ul>
                        </div>
                    </div> <i class="fa fa-times" aria-hidden="true"></i> </div> <i class="fa fa-bars" aria-hidden="true"></i> </div>
        </div>
    </header>
    <!-- End Navbar -->