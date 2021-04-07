<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
<div class="page-wrapper">
    @include('navbar')
    <main class="main">
        <div class="home-top-container mt-lg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 mb-2">
                        <div class="home-slider owl-carousel owl-theme owl-carousel-lazy h-100" data-owl-options="{
								'dots': true,
								'nav': false,
								'loop': false
							}">
                            <div class="home-slide home-slide1 banner banner-md-vw h-100">
                                <div class="owl-lazy slide-bg h-100" src="https://saavran.github.io/smartprix/images/cover.jpg"
                                     data-src="https://saavran.github.io/smartprix/images/cover.jpg" alt="slider image" width="835"
                                     height="435"></div>

                                <div class="banner-layer banner-layer-middle">
                                    <h4 class="text-white">Find the Boundaries. Push Through!</h4>
                                    <h2 class="text-white m-b-1">Summer Sale</h2>
                                    <h3 class="text-white text-uppercase m-b-3">70% Off</h3>
                                    <h5 class="text-white text-uppercase d-inline-block mb-1 pb-1 ls-n-20 align-text-bottom">
                                        Starting At <b class="coupon-sale-text bg-secondary text-white d-inline-block">$<em>199</em>99</b>
                                    </h5>
                                    <a href="category.html" class="btn btn-primary btn-md ls-10 align-bottom">Shop
                                        Now!</a>
                                </div><!-- End .banner-layer -->
                            </div><!-- End .home-slide -->

                            <div class="home-slide home-slide2 banner banner-md-vw h-100">
                                <div class="owl-lazy slide-bg h-100" src="https://images.unsplash.com/photo-1468495244123-6c6c332eeece?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FkZ2V0fGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80"
                                     data-src="https://images.unsplash.com/photo-1468495244123-6c6c332eeece?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8Z2FkZ2V0fGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80" alt="slider image" width="835"
                                     height="435"></div>

                                <div class="banner-layer banner-layer-middle text-uppercase">
                                    <h4 class="text-white m-b-2">Over 200 products with discounts</h4>
                                    <h2 class="text-white m-b-3">Great Deals</h2>
                                    <h5 class="text-white d-inline-block mb-0 align-top mr-4 pt-2">Starting At <b
                                            class="ml-2 mr-3">$<em>299</em>99</b></h5>
                                    <a href="category.html" class="btn btn-primary btn-md ls-10">Get Yours!</a>
                                </div><!-- End .banner-layer -->
                            </div><!-- End .home-slide -->
                        </div><!-- End .home-slider -->
                    </div><!-- End .col-lg-9 -->

                    <div class="col-lg-3 col-md-12 mb-2 h-100">
                        <div class="widget widget-newsletters bg-gray text-center h-100">
                            <h3 class="widget-title text-uppercase">But Products Online</h3>
                            <p class="mb-2" style="text-align: left; line-height: 25px;">Buy online and send home appliances and electronics to Sri Lanka and get delivered to your doorstep. An impressive array of products with multi brands to choose from.</p>
                            <input type="submit" class="btn btn-primary btn-md" value="Shop Now!">
                            <div style="display: flex">
                                <div style="flex: 6">
                                    <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/singer-3-logo.png" />
                                </div>
                                <div style="flex: 6; margin:auto" >
                                    <img style="width: 57%; margin:auto" src="https://www.hsbc.lk/content/dam/hsbc/lk/images/credit-cards/rewards/abans.png" />
                                </div>
                            </div>
                            <div style="display: flex">
                                <img src="https://www.payhere.lk/downloads/images/payhere_square_banner.png" />
                            </div>
                        </div><!-- End .widget -->
                    </div>

                    {{-- <div class="col-lg-3 top-banners">
                        <div class="row">
                            <div class="col-md-4 col-lg-12">
                                <div class="banner banner1 banner-md-vw-large banner-sm-vw-large mb-2">
                                    <figure>
                                        <img src="assets/images/banners/banner-1.jpg" alt="banner">
                                    </figure>
                                    <div class="banner-layer banner-layer-middle text-right">
                                        <h3 class="m-b-2">Handbags</h3>
                                        <h4 class="m-b-4 text-secondary text-uppercase">Starting at $99</h4>
                                        <a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
                                    </div>
                                </div><!-- End .banner -->
                            </div>
                            <div class="col-md-4 col-lg-12">
                                <div class="banner banner2 banner-md-vw-large banner-sm-vw-large text-uppercase mb-2">
                                    <figure>
                                        <img src="assets/images/banners/banner-2.jpg" alt="banner">
                                    </figure>
                                    <div class="banner-layer banner-layer-middle text-center">
                                        <h3 class="m-b-1 text-primary">Deal Promos</h3>
                                        <h4 class="mb-1 pb-1 text-body">Starting at $99</h4>
                                        <a href="#" class="text-dark ls-10 py-1">Shop Now</a>
                                    </div>
                                </div><!-- End .banner -->
                            </div>
                            <div class="col-md-4 col-lg-12">
                                <div class="banner banner3 banner-md-vw-large banner-sm-vw-large mb-2">
                                    <figure>
                                        <img src="assets/images/banners/banner-3.jpg" alt="banner"
                                             style="object-position: left;">
                                    </figure>
                                    <div class="banner-layer banner-layer-middle">
                                        <h3 class="m-b-2">Black Jackets</h3>
                                        <h4 class="m-b-4 text-white text-uppercase">Starting at $99</h4>
                                        <a href="#" class="text-dark text-uppercase ls-10 py-1">Shop Now</a>
                                    </div>
                                </div><!-- End .banner -->
                            </div>
                        </div>
                    </div><!-- End .col-lg-3 --> --}}
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .home-top-container -->

        <div class="info-boxes-container bg-dark2 mb-4">
            <div class="container">
                <div class="info-boxes-slider owl-carousel owl-theme" data-owl-options="{
						'dots': false,
						'margin': 20,
						'loop': false,
						'responsive': {
							'576': {
								'items': 2
							},
							'992': {
								'items': 3
							}
						}
					}">
                    <div class="info-box text-white info-box-icon-left">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content pt-1">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free Shipping on All Orders Over $99.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box text-white info-box-icon-left">
                        <i class="icon-money"></i>

                        <div class="info-box-content pt-1">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% Money Back Guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box text-white info-box-icon-left">
                        <i class="icon-support"></i>

                        <div class="info-box-content pt-1">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem Ipsum Dolor Sit Amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .info-boxes-slider -->
            </div><!-- End .container -->
        </div><!-- End .info-boxes-container -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="home-product-tabs">
                        <ul class="nav nav-tabs mb-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="featured-products-tab" data-toggle="tab"
                                   href="#featured-products" role="tab" aria-controls="featured-products"
                                   aria-selected="true">Featured Products</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured-products" role="tabpanel"
                                 aria-labelledby="featured-products-tab">
                                <div class="row">
                                    @foreach($items as $item)
                                        <div class="col-6 col-sm-4">
                                            <div class="product-default inner-quickview inner-icon">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{$item->imageUrl}}">
                                                    </a>
                                                    <div class="label-group">
                                                        <span class="product-label label-sale">-{{$item->discount}}%</span>
                                                    </div>
                                                    <div class="btn-icon-group">
                                                        <button class="btn-icon btn-add-cart" data-toggle="modal"
                                                                data-target="#addCartModal"><i
                                                                class="icon-shopping-cart"></i></button>
                                                    </div>
                                                    <a href="#" class="btn-quickview"
                                                    title="Quick View">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="category-wrap">
                                                        <div class="category-list">
                                                            <a href="category.html" class="product-category">{{($item->brandName)}} {{($item->subCategoryName)}}</a>
                                                        </div>
                                                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                    </div>
                                                    <h3 class="product-title">
                                                        <a href="product.html">{{$item->name}}</a>
                                                    </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="old-price">{{$item->price}}.00</span>
                                                        <span class="product-price">{{($item->price) - ($item->discount/100)}}</span>
                                                    </div><!-- End .price-box -->
                                                </div><!-- End .product-details -->
                                            </div>
                                        </div> 
                                    @endforeach
                                </div>
                            </div><!-- End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .home-product-tabs -->
                </div><!-- End .col-lg-9 -->
                @foreach($itemtypes as $itemType)
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="home-product-tabs">
                                <ul class="nav nav-tabs mb-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="featured-products-tab" data-toggle="tab"
                                           href="#featured-products" role="tab" aria-controls="featured-products"
                                           aria-selected="true">{{$itemType}}</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="featured-products" role="tabpanel"
                                         aria-labelledby="featured-products-tab">
                                        <div class="row">
                                            @foreach($items as $item)
                                                @if($item->itemtype==$itemType)
                                                <div class="col-6 col-sm-4">
                                                    <div class="product-default inner-quickview inner-icon">
                                                        <figure>
                                                            <a href="product.html">
                                                                <img src="{{$item->imageUrl}}">
                                                            </a>
                                                            <div class="label-group">
                                                                <span class="product-label label-sale">-{{$item->discount}}%</span>
                                                            </div>
                                                            <div class="btn-icon-group">
                                                                <button class="btn-icon btn-add-cart" data-toggle="modal"
                                                                        data-target="#addCartModal"><i
                                                                        class="icon-shopping-cart"></i></button>
                                                            </div>
                                                            <a href="ajax/product-quick-view.html" class="btn-quickview"
                                                            title="Quick View">Quick View</a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <div class="category-wrap">
                                                                <div class="category-list">
                                                                    <a href="category.html" class="product-category">{{($item->brandName)}} {{($item->subCategoryName)}}</a>
                                                                </div>
                                                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>
                                                            </div>
                                                            <h3 class="product-title">
                                                                <a href="product.html">{{$item->name}}</a>
                                                            </h3>
                                                            <div class="ratings-container">
                                                                <div class="product-ratings">
                                                                    <span class="ratings" style="width:100%"></span>
                                                                    <!-- End .ratings -->
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div><!-- End .product-ratings -->
                                                            </div><!-- End .product-container -->
                                                            <div class="price-box">
                                                                <span class="old-price">{{$item->price}}.00</span>
                                                                <span class="product-price">{{($item->price) - ($item->discount/100)}}</span>
                                                            </div><!-- End .price-box -->
                                                        </div><!-- End .product-details -->
                                                    </div>
                                                </div> 
                                                @endif
                                            @endforeach
                                        </div>
                                    </div><!-- End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .home-product-tabs -->
                        </div><!-- End .col-lg-9 -->
                @endforeach
                <div class="sidebar-overlay"></div>
                <div class="sidebar-toggle"><i class="fas fa-sliders-h"></i></div>
                <aside class="sidebar-home col-lg-3 mobile-sidebar" style="margin-top: -313px;"> 
                    <div class="widget widget-banners px-5 pb-3 text-center">
                        <div class="owl-carousel owl-theme dots-small">
                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase">
                                    <em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                            </div><!-- End .banner -->

                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase">
                                    <em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                            </div><!-- End .banner -->

                            <div class="banner d-flex flex-column align-items-center">
                                <h3 class="badge-sale bg-secondary d-flex flex-column align-items-center justify-content-center text-uppercase">
                                    <em class="pt-3 ls-0">Sale</em>Many Item</h3>
                                <h4 class="sale-text font1 text-uppercase m-b-3">45<sup>%</sup><sub>off</sub></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="#" class="btn btn-primary btn-md font1">View Sale</a>
                            </div><!-- End .banner -->
                        </div><!-- End .banner-slider -->
                    </div><!-- End .widget -->

                    <div class="widget widget-newsletters bg-gray text-center">
                        <h3 class="widget-title text-uppercase">Subscribe Newsletter</h3>
                        <p class="mb-2">Get all the latest information on Events, Sales and Offers. </p>
                        <form action="#">
                            <div class="form-group position-relative sicon-envolope-letter">
                                <input type="email" class="form-control" name="newsletter-email"
                                       placeholder="Email address">
                            </div><!-- Endd .form-group -->
                            <input type="submit" class="btn btn-primary btn-md" value="Subscribe">
                        </form>
                    </div><!-- End .widget -->
                </aside>
            </div><!-- End .row -->
        </div><!-- End .container -->
        <div class="con">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-2">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="https://uhdwallpapers.org/uploads/converted/18/12/22/vivo-nex-dual-display-edition-1600x900_55577-mm-90.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="text-transform: uppercase; font-size: 55px; color: whitesmoke;">Newest Range Of home Appliances</h5>
                                    <p style="text-transform: uppercase; font-size: 20px;">A new look to suite your lifestyle with Singer</p>
                                </div>
                            </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="https://uhdwallpapers.org/uploads/converted/18/09/14/iphone-xr-red-image-by-apple-1600x900_96855-mm-90.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 style="text-transform: uppercase; font-size: 55px; color: whitesmoke;">Newest Range Of home Appliances</h5>
                                    <p style="text-transform: uppercase; font-size: 20px;">A new look to suite your lifestyle with Abans</p>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
    </main><!-- End .main -->

    @include('footer')
</div><!-- End .page-wrapper -->
@include('othercontent')
</body>
</html>
