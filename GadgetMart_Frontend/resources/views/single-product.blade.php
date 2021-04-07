<!DOCTYPE html>
<html lang="en">
@include('head')
<body>
<div class="page-wrapper">
    @include('navbar')
    <main class="main">

        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                </ol>
            </div>
        </nav>

        <div class="container">
            <div class="product-single-container product-single-default">
                <div class="row">
                    <div class="col-md-5 product-single-gallery">
                        <div class="product-slider-container">
                            <div class="product-single-carousel owl-carousel owl-theme">

                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                                <div class="product-item">
                                    <img class="product-single-image" src="{{$imageUrl}}"
                                         data-zoom-image="{{$imageUrl}}"/>
                                </div>
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
										<i class="icon-plus"></i>
									</span>
                        </div>
                        <div class="prod-thumbnail owl-dots" id='carousel-custom-dots'>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                            <div class="owl-dot">
                                <img src="{{$imageUrl}}"/>
                            </div>
                        </div>
                    </div><!-- End .product-single-gallery -->

                    <div class="col-md-7 product-single-details">
                        <h1 class="product-title">{{$name}}</h1>

                        {{--								<div class="ratings-container">--}}
                        {{--									<div class="product-ratings">--}}
                        {{--										<span class="ratings" style="width:60%"></span><!-- End .ratings -->--}}
                        {{--									</div><!-- End .product-ratings -->--}}

                        {{--									<a href="#" class="rating-link">( 6 Reviews )</a>--}}
                        {{--								</div><!-- End .ratings-container -->--}}

                        <hr class="short-divider">

                        <div class="price-box">
                            <span class="product-price">LKR {{$price}}</span>
                        </div><!-- End .price-box -->

                        <div class="product-desc">
                            <p>
                                {{$shortdes}}
                            </p>
                            <p>Warranty :- {{$warranty}}</p>
                            <p>Stock Qty :- {{$qty}}</p>
                        </div><!-- End .product-desc -->


                        <hr class="divider">

                        <div class="product-action">
                            <div class="product-single-qty">
                                <input id="qty" class="horizontal-quantity form-control" type="text">
                            </div><!-- End .product-single-qty -->

                            <a href="#" class="btn btn-dark add-cart icon-shopping-cart"
                               onclick="addtoCart('{{$id}}','{{$name}}','{{$price}}','{{$imageUrl}}','{{$itemtype}}')"
                               title="Add to Cart">Add to Cart</a>
                        </div><!-- End .product-action -->

                        <hr class="divider mb-1">

                        <div class="product-single-share">
                            <label class="sr-only">Share:</label>

                            <div class="social-icons mr-2">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                   title="Facebook"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                   title="Twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                   title="Linkedin"></a>
                                <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                   title="Google +"></a>
                                <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                   title="Mail"></a>
                            </div><!-- End .social-icons -->

                            {{--									<a href="#" class="add-wishlist" title="Add to Wishlist">Add to Wishlist</a>--}}
                        </div><!-- End .product single-share -->
                    </div><!-- End .product-single-details -->
                </div><!-- End .row -->
            </div><!-- End .product-single-container -->

            <div class="promo-area">
                <div class="zigzag-bottom"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single-promo promo1">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <p>30 Days return</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-promo promo2">
                                <i class="fa fa-truck"></i>
                                <p>Free shipping</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-promo promo3">
                                <i class="fa fa-lock"></i>
                                <p>Secure payments</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-promo promo4">
                                <i class="fa fa-gift"></i>
                                <p>New products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End promo area -->

            <div class="product-single-tabs" style="margin-bottom: 0">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content"
                           role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                         aria-labelledby="product-tab-desc">
                        <div class="product-desc-content">
                            <p>{{$longdes}}</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-single-tabs -->
        </div><!-- End .container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-images">
                                <img style="flex:2; width:100%" src="{{ URL::asset('assets/images/brand1.png')}}" alt="">
                                <img style="flex:2; width:100%" src="{{ URL::asset('assets/images/brand2.png')}}" alt="">
                                <img style="flex:2; width:100%" src="{{ URL::asset('assets/images/brand3.png')}}" alt="">
                                <img style="flex:2; width:100%" src="{{ URL::asset('assets/images/brand4.png')}}" alt="">                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End brands area -->
    </main><!-- End .main -->
    
    @include('footer')
</div><!-- End .page-wrapper -->

@include('othercontent')


<script>
    function addtoCart(newid, name, price, image, itemtype) {

        let qty = $('#qty').val();
        price = parseFloat(price);
        let item1 = {
            id: newid,
            name: name,
            price: price,
            qty: qty,
            image: image,
            itemtype: itemtype
        };
        var items = [];

        var storedNames = JSON.parse(localStorage.getItem("item"));
        if (storedNames === null) {
            items.push(item1);
            localStorage.setItem("item", JSON.stringify(items));
        } else {
            let result = true;
            for (let i in storedNames) {
                let response = storedNames[i];
                let id = response["id"];
                let aimageurl = response["image"];
                let aname = response["name"];
                let aprice = response["price"];
                let aqty = response["qty"];
                let aitemtype = response["itemtype"];
                if (id == newid) {
                    result = false;
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty + qty,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                } else {
                    let item = {
                        id: id,
                        name: aname,
                        price: aprice,
                        qty: aqty,
                        image: aimageurl,
                        itemtype: aitemtype
                    };
                    items.push(item);
                }
            }
            if (result) {
                items.push(item1);
            }
            localStorage.removeItem("item");

            // storedNames.push(item);
            localStorage.setItem("item", JSON.stringify(items));
        }
        $('#addCartModal').modal('show');
    }
</script>

</body>
</html>
