@extends('layouts.frontend')

@section('content')
    @include('Frontend.nav.viewnav')


    <div>

        <!-- Course List Start -->
        <div class="section section-padding">
            <div class="container">
                <h3 class="title">Java</h3>

                <div class="row justify-content-between">
                    <div class="col-xl-12 col-lg-8">

                        <!-- Course Details Wrapper Start -->
                        <div class="course-details-wrapper">
                            <!-- Course Lessons Start -->
                            <div class="course-lessons">

                                <div class="lessons-top">
                                    <h3 class="title">Course Content</h3>
                                    <div class="lessons-time">
                                        <span>10 Lessons</span>
                                        <span>6h 40m</span>
                                    </div>
                                </div>
                                {{-- @auth
                                    @isset($paymentStatus)
                                        @if ($paymentStatus == 1)
                                        <div class="course-accordion accordion" id="accordionCourse">
                                        <div class="accordion-item">
                                            <button data-bs-toggle="collapse" data-bs-target="#collapseOne">Introduction
                                            </button>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionCourse">
                                                <div class="accordion-body">
                                                    <ul class="lessons-list">
                                                        <li>
                                                            <video width="800" controls>
                                                                <source
                                                                    src="{{ asset('assets/upload/Teacher/videos/1689282526.mp4') }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </li>
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> Greetings
                                                                and Introductions <span>5:00</span></a></li>
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business
                                                                English Phrasal Verbs <span>3:17</span></a></li>
                                                        <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1
                                                                : How to start?</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo">Analysis</button>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionCourse">
                                                <div class="accordion-body">
                                                    <ul class="lessons-list">
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> Greetings
                                                                and Introductions <span>5:00</span></a></li>
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business
                                                                English Phrasal Verbs <span>3:17</span></a></li>
                                                        <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1
                                                                : How to start?</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <button class="collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree">Practical</button>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionCourse">
                                                <div class="accordion-body">
                                                    <ul class="lessons-list">
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> Greetings
                                                                and Introductions <span>5:00</span></a></li>
                                                        <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business
                                                                English Phrasal Verbs <span>3:17</span></a></li>
                                                        <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1
                                                                : How to start?</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @else
                                        <div class="sidebar-details-video-description">
                                        <div class="sidebar-video">
                                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"
                                                href="#"><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="sidebar-description">
                                            <div class="price">
                                                <span class="sale-price">$123</span>
                                                <span class="regular-price">$123</span>
                                            </div>
                                            
                                                <button type="submit" class="btn btn-primary btn-hover-heading-color w-100"
                                                    href="#">Buy</button>
                                            
                                            <ul class="description-list">
                                                <li><i class="fa fa-clock-o"></i> Duration <span>52 mins</span></li>
                                                <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                                <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                                <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                                <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                            </ul>
                                            <a class="btn btn-outline-primary w-100" href="#"><i
                                                    class="fa fa-share"></i> Share This Course</a>
                                        </div>
                                        </div>
                                            <p>Please make a payment to access the video.</p>
                                        @endif
                                    @endisset
                                @endauth --}}



                                @auth
                                    @isset($paymentStatus)
                                        @if ($paymentStatus == 1)
                                            <h1>11</h1>
                                        @else
                                            <h3>33</h3>
                                        @endif
                                    @else
                                    <div class="sidebar-details-video-description">
                                        <div class="sidebar-video">
                                            <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox"
                                                href="#"><i class="fa fa-play"></i></a>
                                        </div>
                                        <div class="sidebar-description">
                                            <div class="price">
                                                <span class="sale-price">$123</span>
                                                <span class="regular-price">$123</span>
                                            </div>
                                            
                                                <button type="submit" class="btn btn-primary btn-hover-heading-color w-100"
                                                    href="#">Buy</button>
                                            
                                            <ul class="description-list">
                                                <li><i class="fa fa-clock-o"></i> Duration <span>52 mins</span></li>
                                                <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                                <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                                <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                                <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                            </ul>
                                            <a class="btn btn-outline-primary w-100" href="#"><i
                                                    class="fa fa-share"></i> Share This Course</a>
                                        </div>
                                        </div>
                                    @endisset
                                @endauth



                            </div>
                            <!-- Course Lessons End -->

                            <!-- Course Learn List Start -->
                            <div class="course-learn-list">
                                <h3 class="title">What you will learn</h3>
                                <ul>
                                    <li>Become a UX designer.</li>
                                    <li>Become a UX designer.</li>
                                    <li>You will be able to add UX designer to your CV</li>
                                    <li>You will be able to add UX designer to your CV</li>
                                    <li>Build & test a full website design.</li>
                                    <li>Build & test a full website design.</li>
                                </ul>
                            </div>
                            <!-- Course Learn List End -->

                            <!-- Course Instructor Start -->
                            <div class="course-instructor">
                                <h3 class="title">Course Instructor</h3>

                                <div class="instructor-profile">
                                    <div class="profile-images">
                                        <img src="{{ asset('assets/upload/Teacher/1689141319.jpg') }}" alt="author">
                                    </div>
                                    <div class="profile-content">
                                        <h5 class="name">{{-- $teacher->name --}}</h5>

                                        <div class="profile-meta">
                                            <div class="rating">
                                                <div class="rating-star">
                                                    <div class="rating-active" style="width: 60%;"></div>
                                                </div>
                                                <span>(4.5)</span>
                                            </div>
                                            <span class="meta-action"><i class="fa fa-play-circle"></i> 10
                                                Tutorials</span>
                                            <span class="meta-action"><i class="fa fa-user-o"></i> 134 Students</span>
                                        </div>

                                        <p>World-class training and development programs developed by top teachers. Build
                                            skills with courses, certificates, and degrees online from world-class
                                            universities </p>

                                    </div>
                                </div>
                            </div>
                            <!-- Course Instructor End -->

                            <!-- Course Review Start -->
                            <div class="course-review">
                                <h3 class="title">Review</h3>

                                <!-- Review Rating Start -->
                                <div class="review-rating">

                                    <div class="rating-box">
                                        <span class="count">5.0</span>
                                        <div class="rating-star">
                                            <div class="rating-active" style="width: 60%;"></div>
                                        </div>
                                        <p>Total 2 Ratings</p>
                                    </div>
                                    <div class="rating-percentage">

                                        <!-- Course Review Start -->
                                        <div class="single-rating-percentage">
                                            <span class="label">5 Star</span>
                                            <div class="rating-line">
                                                <div class="line-bar" style="width: 90%;"></div>
                                            </div>
                                            <span class="label">90%</span>
                                        </div>
                                        <!-- Course Review End -->

                                        <!-- Course Review Start -->
                                        <div class="single-rating-percentage">
                                            <span class="label">4 Star</span>
                                            <div class="rating-line">
                                                <div class="line-bar" style="width: 40%;"></div>
                                            </div>
                                            <span class="label">40%</span>
                                        </div>
                                        <!-- Course Review End -->

                                        <!-- Course Review Start -->
                                        <div class="single-rating-percentage">
                                            <span class="label">3 Star</span>
                                            <div class="rating-line">
                                                <div class="line-bar" style="width: 20%;"></div>
                                            </div>
                                            <span class="label">20%</span>
                                        </div>
                                        <!-- Course Review End -->

                                        <!-- Course Review Start -->
                                        <div class="single-rating-percentage">
                                            <span class="label">2 Star</span>
                                            <div class="rating-line">
                                                <div class="line-bar" style="width: 0%;"></div>
                                            </div>
                                            <span class="label">0%</span>
                                        </div>
                                        <!-- Course Review End -->

                                        <!-- Course Review Start -->
                                        <div class="single-rating-percentage">
                                            <span class="label">1 Star</span>
                                            <div class="rating-line">
                                                <div class="line-bar" style="width: 10%;"></div>
                                            </div>
                                            <span class="label">10%</span>
                                        </div>
                                        <!-- Course Review End -->

                                    </div>

                                </div>
                                <!-- Review Rating End -->

                                <!-- Review Items Start -->
                                <div class="review-items">
                                    <ul>
                                        <li>
                                            <!-- Single Review Start -->
                                            <div class="single-review">
                                                <div class="review-author">
                                                    <img src="{{ asset('Frontend/images/author-1.jpg') }}" alt="Author">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top">
                                                        <h4 class="name">David Gea</h4>
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span class="date">4 Months Ago</span>
                                                    </div>
                                                    <p>World-class training and development programs developed by top
                                                        teachers. Build skills with courses, certificates, and degrees
                                                        online from world-class.</p>
                                                </div>
                                            </div>
                                            <!-- Single Review End -->
                                        </li>
                                        <li>
                                            <!-- Single Review Start -->
                                            <div class="single-review">
                                                <div class="review-author">
                                                    <img src="{{ asset('Frontend/images/author-3.jpg') }}" alt="Author">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top">
                                                        <h4 class="name">David Gea</h4>
                                                        <div class="rating-star">
                                                            <div class="rating-active" style="width: 60%;"></div>
                                                        </div>
                                                        <span class="date">4 Months Ago</span>
                                                    </div>
                                                    <p>World-class training and development programs developed by top
                                                        teachers. Build skills with courses, certificates, and degrees
                                                        online from world-class.</p>
                                                </div>
                                            </div>
                                            <!-- Single Review End -->
                                        </li>
                                    </ul>
                                </div>
                                <!-- Review Items End -->

                            </div>
                            <!-- Course Review End -->

                        </div>
                        <!-- Course Details Wrapper End -->

                    </div>

                    {{-- <div class="col-lg-4">
                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-details-wrap">

                            <!-- Sidebar Details Video Description Start -->
                            <div class="sidebar-details-video-description">
                                <div class="sidebar-video">
                                    <img src="{{ asset('Frontend/images/sidebar-video.jpg') }}" alt="video">
                                    <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox" href="#"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="sidebar-description">
                                    <div class="price">
                                        <span class="sale-price">${{ $teacher->selling_price }}</span>
                                        <span class="regular-price">${{ $teacher->original_price }}</span>
                                    </div>
                                    <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Buy</a>
                                    <ul class="description-list">
                                        <li><i class="fa fa-clock-o"></i> Duration <span>52 mins</span></li>
                                        <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                        <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                        <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                        <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                    </ul>
                                    <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i> Share This Course</a>
                                </div>
                            </div>
                            <!-- Sidebar Details Video Description End -->

                            <!-- Sidebar Course Start -->
                            <div class="sidebar-details-course">
                                <h4 class="sidebar-details-title">Releted Courses</h4>

                                <ul class="sidebar-details-courses">
                                    <li>
                                        <!-- Single Course Start -->
                                        <div class="sidebar-course-item">
                                            <div class="item-image">
                                                <a href="course-details.html"><img src="{{ asset('Frontend/images/courses/courses-1.jpg') }}" alt="Courses"></a>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="title"><a href="course-details.html">Cupidatat non proident sunt culpa officia deserunt</a></h3>
                                                <span class="price">Price  <strong>$45</strong></span>
                                            </div>
                                        </div>
                                        <!-- Single Course End -->
                                    </li>
                                    <li>
                                        <!-- Single Course Start -->
                                        <div class="sidebar-course-item">
                                            <div class="item-image">
                                                <a href="course-details.html"><img src="{{ asset('Frontend/images/courses/courses-2.jpg') }}" alt="Courses"></a>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="title"><a href="course-details.html">Cupidatat non proident sunt culpa officia deserunt</a></h3>
                                                <span class="price">Price  <strong>$45</strong></span>
                                            </div>
                                        </div>
                                        <!-- Single Course End -->
                                    </li>
                                    <li>
                                        <!-- Single Course Start -->
                                        <div class="sidebar-course-item">
                                            <div class="item-image">
                                                <a href="course-details.html"><img src="{{ asset('Frontend/images/courses/courses-3.jpg') }}" alt="Courses"></a>
                                            </div>
                                            <div class="item-content">
                                                <h3 class="title"><a href="course-details.html">Cupidatat non proident sunt culpa officia deserunt</a></h3>
                                                <span class="price">Price  <strong>$45</strong></span>
                                            </div>
                                        </div>
                                        <!-- Single Course End -->
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Course End -->

                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div> --}}
                </div>


            </div>
        </div>
        <!-- Course List End -->

    </div>
@endsection
