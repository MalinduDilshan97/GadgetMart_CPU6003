<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left header-dropdowns">
                <div class="header-dropdown">
                    <a href="#" class="pl-0"><img src="{{ URL::asset('assets/images/flags/en.png')}}"
                                                  alt="England flag">ENG</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#"><img src="{{ URL::asset('assets/images/flags/en.png')}}" alt="England flag">ENG</a>
                            </li>
                            <li><a href="#"><img src="{{ URL::asset('assets/images/flags/fr.png')}}" alt="France flag">FRA</a>
                            </li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->

                <div class="header-dropdown ml-4">
                    <a href="#">USD</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <p class="top-message text-uppercase d-none d-sm-block">Free returns. Standard shipping orders $99+</p>

                <span class="separator"></span>

                <div class="header-dropdown dropdown-expanded mx-3 px-1">
                    <a href="#">Links</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">About </a></li>
                            <li><a href="#">Our Stores</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                            @if(Session::get('login') != TRUE)
                                <li><a href="#" onclick="window.location='{{ url("/login") }}'" class="login-link">Log
                                        In</a></li>
                            @else
                                <li><a href="#" onclick="logoutuser()" class="login-link">Log Out</a></li>
                            @endif
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropown -->

                <span class="separator"></span>

                <div class="social-icons">
                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                    <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                </div><!-- End .social-icons -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left col-lg-2 w-auto pl-0 mr-3">
                <button class="mobile-menu-toggler" type="button">
                    <i class="icon-menu"></i>
                </button>
                <a href="#" class="logo">
                    <img src="{{ URL::asset('assets/images/GM.png')}}" alt="Porto Logo">
                </a>
            </div><!-- End .header-left -->

            <div class="header-right w-lg-max">
                <div
                    class="header-icon header-search header-search-inline header-search-category mr-lg-5 pr-lg-4 w-lg-max">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
                            <div class="select-custom body-text">

                            </div><!-- End .select-custom -->
                            <button class="btn icon-search-3" type="submit"></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <div class="header-contact d-none d-lg-flex pl-1 mr-xl-5 pr-4">
                    <img alt="phone" src="{{ URL::asset('assets/images/phone.png')}}" width="30" height="30"
                         class="pb-1">
                    <h6>Call us now<a href="tel:#" class="text-dark font1">+94 76 91 51 196</a></h6>
                </div><!-- End .header-contact -->
                @if(Session::get('login') != TRUE)
                    <a onclick="window.location={{url('/login')}}" href="{{url('/login')}}"
                       class="header-icon pl-1"><i class="icon-user-2"></i></a>
                @endif
                {{-- <a href="#" class="header-icon pl-1"><i class="icon-wishlist-2"></i></a>--}}

                <div class="dropdown cart-dropdown">
                    <a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="icon-shopping-cart"></i>
                    </a>

                    <div class="dropdown-menu">
                        <div class="dropdownmenu-wrapper">
                            <div class="dropdown-cart-action">
                                <a href="{{url('/cart-view')}}" class="btn btn-dark btn-block">Checkout</a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdownmenu-wrapper -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline w-lg-max mr-lg-5 pr-lg-4',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav',
						'removeClass': 'w-100'
					},
					{
						'item': '.logo',
						'removeClass': 'd-none'
					},
					{
						'item': '.float-right',
						'addClass': 'd-none'
					}
				]
			}">
        <div class="container">
            <nav class="main-nav w-100">
                <ul class="menu">
                    <li class="active">
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">Categories</a>
                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="submenu" id="category">
                                        {{-- Load Category--}}
                                    </ul>
                                </div>
                                <div class="col-lg-4 p-0"
                                     style="background: #f4f4f4 no-repeat center 82%/cover url('assets/images/menu-banner.jpg')"></div>
                            </div>
                        </div><!-- End .megamenu -->
                    </li>
                    <li>
                        <a href="#">Brand</a>
                        <div class="megamenu megamenu-fixed-width">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul class="submenu" id="brand">
                                        {{-- --}}
                                    </ul>
                                </div><!-- End .col-lg-4 -->
                                <div class="col-lg-3 p-0">
                                    <img src="{{ URL::asset('assets/images/menu-bg.png')}}" alt="Menu banner"
                                         class="product-promo">
                                </div><!-- End .col-lg-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .megamenu -->
                    </li>
                    <li>
                        <a href="{{url('/product-all')}}">Product</a>
                    </li>
                    @if(Session::get('login') == TRUE)
                        <li><a href="{{url('/customer-order-history')}}">Check Oder History</a></li>
                    @endif
                    @if(Session::get('login') == TRUE)
                        <li class="float-right bg-dark2"><a class="text-white" href="#"
                                                            target="_blank">{{ Session::get('username') }}</a></li>
                    @endif
                </ul>
            </nav>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
