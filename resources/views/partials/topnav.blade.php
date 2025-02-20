<header class="main-header header-style-one">

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <div class="nav-outer d-flex align-items-center flex-wrap">
                        <!-- Logo Box -->
                        <div class="logo-box">
                            <div class="logo"><a href=""><img src="assets/images/logo.svg" alt=""
                                        title="kidscamp"></a></div>
                        </div>
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>

                                    <li class="dropdown"><a href="#">Courses</a>
                                        <ul>
                                            @foreach ($courses as $course)
                                                <li><a href="program.html">{{ $course->title }}</a></li>
                                            @endforeach


                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Demos</a>
                                        <ul>
                                            <li><a href="index-2.html">Home page 01</a></li>
                                            <li><a href="index-3.html">Home page 02</a></li>
                                            <li><a href="index-4.html">Home page 03</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header 01</a></li>
                                                    <li><a href="index-3.html">Header 02</a></li>
                                                    <li><a href="index-4.html">Header 03</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About us</a></li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="gallery.html">Galery</a></li>
                                            <li><a href="reset-password.html">Forgot password</a></li>
                                            <li><a href="testimonial.html">Testimonial</a></li>
                                            <li class="dropdown"><a href="#">Team</a>
                                                <ul>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-detail.html">Team detail</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                            <li><a href="blog-classic.html">Blog classic</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                            <li><a href="not-found.html">Not Found</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Main Menu End-->
                    <div class="outer-box d-flex align-items-center flex-wrap">

                        <!-- Button Box -->
                        <div class="header-phone_box">
                            <a href="tel:+302-555-0107"><i class="flaticon-call"></i> 302 555-0107</a>
                        </div>

                        <!-- Button Box -->
                        <div class="main-header_button">
                            <span class="about-widget theme-btn btn-style-one">
                                <span class=" btn-wrap">
                                    <span class="text-one">Login Now</span>
                                    <span class="text-two">Login Now</span>
                                </span>
                            </span>
                        </div>

                       
                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-close"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/mobile-logo.svg" alt=""
                        title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>
