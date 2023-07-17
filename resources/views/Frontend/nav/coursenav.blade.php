<div id="header" class="header section">
    <div class="container">

        <!-- Header Wrapper Start  -->
        <div class="header-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="index.html"><img src="{{ asset('Frontend/images/logo.png') }}" alt=""></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Menu Start -->
            <div class="header-menu d-none d-lg-block">
                <ul class="main-menu">
                    <li>
                        <a class="active" href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a class="active" href="index-2.html">Home 02</a></li>
                            <li><a href="index-3.html">Home 03</a></li>
                            <li><a href="index-4.html">Home 04</a></li>
                            <li><a href="index-5.html">Home 05</a></li>
                            <li><a href="index-6.html">Home 06</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('category') }}">Courses</a>
                        <ul class="sub-menu">
                            @foreach ($category as $cate)
                                <li><a href="{{ url('category/'.$cate->id) }}">{{ $cate->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About 01</a></li>
                            <li><a href="about-2.html">About 02</a></li>
                            <li><a href="instructor.html">Instructor</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="login-register.html">Login & Register</a></li>
                        </ul>
                    </li>
                    {{-- <li>
                        <a href="#">Courses</a>
                        <ul class="sub-menu">
                            @foreach ($popular_teacher as $course)
                            
                                <li><a href="#">{{ $course->subcategory->name }}</a></li>
                            
                            @endforeach
                        </ul>
                    </li> --}}
                    
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- Header Menu End -->

            <!-- Header Meta Start -->
            <div class="header-meta">

                <div class="header-search d-none d-lg-block">
                    <form action="{{ url('/search-course') }}" method="GET">
                        @csrf
                        <input type="search" id="search_category" name="category_name" placeholder="Search Courses">
                        <button type="submit"><i class="flaticon-loupe"></i></button>
                    </form>
                </div>

                <div class="header-cart dropdown">
                    <button class="cart-btn" data-bs-toggle="dropdown">
                        <i class="flaticon-shopping-cart"></i>
                        <span class="count">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-cart">
                        <!-- Cart Items Start -->
                        <div class="cart-items">
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="Frontend/images/shop-cart-1.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="Frontend/images/shop-cart-2.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                            <!-- Single Cart Item Start -->
                            <div class="single-cart-item">
                                <div class="item-image">
                                    <img src="Frontend/images/shop-cart-3.jpg" alt="Cart">
                                </div>
                                <div class="item-content">
                                    <h4 class="title"><a href="#">Smart Gear Watch</a></h4>
                                    <span class="quantity"> 2 x $59.99 </span>
                                </div>
                                <button class="btn-close"></button>
                            </div>
                            <!-- Single Cart Item End -->
                        </div>
                        <!-- Cart Items End -->

                        <!-- Cart Total Start -->
                        <div class="cart-total">
                            <span class="label">Subtotal:</span>
                            <span class="value">$229.95</span>
                        </div>
                        <!-- Cart Total End -->

                        <!-- Cart Button Start -->
                        <div class="cart-btns">
                            <a href="#" class="btn btn-primary btn-hover-white">View Cart</a>
                            <a href="#" class="btn btn-white btn-hover-primary">Checkout</a>
                        </div>
                        <!-- Cart Button End -->
                    </div>
                </div>

                <div class="header-login d-none d-lg-flex">
                    @guest
                            @if (Route::has('login'))
                               
                                    <a class="link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                
                                    <a class="link" href="{{ route('register') }}">{{ __('Register') }}</a>
                               
                            @endif
                        @else
                            <li class="link">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </div>

                <div class="header-toggle d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
            <!-- Header Meta End -->

        </div>
        <!-- Header Wrapper End -->

    </div>
</div>