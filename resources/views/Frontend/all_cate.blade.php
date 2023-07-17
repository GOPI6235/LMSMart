@extends('layouts.frontend')

@section('content')

@include('Frontend.nav.coursenav')

    <div>
        <!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-2">

            <img class="shape-1" src="{{ asset('frontend/images/shape/shape-5.png') }}" alt="shape">
            <img class="shape-2" src="{{ asset('frontend/images/shape/shape-6.png') }}" alt="shape">
            <img class="shape-3" src="{{ asset('frontend/images/shape/shape-7.png') }}" alt="shape">
            <img class="shape-4" src="{{ asset('frontend/images/shape/shape-21.png') }}" alt="shape">
            <img class="shape-5" src="{{ asset('frontend/images/shape/shape-21.png') }}" alt="shape">

            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Course List</h2>
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
                        <div class="col-lg-12">

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
                                        @foreach ($category as $item )
                                        <div class="col-lg-4 col-sm-6">
                                            <!-- Single Courses Start -->
                                            <div class="single-course">
                                                <a href="{{ url('view-categery/'.$item->name) }}">
                                                    <div class="courses-image">
                                                        <img class="category-image" src="{{ asset('assets/upload/category/'. $item->image) }}" alt="Courses">
                                                    </div>
                                                    <div class="courses-content">
                                                        <div class="top-meta">
                                                            <a class="tag" href="#">{{ $item->name }}</a>
                                                            <span class="price">
                                                            <span class="sale-price">Free</span>
                                                            </span>
                                                        </div>
                                                        <h3 class="title">Design 101: Product & Web Design Course</h3>
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
                                                </a>
                                            </div>
                                            <!-- Single Courses End -->
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="list">
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
                                </div> --}}
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
                    </div>
                </div>
                <!-- Course List Wrapper End -->

            </div>
        </div>
        <!-- Course List End -->
    </div>
@endsection