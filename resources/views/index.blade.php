@extends('includes.layout')

@section('content')
    <div class="page-wrapper">

        <!-- Cursor -->
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
        <!-- Cursor End -->

        <!-- Preloader -->
        <div class="preloader"></div>
        <!-- End Preloader -->

        <!-- Main Header -->
        @include('partials.topnav')
        @include('partials.banner')
        <!-- End Main Header -->

        <!-- Choose One -->
        <section class="choose-one">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="choose-one_content-column col-lg-8 col-md-12 col-sm-12">
                        <div class="choose-one_content-outer">
                            <div class="row clearfix">

                                <!-- Choose Block One -->
                                <div class="choose-block_one col-lg-6 col-md-6 col-sm-12">
                                    <div class="choose-block_one-inner">
                                        <div class="choose-block_one-content">
                                            <div class="choose-block_one-icon">
                                                <i class="flaticon-visualization"></i>
                                            </div>
                                            <h2 class="choose-block_one-title">1 on 1 Learning</h2>
                                            <div class="choose-block_one-text">We always conduct one-on-one lessons with the
                                                Kids
                                                to allow better interraction
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Choose Block One -->
                                <div class="choose-block_one col-lg-6 col-md-6 col-sm-12">
                                    <div class="choose-block_one-inner">
                                        <div class="choose-block_one-content">
                                            <div class="choose-block_one-icon">
                                                <i class="flaticon-trophy"></i>
                                            </div>
                                            <h2 class="choose-block_one-title">Projects</h2>
                                            <div class="choose-block_one-text">Students work on real-world projects that
                                                help them apply what they’ve learned and build a portfolio of work.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Choose Block One -->
                                <div class="choose-block_one col-lg-6 col-md-6 col-sm-12">
                                    <div class="choose-block_one-inner">
                                        <div class="choose-block_one-content">
                                            <div class="choose-block_one-icon">
                                                <i class="flaticon-mountain"></i>
                                            </div>
                                            <h2 class="choose-block_one-title">Curriculum</h2>
                                            <div class="choose-block_one-text">Our courses are designed to be engaging and
                                                interactive, making learning enjoyable for students.</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Choose Block One -->
                                <div class="choose-block_one col-lg-6 col-md-6 col-sm-12">
                                    <div class="choose-block_one-inner">
                                        <div class="choose-block_one-content">
                                            <div class="choose-block_one-icon">
                                                <i class="flaticon-smile"></i>
                                            </div>
                                            <h2 class="choose-block_one-title">Flexible Learning</h2>
                                            <div class="choose-block_one-text"> Our online platform allows students to learn
                                                at their own pace, from the comfort of home.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Title Column -->
                    <div class="choose-one_title-column col-lg-4 col-md-12 col-sm-12">
                        <div class="choose-one_title-outer">
                            <!-- Sec Title -->
                            <div class="sec-title title-anim">
                                <div class="sec-title_title">Reason to chose us</div>
                                <h2 class="sec-title_heading">FoxdaleKids <span>Explained</span></h2>
                                <div class="sec-title_text">We believe that every child has the potential to create,
                                    innovate, and succeed. That’s why our lessons are designed to spark curiosity, build
                                    confidence, and foster creativity. </div>
                            </div>
                            <div class="choose-one_button">
                                <a href="#trial" class="theme-btn btn-style-one">
                                    <span class="btn-wrap">
                                        <span class="text-one">Sign up for free trial lesson<i
                                                class="flaticon-next-1"></i></span>
                                        <span class="text-two">Sign up for free trial lesson<i
                                                class="flaticon-next-1"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Choose One -->

        <!-- About One -->
        <section class="about-one">
            <div class="outer-container">
                <div class="auto-container">
                    <div class="about-one_icon" style="background-image:url(assets/images/icons/icon-3.png)"></div>
                    <div class="row clearfix">

                        <!-- Image Column -->
                        <div class="about-one_image-column col-lg-6 col-md-12 col-sm-12">
                            <div class="about-one_image-outer">
                                <div class="about-one_experiance">
                                    <div class="about-one_experiance-inner">
                                        10+ <span>Years of <br> Expereence</span>
                                    </div>
                                </div>
                                <div class="about-one_image">
                                    <div class="about-one_color-one"></div>
                                    <div class="about-one_color-two"></div>
                                    <img src="assets/images/resource/about-11.png" alt="" />
                                </div>
                            </div>
                        </div>

                        <!-- Content Column -->
                        <div class="about-one_content-column col-lg-6 col-md-12 col-sm-12">
                            <div class="about-one_content-outer">
                                <!-- Sec Title -->
                                <div class="sec-title title-anim">
                                    <div class="sec-title_title">About Our Lessons</div>
                                    <h2 class="sec-title_heading">Learn Through Fun and Engaging <span>Lessons</span></h2>
                                    <div class="sec-title_text">
                                        At FoxdaleKids, we believe in making learning exciting and accessible for every
                                        child and teen. Our lessons are designed to spark curiosity, creativity, and
                                        confidence in kids and teens.
                                    </div>
                                </div>
                                <!-- About One List -->
                                <ul class="about-one_list">
                                    <li><i class="flaticon-checked"></i>Interactive lessons that make learning fun and
                                        engaging</li>
                                    <li><i class="flaticon-checked"></i>Experienced instructors who inspire and guide
                                        students</li>
                                    <li><i class="flaticon-checked"></i>Hands-on projects to build real-world skills</li>
                                </ul>
                                <!-- Options -->
                                <div class="about-one_options d-flex align-items-center flex-wrap">
                                    <div class="about-one_button">
                                        <a href="classes.html" class="theme-btn btn-style-one">
                                            <span class="btn-wrap">
                                                <span class="text-one">YouTube Channel <i
                                                        class="flaticon-next-1"></i></span>
                                                <span class="text-two">YouTube Channel <i
                                                        class="flaticon-next-1"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=ZNnhNBIxsuo&ab_channel=CodingwithAb"
                                        class="lightbox-video about-one_play">
                                        <span class="flaticon-play"><i class="ripple"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End About One -->

        <!-- Program Three -->
        <section class="program-three">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="sec-title">
                        <div class="sec-title_title">Our programs</div>
                        <h2 class="sec-title_heading">For <span>Kids</span> and <span>Teens</span><br></h2>
                    </div>
                    @foreach ($courses as $course)
                        <!-- Program Block One -->
                        <div class="program-block_one col-lg-4 col-md-6 col-sm-12">
                            <div class="program-block_one-inner">
                                <div class="program-block_one-image">
                                    <img src="assets/images/courses/{{ $course->icon }}" alt="{{ $course->title }}" />
                                </div>
                                <div class="program-block_one-content">
                                    <div class="program-block_one-date">{{ $course->lessons }}<span>Lessons</span></div>
                                    <h5 class="program-block_one-title"><a
                                            href="program-detail.html">{{ $course->title }}</a></h5>
                                    <div class="program-block_one-text">{{ $course->description }}</div>
                                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                                        <div class="program-block_one-experiance">{{ $course->age }} years old</div>
                                        <div class="program-block_one-experiance2">${{ $course->price }}/hour</div>
                                        <a class="program-block_one-join" href="program-detail.html">Read More <i
                                                class="flaticon-next-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Program Three -->

        <!-- Testimonial One -->
        <section class="testimonial-one">
            <div class="outer-container">
                <div class="auto-container">
                    <div class="testimonial-one_circle-one"></div>
                    <div class="testimonial-one_circle-two"></div>
                    <div class="testimonial-one_icon" style="background-image:url(assets/images/icons/icon-5.png)"></div>
                    <div class="testimonial-one_icon-two" style="background-image:url(assets/images/icons/icon-6.png)">
                    </div>
                    <!-- Sec Title -->
                    <div class="sec-title centered light">
                        <div class="sec-title_title">Kid-approved Stories</div>
                        <h2 class="sec-title_heading">Watch how the <span>lesson</span><br /> is conducted </h2>
                    </div>

                    <div class="testimonial__slider-wrap"
                        style="display: flex; justify-content: center; align-items: center; height: 100%;">
                        <iframe width="910" height="515"
                            src="https://www.youtube.com/embed/ZNnhNBIxsuo?si=0QBUx0RcLkIMNknC"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen style="display: block;">
                        </iframe>
                    </div>


                </div>
            </div>
        </section>
        <!-- End Testimonial One -->


        <!-- Team One -->
        <section class="team-one">
            <div class="outer-container">
                <div class="auto-container">
                    <!-- Sec Title -->
                    <div class="sec-title centered">
                        <div class="sec-title_title">Meet the team</div>
                        <h2 class="sec-title_heading">Meet Our Dedicated <span>Board</span> <br> at FoxdaleKids</h2>
                    </div>
                    <div class="inner-container">
                        <div class="three-items_carousel swiper-container">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Team Block One -->
                                    <div class="team-block_one">
                                        <div class="team-block_one-inner">
                                            <div class="team-block_one-image">
                                                <img src="assets/images/resource/team-1.png" alt="" />
                                                <div class="team-block_one-overlay">
                                                    <!-- Social Box -->
                                                    <div class="team-block_one-socials">
                                                        <a href="https://facebook.com/"><i
                                                                class="fa-brands fa-facebook-f"></i></a>
                                                        <a href="https://twitter.com/"><i
                                                                class="fa-brands fa-twitter"></i></a>
                                                        <a href="https://instagram.com/"><i
                                                                class="fa-brands fa-instagram"></i></a>
                                                        <a href="https://youtube.com/"><i
                                                                class="fa-brands fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-block_one-content">
                                                <h4 class="team-block_one-heading"><a href="team-detail.html">Ronald
                                                        Richards</a></h4>
                                                <div class="team-block_one-designation">Sports Teacher</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Team Block One -->
                                    <div class="team-block_one">
                                        <div class="team-block_one-inner">
                                            <div class="team-block_one-image">
                                                <img src="assets/images/resource/team-2.png" alt="" />
                                                <div class="team-block_one-overlay">
                                                    <!-- Social Box -->
                                                    <div class="team-block_one-socials">
                                                        <a href="https://facebook.com/"><i
                                                                class="fa-brands fa-facebook-f"></i></a>
                                                        <a href="https://twitter.com/"><i
                                                                class="fa-brands fa-twitter"></i></a>
                                                        <a href="https://instagram.com/"><i
                                                                class="fa-brands fa-instagram"></i></a>
                                                        <a href="https://youtube.com/"><i
                                                                class="fa-brands fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-block_one-content">
                                                <h4 class="team-block_one-heading"><a href="team-detail.html">Guey
                                                        Hawkins</a></h4>
                                                <div class="team-block_one-designation">PT Teacher</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <!-- Team Block One -->
                                    <div class="team-block_one">
                                        <div class="team-block_one-inner">
                                            <div class="team-block_one-image">
                                                <img src="assets/images/resource/team-3.png" alt="" />
                                                <div class="team-block_one-overlay">
                                                    <!-- Social Box -->
                                                    <div class="team-block_one-socials">
                                                        <a href="https://facebook.com/"><i
                                                                class="fa-brands fa-facebook-f"></i></a>
                                                        <a href="https://twitter.com/"><i
                                                                class="fa-brands fa-twitter"></i></a>
                                                        <a href="https://instagram.com/"><i
                                                                class="fa-brands fa-instagram"></i></a>
                                                        <a href="https://youtube.com/"><i
                                                                class="fa-brands fa-youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-block_one-content">
                                                <h4 class="team-block_one-heading"><a href="team-detail.html">Courtney
                                                        Henry</a></h4>
                                                <div class="team-block_one-designation">Sports Trainer</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="team-one_arrows">
                                <div class="three-items_carousel-prev fas fa-angle-left fa-fw"></div>
                                <div class="three-items_carousel-next fas fa-angle-right fa-fw"></div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Team One -->

        <!-- Registration One -->
        <section id="trial" class="registration-one">
            <div class="registration-one_pattern" style="background-image:url(assets/images/background/pattern-1.png)">
            </div>
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="registration-one_title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="registration-one_title-outer">
                            <!-- Sec Title -->
                            <div class="sec-title title-anim">
                                <div class="sec-title_title">Sign Up Now!</div>
                                <h2 class="sec-title_heading">Free Trial Lesson <span>at FoxdaleKids</span>
                                    Today!</h2>
                                <div class="sec-title_text">Experience the excitement of learning programming at
                                    FoxdaleKids! Sign up for a free trial lesson today and start your child’s coding
                                    journey.</div>
                            </div>

                            <ul class="registration-one_list">
                                <li>
                                    <i class="icon flaticon-call"></i>
                                    Call Us Now <br>
                                    <a href="#">302 555-0107</a>
                                </li>
                                <li>
                                    <i class="icon flaticon-arroba"></i>
                                    Email Us Now <br>
                                    <a href="mailto:foxdaleinstitute@gmail.com">foxdaleinstitute@gmail.com</a>
                                </li>
                                <li>
                                    <i class="icon flaticon-maps-and-flags"></i>
                                    Our Location <br>
                                    <a href="#">

                                        Plot 52, Foxdale Residential Estate</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="registration-one_form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="registration-one_form-outer">
                            <h3 class="registration-one_title">Free Trial Lesson Registration</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Default Form -->
                            <div class="default-form">
                                <form method="post" action="{{ route('trial-lesson.store') }}">
                                    @csrf <!-- CSRF Token for security -->

                                    <div class="row clearfix">
                                        <!-- Child's Full Name -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Child's Full Name</label>
                                            <input type="text" name="child_full_name"
                                                placeholder="Enter your child's full name" required>
                                        </div>

                                        <!-- Guardian's Name -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Guardian's Name</label>
                                            <input type="text" name="guardian_name"
                                                placeholder="Enter guardian's name" required>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" placeholder="Enter your email address"
                                                required>
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" placeholder="Enter your phone number"
                                                required>
                                        </div>

                                        <!-- Child's Age -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Child's Age</label>
                                            <select name="child_age" class="custom-select-box" required>
                                                <option value="6-8">6 - 8</option>
                                                <option value="9-11">9 - 11</option>
                                                <option value="12-14">12 - 14</option>
                                                <option value="15-17">15 - 17</option>
                                            </select>
                                        </div>

                                        <!-- Course -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Course</label>
                                            <select name="course_id" class="custom-select-box" required>
                                                <option disabled selected>Select Course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<label>Country</label>
											@include('partials.countries')
										</div>

                                        <!-- Prior Programming Experience -->
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Any prior programming experience?</label>
                                            <select name="prior_experience" class="custom-select-box" required>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn btn-style-two">
                                                <span class="btn-wrap">
                                                    <span class="text-two">Submit for Free Trial <i
                                                            class="flaticon-next-1"></i></span>
                                                    <span class="text-one">Submit for Free Trial <i
                                                            class="flaticon-next-1"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Default Form -->
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Registration One -->


        <!-- Blog One -->
        <section class="blog-one">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <div class="sec-title_title">Read our blog</div>
                    <h2 class="sec-title_heading">Read Our Daily Kids <br> Bootcamp <span>Blog</span></h2>
                </div>
                <div class="row clearfix">

                    <!-- News Block One -->
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="news-block_one-image">
                                <a href="blog-detail.html"><img src="assets/images/resource/blog-1.jpg"
                                        alt= "" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <ul class="news-block_one-meta">
                                    <li>By Admin</li>
                                    <li>6 min read</li>
                                </ul>
                                <h4 class="news-block_one-title"><a href="blog-detail.html">Top 5 Benefits Bootcamp
                                        Building Confidence and Character</a></h4>
                                <a class="news-block_one-more" href="blog-detail.html">Read More <i
                                        class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block One -->
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="news-block_one-image">
                                <a href="blog-detail.html"><img src="assets/images/resource/blog-2.jpg"
                                        alt= "" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <ul class="news-block_one-meta">
                                    <li>By Admin</li>
                                    <li>6 min read</li>
                                </ul>
                                <h4 class="news-block_one-title"><a href="blog-detail.html">From Drills to Thrills A Day
                                        in the Life of a Kids Bootcamp</a></h4>
                                <a class="news-block_one-more" href="blog-detail.html">Read More <i
                                        class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- News Block One -->
                    <div class="news-block_one col-lg-4 col-md-6 col-sm-12">
                        <div class="news-block_one-inner wow fadeInRight" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="news-block_one-image">
                                <a href="blog-detail.html"><img src="assets/images/resource/blog-3.jpg"
                                        alt= "" /></a>
                            </div>
                            <div class="news-block_one-content">
                                <ul class="news-block_one-meta">
                                    <li>By Admin</li>
                                    <li>6 min read</li>
                                </ul>
                                <h4 class="news-block_one-title"><a href="blog-detail.html">How Kids Bootcamp Prepares
                                        Young Leaders Success</a></h4>
                                <a class="news-block_one-more" href="blog-detail.html">Read More <i
                                        class="flaticon-next-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Blog One -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="color-one"></div>
            <div class="color-two"></div>
            <div class="main-footer_icon" style="background-image: url(assets/images/icons/icon-7.png)"></div>
            <div class="main-footer_pattern" style="background-image: url(assets/images/background/footer-pattern.png)">
            </div>

            <!-- Upper Box -->
            <div class="footer-upper_box">
                <div class="auto-container">
                    <!-- Newsletter Box -->
                    <div class="newsletter-one">
                        <div class="newsletter-one_pattern"
                            style="background-image: url(assets/images/background/pattern-2.png)"></div>
                        <div class="newsletter-one_pattern-two"
                            style="background-image: url(assets/images/background/pattern-3.png)"></div>
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <div class="newsletter-one_title">NEWSLETTER</div>
                                <h2 class="newsletter-one_heading">Sign up to Our Newsletter for Latest Update</h2>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-12 col-sm-12">
                                <div class="newsletter-box">
                                    <form method="post" action="https://demo.themeim.com/html/kidscamp/contact.html">
                                        <div class="form-group">
                                            <span class="icon fa-regular fa-envelope fa-fw"></span>
                                            <input type="email" name="search-field" value=""
                                                placeholder="Enter Email Here" required>
                                            <button type="submit" class="template-btn btn-style-one">
                                                <span class="btn-wrap">
                                                    <span class="text-one">Subscribe Now <i
                                                            class="flaticon-next-1"></i></span>
                                                    <span class="text-two">Subscribe Now <i
                                                            class="flaticon-next-1"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Upper Box -->

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget">
                                        <div class="footer-logo"><a href="index-2.html"><img
                                                    src="assets/images/footer-logo.svg" alt=""
                                                    title=""></a></div>
                                        <div class="footer-text">Lorem ipsum dolor sit amet consectetur adipiscing elit Ut
                                            et massa mi. Aliquam in hendrerit urna.</div>
                                        <!-- Social Box -->
                                        <div class="footer_socials">
                                            <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                                            <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                                            <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5 class="footer-title">Programs</h5>
                                        <ul class="footer-list">
                                            <li><a href="#">Fun & Fitness</a></li>
                                            <li><a href="#">Sports Spectacular</a></li>
                                            <li><a href="#">Nature's Gymnasts</a></li>
                                            <li><a href="#">Warrior Training</a></li>
                                            <li><a href="#">Adventure Explorers</a></li>
                                            <li><a href="#">Champions Camp</a></li>
                                            <li><a href="#">Team Building</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Big Column -->
                        <div class="big-column col-lg-6 col-md-12 col-sm-12">
                            <div class="row clearfix">

                                <!-- Footer Column -->
                                <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget links-widget">
                                        <h5 class="footer-title">Resources</h5>
                                        <ul class="footer-list">
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">FaQs</a></li>
                                            <li><a href="#">Help Center</a></li>
                                            <li><a href="#">Case Studies</a></li>
                                            <li><a href="#">Whitepapers</a></li>
                                            <li><a href="#">services</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Column -->
                                <div class="footer_column col-lg-6 col-md-6 col-sm-12">
                                    <div class="footer-widget instagram-widget">
                                        <h5 class="footer-title">Gallery</h5>
                                        <div class="images-outer clearfix">
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/1.jpg"><img
                                                        src="assets/images/gallery/instagram-1.jpg" alt=""></a>
                                            </figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/2.jpg"><img
                                                        src="assets/images/gallery/instagram-2.jpg" alt=""></a>
                                            </figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/3.jpg"><img
                                                        src="assets/images/gallery/instagram-3.jpg" alt=""></a>
                                            </figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/4.jpg"><img
                                                        src="assets/images/gallery/instagram-4.jpg" alt=""></a>
                                            </figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/5.jpg"><img
                                                        src="assets/images/gallery/instagram-5.jpg" alt=""></a>
                                            </figure>
                                            <!--Image Box-->
                                            <figure class="image-box"><a class="lightbox-image"
                                                    href="assets/images/gallery/6.jpg"><img
                                                        src="assets/images/gallery/instagram-6.jpg" alt=""></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Widgets Section -->

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="copyright">Copyright &copy; 2024 Kidscamp All Rights Reserved</div>
                        </div>
                        <!-- Column -->
                        <div class="column col-lg-6 col-md-12 col-sm-12">
                            <div class="designs_by">Design with <i class="fa-solid fa-heart fa-fw"></i> by Themeim</div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- End Main Footer -->

        <!-- Search Popup -->
        <div class="search-popup">
            <div class="color-layer"></div>
            <button class="close-search"><span class="flaticon-close"></span></button>
            <form method="post" action="https://demo.themeim.com/html/kidscamp/blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                    <button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
                </div>
            </form>
        </div>
        <!-- End Search Popup -->

    </div>
@endsection
