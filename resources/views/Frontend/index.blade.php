@extends('layouts.frontend')

@section('content')
     
@include('layouts.inc.navbar')

<!-- Slider Start -->
<div class="slider-section section bg-color-2">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <!-- Slider Start -->
                <div class="slider-content">
                    <h5 class="sub-title">developed by top teachers</h5>
                    <h2 class="title">Experience a learning platform that take you next level</h2>
                    <p>World-class training and development programs developed by top teachers</p>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
                </div>
                <!-- Slider End -->
            </div>

            <div class="col-md-6 col-sm-8">
                <!-- Slider Images Start -->
                <div class="slider-images-02">

                    <div class="image-shape-01 parallaxed">
                        <img src="Frontend/images/shape/shape-11.svg" alt="Shape">
                    </div>
                    <div class="image-shape-02 parallaxed"></div>
                    <div class="image-shape-03 parallaxed"></div>

                    <div class="image">
                        <img src="Frontend/images/hero-2.png" alt="Hero">
                    </div>
                </div>
                <!-- Slider Images End -->
            </div>
        </div>
    </div>
</div>
<!-- Slider End -->

<!-- Feature Start -->
<div class="section counter-section feature-section">
    <div class="container">
        <!-- Feature Wrapper Start -->
        <div class="feature-wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="Frontend/images/icon-8.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Over 155,000</h4>
                            <p>Video courses on career skills</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="Frontend/images/icon-9.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Choose from</h4>
                            <p>Top industry instructors </p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="Frontend/images/icon-10.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Lifetime access</h4>
                            <p>On mobile and desktop</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
            </div>
        </div>
        <!-- Feature Wrapper End -->
    </div>
</div>
<!-- Feature End -->

<!-- Feature Category Start -->
<div class="section section-padding feature-category-section">
    <div class="container">

        <!-- Feature Category Header Start -->
        <div class="feature-category-header">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2 class="title">Featured topics by category</h2>
            </div>
            <!-- Section Title End -->

            <!-- Feature Category Start -->
            <div class="feature-category-btn">
                <a href="#" class="btn btn-outline-primary">Explore More</a>
            </div>
            <!-- Feature Category End -->
        </div>
        <!-- Feature Category Header End -->

        <!-- Feature Category Body Start -->
        <div class="feature-category-body">
            <div class="row">
                @foreach ($feature_category as $f_cate )
                    
                
                    
                
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="{{ url('view-categery/'.$f_cate->name) }}">
                            <img class="item-icon" src="{{ asset('assets/upload/category/'. $f_cate->image) }}" alt="asdfghjk">
                            <span class="title"> {{ $f_cate->name }}</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>


                    {{-- <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-12.png" alt="">
                            <span class="title">Chemistry</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-13.png" alt="">
                            <span class="title">Technology</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-14.png" alt="">
                            <span class="title">Medical</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-15.png" alt="">
                            <span class="title">Mathmetics</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-16.png" alt="">
                            <span class="title">Food  & Recipe</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-17.png" alt="">
                            <span class="title">Language</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="Frontend/images/icon-18.png" alt="">
                            <span class="title">Art & Block</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                    </div> --}}
                @endforeach
            </div>
        </div>
        <!-- Feature Category Body End -->

    </div>
</div>
<!-- Feature Category End -->

<!-- Courses Start -->
<div class="section section-padding">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title"><span>Top Rated</span> Learning Tutorials</h2>
        </div>
        <!-- Section Title End -->

        <!-- Courses Wrapper Start -->
        <div class="courses-wrapper">

            <div class="row">
                @foreach ($popular_teacher as $teach)
                    <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="{{ url('course-details/'.$teach->id) }}"><img src="{{ asset('assets/upload/Teacher/'.$teach->image) }}" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">{{ $teach->subcategory->name }}</a>
                                <span class="price">
                                <span class="sale-price"> ${{ $teach->selling_price }}</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="3">{{ $teach->description }}</a></h3>
                            <p class="author-name">{{ $teach->name }}</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                    </div>
                @endforeach





                {{-- <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="Frontend/images/courses/courses-2.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="Frontend/images/courses/courses-3.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Courses Start -->
                    <div class="single-course">
                        <div class="courses-image">
                            <a href="course-details.html"><img src="Frontend/images/courses/courses-4.jpg" alt="Courses"></a>
                        </div>
                        <div class="courses-content">
                            <div class="top-meta">
                                <a class="tag" href="#">Beginner</a>
                                <span class="price">
                                <span class="sale-price">Free</span>
                                </span>
                            </div>
                            <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                            <p class="author-name">Andrew paker</p>
                        </div>
                        <div class="courses-meta">
                            <p class="student"><i class="fa fa-user-o"></i> Student</p>
                            <div class="rating">
                                <div class="rating-star">
                                    <div class="rating-active" style="width: 60%;"></div>
                                </div>
                                <span>(4.5)</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Courses End -->
                </div> --}}
            </div>

            <div class="courses-more text-center">
                <a href="#" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
            </div>

        </div>
        <!-- Courses Wrapper End -->
    </div>
</div>
<!-- Courses End -->

<!-- Call To Action Start -->
<div class="section bg-color-2 call-to-action-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-content-02 section-padding">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title">Thousands of courses <br> authored by industry experts </h2>
                    </div>
                    <!-- Section Title End -->
                    <ul>
                        <li>Get access to 4,000+ of our top courses </li>
                        <li>Popular topics to learn now </li>
                        <li>Find the right instructor for you </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Get Started Today</a>
                </div>
                <!-- Call To Action Content End -->
            </div>
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-images-02 text-center text-lg-end d-none d-md-block">

                    <div class="call-to-images-shape-01"></div>

                    <img class="call-to-images-shape-02 parallaxed" src="Frontend/images/shape/shape-12.svg" alt="">

                    <div class="image">
                        <div class="call-to-action-shape-01"></div>
                        <img src="Frontend/images/cta-1.png" alt="Call To Action">
                    </div>
                </div>
                <!-- Call To Action Content End -->
            </div>
        </div>
    </div>

    <div class="call-to-action-shape-01">
        <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0, 0, 400,370.35681610247025">
            <g id="svgg">
                <path class="shape-path" id="path0" d="M249.954 0.635 C 240.575 3.389,233.929 9.074,230.209 17.528 C 221.671 36.930,201.468 54.980,166.331 74.599 C 150.321 83.539,133.886 91.550,97.896 107.960 C 60.753 124.895,46.948 131.724,33.211 139.957 C 2.314 158.477,-5.531 173.697,7.558 189.731 C 8.181 190.495,11.285 193.759,14.456 196.984 C 38.336 221.280,50.229 238.507,53.680 253.797 C 54.907 259.234,55.006 266.165,53.979 274.748 C 51.984 291.423,54.149 301.599,62.854 316.468 C 72.588 333.095,83.951 343.673,97.896 349.088 C 107.191 352.698,115.551 354.028,136.688 355.260 C 160.933 356.672,172.530 358.640,186.647 363.738 C 199.456 368.363,216.007 367.283,240.657 360.214 C 277.351 349.690,331.341 324.707,386.917 292.536 C 397.502 286.408,398.745 285.641,398.645 285.304 C 398.595 285.134,396.907 276.638,394.895 266.423 C 371.016 145.183,358.578 74.176,357.552 53.239 C 357.423 50.608,357.277 49.322,356.993 48.307 C 352.156 31.013,314.465 7.243,281.287 0.562 L 278.494 0.000 265.276 0.009 L 252.059 0.017 249.954 0.635 " stroke="none" fill-rule="evenodd"></path>
            </g>
        </svg>
    </div>

    <div class="call-to-action-shape-02 animate-05"></div>

    <div class="call-to-action-shape-03 "></div>
</div>
<!-- Call To Action End -->

<!-- Free Courses Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title">Free Certificaation Lessons</h2>
        </div>
        <!-- Section Title End -->

        <!-- Free Courses Start -->
        <div class="courses-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="Frontend/images/free-course-1.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="Frontend/images/free-course-2.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="Frontend/images/free-course-3.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Single Free Course Start -->
                    <div class="single-free-course">
                        <div class="course-images">
                            <img src="Frontend/images/free-course-4.jpg" alt="Course">
                        </div>
                        <div class="course-content">
                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"><i class="fa fa-play"></i></a>
                            <h4 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h4>
                        </div>
                    </div>
                    <!-- Single Free Course End -->
                </div>
            </div>
        </div>
        <!-- Free Courses End -->
    </div>
</div>
<!-- Free Courses End -->

<!-- Testimonial End -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title">Free Certificaation Lessons</h2>
        </div>
        <!-- Section Title End -->
    </div>

    <div class="testimonial-wrapper-02 testimonial-active-02">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="Frontend/images/author-4.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="Frontend/images/author-5.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="Frontend/images/author-1.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="Frontend/images/author-2.jpg" alt="Author">
                        </div>
                        <div class="testimonial-text">
                            <p>World-class training and development programs developed by top teachers Connect Fellow to the tools you love.</p>
                        </div>
                        <div class="testimonial-meta">
                            <div class="testimonial-quote">
                                <i class="flaticon-left-quotes-sign"></i>
                            </div>
                            <div class="meta-content">
                                <h5 class="name">Martney Holder</h5>
                                <p class="designation">IT Specailist</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Brand Logo End -->
<div class="section">
    <div class="container">
        <!-- Brand Wrapper End -->
        <div class="brand-wrapper section-padding text-center border-0">
            <h3 class="brand-title">We collaborate with <span>200+</span> Leading universities & companies </h3>

            <div class="brand-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="Frontend/images/brand/brand-1.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="Frontend/images/brand/brand-2.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="Frontend/images/brand/brand-3.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="Frontend/images/brand/brand-4.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                        <!-- Single Brand Start -->
                        <div class="swiper-slide single-brand">
                            <img src="Frontend/images/brand/brand-5.png" alt="Brand">
                        </div>
                        <!-- Single Brand End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand Wrapper End -->
    </div>
</div>
<!-- Brand Logo End -->

<!-- Newsletter Start -->
<div class="section newsletter-section">

    <div class="newsletter-shape-01">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
            <g>
                <path d="M487.14,7.101c-0.016-0.302-0.051-0.602-0.103-0.899c-0.011-0.063-0.026-0.125-0.038-0.188c-0.053-0.264-0.12-0.525-0.202-0.784c-0.014-0.045-0.026-0.09-0.041-0.135c-0.099-0.293-0.217-0.58-0.353-0.861 c-0.023-0.047-0.049-0.093-0.073-0.14c-0.125-0.245-0.264-0.484-0.417-0.717c-0.028-0.043-0.054-0.086-0.083-0.128 c-0.176-0.255-0.368-0.501-0.579-0.737c-0.04-0.045-0.084-0.087-0.125-0.131c-0.099-0.105-0.194-0.213-0.299-0.314 c-0.091-0.087-0.189-0.164-0.283-0.245c-0.033-0.028-0.059-0.061-0.093-0.089c-0.019-0.016-0.041-0.027-0.06-0.043 c-0.247-0.202-0.503-0.387-0.768-0.553c-0.039-0.024-0.08-0.045-0.12-0.069c-0.238-0.143-0.482-0.27-0.732-0.384 c-0.059-0.027-0.116-0.055-0.176-0.081c-0.282-0.12-0.569-0.225-0.862-0.309c-0.051-0.015-0.102-0.025-0.154-0.039 c-0.251-0.066-0.504-0.119-0.759-0.159c-0.075-0.012-0.149-0.025-0.225-0.035c-0.293-0.037-0.587-0.059-0.882-0.061 c-0.065,0-0.13,0.004-0.196,0.005c-0.251,0.005-0.502,0.022-0.752,0.052c-0.074,0.009-0.147,0.015-0.22,0.026 c-0.3,0.044-0.597,0.106-0.891,0.188c-0.052,0.014-0.103,0.032-0.155,0.048c-0.27,0.081-0.536,0.178-0.798,0.289 c-0.031,0.013-0.064,0.021-0.095,0.035L152.773,144.572c-3.785,1.683-5.49,6.114-3.808,9.9c1.682,3.784,6.114,5.489,9.899,3.808 L438.61,33.949L180.083,263.751L50.819,206.3l78.097-34.71c3.785-1.683,5.49-6.114,3.808-9.899 c-1.682-3.784-6.115-5.489-9.899-3.808l-93.518,41.563c-2.708,1.204-4.454,3.89-4.454,6.854s1.746,5.649,4.454,6.854 l145.267,64.563l16.013,120.093c0.005,0.034,0.017,0.065,0.022,0.1c0.053,0.362,0.128,0.722,0.234,1.075 c0.011,0.036,0.025,0.071,0.036,0.106c0.106,0.336,0.237,0.665,0.392,0.985c0.015,0.031,0.027,0.064,0.043,0.095 c0.158,0.316,0.344,0.621,0.55,0.918c0.04,0.058,0.081,0.114,0.123,0.17c0.21,0.285,0.434,0.562,0.689,0.821 c0.257,0.261,0.533,0.491,0.817,0.707c0.056,0.043,0.112,0.086,0.17,0.126c0.295,0.211,0.599,0.402,0.914,0.566 c0.026,0.013,0.053,0.024,0.079,0.037c0.319,0.16,0.647,0.295,0.981,0.407c0.041,0.014,0.08,0.03,0.122,0.043 c0.351,0.111,0.708,0.191,1.069,0.25c0.032,0.005,0.062,0.017,0.095,0.022c0.039,0.006,0.076,0.003,0.115,0.009 c0.327,0.043,0.655,0.073,0.984,0.073c0.001,0,0.001,0,0.002,0h0.001c0.002,0,0.004-0.001,0.005-0.001 c0.319,0,0.637-0.028,0.953-0.069c0.076-0.01,0.152-0.02,0.227-0.032c0.629-0.101,1.247-0.282,1.839-0.544 c0.058-0.026,0.115-0.052,0.173-0.079c0.279-0.132,0.553-0.277,0.817-0.445c0.01-0.007,0.021-0.012,0.032-0.019 c0.265-0.17,0.52-0.363,0.766-0.571c0.064-0.054,0.125-0.111,0.188-0.167c0.086-0.077,0.175-0.148,0.258-0.229l64.447-63.448 l107.758,88.742c1.362,1.122,3.053,1.711,4.769,1.711c0.798,0,1.602-0.128,2.381-0.389c2.452-0.82,4.308-2.847,4.911-5.361 L486.948,9.249c0.005-0.02,0.005-0.04,0.01-0.059c0.071-0.308,0.123-0.618,0.154-0.93c0.006-0.058,0.008-0.116,0.012-0.174 c0.021-0.267,0.027-0.535,0.02-0.802C487.142,7.223,487.144,7.162,487.14,7.101z M202.002,369.932l-12.588-94.408L417.269,72.988 L233.596,300.994c-0.035,0.043-0.063,0.092-0.097,0.137c-0.139,0.18-0.27,0.363-0.39,0.552c-0.046,0.073-0.088,0.147-0.132,0.221 c-0.111,0.188-0.213,0.379-0.306,0.574c-0.019,0.04-0.044,0.077-0.062,0.117L202.002,369.932z M221.59,363.089l20.628-45.383 l13.869,11.421L221.59,363.089z M375.762,408.25L249.932,304.626l214.65-266.46L375.762,408.25z" />
            </g>
            <g>
                <path d="M253.025,399.794c-2.928-2.928-7.677-2.929-10.606,0.001l-66.264,66.265c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196s3.839-0.732,5.303-2.197l66.264-66.265C255.954,407.471,255.954,402.723,253.025,399.794z" />
            </g>

            <g>
                <path d="M153.621,317.478c-2.928-2.928-7.677-2.928-10.606,0l-65.748,65.749c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.733,5.303-2.196l65.748-65.749 C156.55,325.155,156.55,320.407,153.621,317.478z" />
            </g>

            <g>
                <path d="M153.621,399.796c-2.928-2.928-7.677-2.928-10.606,0l-99.399,99.402c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196s3.839-0.732,5.303-2.197l99.399-99.401C156.55,407.473,156.55,402.725,153.621,399.796z" />
            </g>
        </svg>
    </div>

    <div class="newsletter-shape-02"></div>

    <div class="newsletter-shape-03 animate-05"></div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Newsletter Content Start -->
                <div class="newsletter-content">
                    <h3 class="title">Subscribe Newsletters</h3>
                    <p>Enter your email address to register to our newsletter </p>
                </div>
                <!-- Newsletter Content End -->
            </div>
            <div class="col-lg-6">
                <!-- Newsletter Form Start -->
                <div class="newsletter-form">
                    <form action="#">
                        <input type="text" placeholder="Your Email">
                        <button class="btn">Subscribe</button>
                    </form>
                </div>
                <!-- Newsletter Form End -->
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->




@endsection