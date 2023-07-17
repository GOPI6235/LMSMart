@extends('layouts.frontend')

@section('content')
@include('Frontend.nav.teacherindexnav')



    <div>
         <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">

            <img class="shape-1" src="{{ asset('Frontend/images/shape/shape-5.png') }}" alt="shape">
            <img class="shape-2" src="{{ asset('Frontend/images/shape/shape-6.png') }}" alt="shape">
            <img class="shape-3" src="{{ asset('Frontend/images/shape/shape-7.png') }}" alt="shape">
            <img class="shape-4" src="{{ asset('Frontend/images/shape/shape-21.png') }}" alt="shape">
            <img class="shape-5" src="{{ asset('Frontend/images/shape/shape-21.png') }}" alt="shape">

            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">{{ $category->name }}</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">Course</li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Course List Start -->
        <div class="section section-padding">
            <div class="container">

                <!-- Course List Wrapper Start -->
                <div class="course-list-wrapper">
                    <div class="row flex-row-reverse">
                        <div class="col-lg-9">

                            <!-- Course Top Bar Start -->
                            <div class="course-top-bar">
                                <div class="course-top-text">
                                    <p>We found <span>78</span> Courses For You</p>
                                </div>
                                <div class="course-top-inner">
                                    <ul class="course-top-menu">
                                        <span class="label">View</span>
                                        <ul class="nav">
                                            <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fa fa-th-large"></i></button></li>
                                            <li><button  data-bs-toggle="tab" data-bs-target="#list"><i class="fa fa-th-list"></i></button></li>
                                        </ul>
                                    </ul>
                                    <div class="course-top-action">
                                        <span class="label"><i class="fa fa-align-left" aria-hidden="true"></i> Sort By:</span>
                                        <select class="select">
                                            <option data-display="Default" value="1">Default</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Course Top Bar End -->

                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="grid">
                                    <div class="row">
                                        @foreach ($teacher as $teach)
                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Courses Start -->
                                            <div class="single-course">
                                                <div class="courses-image">
                                                    <a href="{{ url('course-detail/'.$category->name.'/'.$teach->name) }}"><img src="{{ asset('assets/upload/Teacher/'.$teach->image) }}" alt="Courses"></a>
                                                </div>
                                                <div class="courses-content">
                                                    <div class="top-meta">
                                                        <a class="tag" href="#">{{ $teach->name }}</a>
                                                        <span class="price">
                                                        <span class="sale-price">{{ $teach->selling_price }}</span>
                                                        </span>
                                                    </div>
                                                    <h3 class="title"><a href="{{ url('course-detail/'.$category->name.'/'.$teach->name) }}">Design 101: Product & Web Design Course</a></h3>
                                                    <p class="author-name">Andrew paker</p>
                                                </div>
                                                <div class="courses-meta">
                                                    <p class="student"><i class="fa fa-user-o"></i> 10 Student</p>
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
                                        
                                       
                                    </div>
                                </div>
                                <div class="tab-pane" id="list">
                                    <!-- Course List Start -->
                                    <div class="course-list-items">

                                        <!-- Course List Start -->
                                        <div class="single-course-list">
                                            <div class="course-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-5.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="top-meta">
                                                    <a class="tag" href="#">Beginner</a>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                                                <span class="author-name">Andrew paker</span>

                                                <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>

                                                <div class="bottom-meta">
                                                    <p class="meta-action"><i class="fa fa-clock-o"></i> Student</p>
                                                    <p class="meta-action"><i class="fa fa-signal"></i> Student</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course List End -->

                                        <!-- Course List Start -->
                                        <div class="single-course-list">
                                            <div class="course-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-6.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="top-meta">
                                                    <a class="tag" href="#">Beginner</a>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                                                <span class="author-name">Andrew paker</span>

                                                <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>

                                                <div class="bottom-meta">
                                                    <p class="meta-action"><i class="fa fa-clock-o"></i> Student</p>
                                                    <p class="meta-action"><i class="fa fa-signal"></i> Student</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course List End -->

                                        <!-- Course List Start -->
                                        <div class="single-course-list">
                                            <div class="course-image">
                                                <a href="course-details.html"><img src="assets/images/courses/courses-7.jpg" alt="Courses"></a>
                                            </div>
                                            <div class="course-content">
                                                <div class="top-meta">
                                                    <a class="tag" href="#">Beginner</a>
                                                    <span class="price">
                                                    <span class="sale-price">Free</span>
                                                    </span>
                                                </div>
                                                <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                                                <span class="author-name">Andrew paker</span>

                                                <p>Managing a popular open source project can be daunting at first. How do we maintain all these issues, or automatically trigger</p>

                                                <div class="bottom-meta">
                                                    <p class="meta-action"><i class="fa fa-clock-o"></i> Student</p>
                                                    <p class="meta-action"><i class="fa fa-signal"></i> Student</p>
                                                    <div class="rating">
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span>(4.5)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Course List End -->

                                    </div>
                                    <!-- Course List End -->
                                </div>
                            </div>

                            <!-- Page Pagination Start -->
                            <div class="page-pagination">
                                <ul class="pagination justify-content-center">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a class="active" href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Page Pagination End -->

                        </div>
                        <div class="col-lg-3">
                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-wrap-02">

                                <!-- Sidebar Wrapper Start -->
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Type of Courses</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox1">
                                                <label class="form-check-label" for="checkbox1">Free (11)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox2">
                                                <label class="form-check-label" for="checkbox2">Paid (11)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Wrapper End -->

                                <!-- Sidebar Wrapper Start -->
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Categories</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                                <label class="form-check-label" for="checkbox3">Technology (11)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox4">
                                                <label class="form-check-label" for="checkbox4">Business (07)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox5">
                                                <label class="form-check-label" for="checkbox5">Development (11)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Wrapper End -->

                                <!-- Sidebar Wrapper Start -->
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Instructor</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox6">
                                                <label class="form-check-label" for="checkbox6">Jimmy Jason (11)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox7">
                                                <label class="form-check-label" for="checkbox7">Harnold (07)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox8">
                                                <label class="form-check-label" for="checkbox8">Eric Madny (11)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Wrapper End -->

                                <!-- Sidebar Wrapper Start -->
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Ratings</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox9">
                                                <label class="form-check-label" for="checkbox9">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 100%;"></div>
                                                    </div> (4.5)
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox10">
                                                <label class="form-check-label" for="checkbox10">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 60%;"></div>
                                                    </div> (3.5)
                                                </label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox11">
                                                <label class="form-check-label" for="checkbox11">
                                                    <div class="rating">
                                                        <div class="rating-on" style="width: 40%;"></div>
                                                    </div> (2)
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Wrapper End -->

                                <!-- Sidebar Wrapper Start -->
                                <div class="sidebar-widget-02">
                                    <h3 class="widget-title">Lavel</h3>

                                    <div class="widget-checkbox">
                                        <ul class="checkbox-list">
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox12">
                                                <label class="form-check-label" for="checkbox12">Beginner (11)</label>
                                            </li>
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox13">
                                                <label class="form-check-label" for="checkbox13">Advanced (07)</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Wrapper End -->

                            </div>
                            <!-- Sidebar Wrapper End -->
                        </div>
                    </div>
                </div>
                <!-- Course List Wrapper End -->

            </div>
        </div>
        <!-- Course List End -->

       
        <!-- Back to Top End -->
        <button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
        <!-- Back to Top End -->

        <!-- course hover Start -->
        <div id="course-hover">
            <div class="course-hover">
                <div class="courses-content">
                    <div class="top-meta"><a class="tag" href="#">Beginner</a><span class="price"><span class="sale-price">Free</span></span></div>
                    <h3 class="title"><a href="course-details.html">Design 101: Product & Web Design Course</a></h3>
                </div>
                <div class="courses-meta">
                    <p class="student"><i class="fa fa-file-text-o"></i> 10 Lessons</p>
                    <p class="student"><i class="fa fa-file-text-o"></i> 03 Hours</p>
                </div>
                <p>World-class training and development programs developed by top teachers</p>
                <div class="courses-key-future">
                    <h4 class="title">Whats Included</h4>
                    <ul class="future-list">
                        <li>World-class training teacher</li>
                        <li>Bench has zero learning curve</li>
                        <li>We handle the rest.</li>
                    </ul>
                </div>
                <div class="courses-btn"><a class="btn btn-primary btn-hover-heading-color" href="course-details.html">Course Full Details</a></div>
            </div>
        </div>
        <!-- course hover End -->
    </div>
@endsection