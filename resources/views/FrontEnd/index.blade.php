@extends('masterfe')
@section('content')
    <!-- banner -->
    <div class="banner">
        <div class="container">
            <h3>Electronic Store, <span>Ưu đãi đặc biệt</span></h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-5 wthree_banner_bottom_left">
                <div class="video-img">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog">
                        <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- pop-up-box -->
                <script src="{{ asset('FrontEnd/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
                <!--//pop-up-box -->
                <div id="small-dialog" class="mfp-hide">
                    <iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });

                </script>
            </div>
            <div class="col-md-7 wthree_banner_bottom_right">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        @foreach ($categorys as $category)
                            @if ($loop->first)
                                <li role="presentation" class="active"><a href="#{{ $category->Cate_Id }}" id="home-tab"
                                        role="tab" data-toggle="tab" aria-controls="home">{{ $category->Cate_name }}</a>
                                </li>
                            @else
                                <li role="presentation" class=""><a href="#{{ $category->Cate_Id }}" id="home-tab"
                                        role="tab" data-toggle="tab" aria-controls="home">{{ $category->Cate_name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        @foreach ($categorys as $category)
                            @if ($loop->first)
                                <div role="tabpanel" class="tab-pane fade active in" id="{{ $category->Cate_Id }}"
                                    aria-labelledby="home-tab">
                                    <div class="agile_ecommerce_tabs">
                                        @foreach ($arrProduct[$category->Cate_Id] as $product)
                                            <div class="col-md-4 agile_ecommerce_tab_left">
                                                <div class="hs-wrapper">
                                                    <img src="{{ asset('FrontEnd/images/3.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/4.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/5.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/6.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <div class="w3_hs_bottom">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#myModal{{ $product->Prod_Id }}"><span
                                                                        class="glyphicon glyphicon-eye-open"
                                                                        aria-hidden="true"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h5><a class="product__title"
                                                        href="{{ route('details', $product->Prod_Id) }}">{{ $product->Prod_Name }}</a>
                                                </h5>
                                                <div class="simpleCart_shelfItem">
                                                    <p><span>đ{{ number_format($product->Price) }}</span> <i
                                                            class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i>
                                                    </p>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="w3ls_item"
                                                            value="{{ $product->Prod_Name }}">
                                                        <input type="hidden" name="amount" value="{{ $product->Price }}">
                                                        <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            @else
                                <div role="tabpanel" class="tab-pane fade" id="{{ $category->Cate_Id }}"
                                    aria-labelledby="home-tab">
                                    <div class="agile_ecommerce_tabs">
                                        @foreach ($arrProduct[$category->Cate_Id] as $product)
                                            <div class="col-md-4 agile_ecommerce_tab_left">
                                                <div class="hs-wrapper">
                                                    <img src="{{ asset('FrontEnd/images/3.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/4.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/5.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <img src="{{ asset('FrontEnd/images/6.jpg') }}" alt=" "
                                                        class="img-responsive" />
                                                    <div class="w3_hs_bottom">
                                                        <ul>
                                                            <li>
                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#myModal{{ $product->Prod_Id }}"><span
                                                                        class="glyphicon glyphicon-eye-open"
                                                                        aria-hidden="true"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h5><a class="product__title"
                                                        href="{{ route('details', $product->Prod_Id) }}">{{ $product->Prod_Name }}</a>
                                                </h5>
                                                <div class="simpleCart_shelfItem">
                                                    <p><span>đ{{ number_format($product->Price) }}</span> <i
                                                            class="item_price">{{ number_format(($product->Price * 90) / 100) }}</i>
                                                    </p>
                                                    <form action="#" method="post">
                                                        <input type="hidden" name="cmd" value="_cart">
                                                        <input type="hidden" name="add" value="1">
                                                        <input type="hidden" name="w3ls_item"
                                                            value="{{ $product->Prod_Name }}">
                                                        <input type="hidden" name="amount" value="{{ $product->Price }}">
                                                        <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner-bottom -->
    <!-- modal-video -->
    @foreach ($categorys as $category)
        @foreach ($arrProduct[$category->Cate_Id] as $product)
            <div class="modal video-modal fade" id="myModal{{ $product->Prod_Id }}" tabindex="-1" role="dialog"
                aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="col-md-5 modal_body_left">
                                    <img src="{{ asset('FrontEnd/images/3.jpg') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-md-7 modal_body_right">
                                    <h4>{{ $product->Prod_Name }}</h4>
                                    {!! $product->Decription !!}
                                    <div class="rating">
                                        <div class="rating-left">
                                            <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" "
                                                class="img-responsive" />
                                        </div>
                                        <div class="rating-left">
                                            <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" "
                                                class="img-responsive" />
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="modal_body_right_cart simpleCart_shelfItem">
                                        <p><span>đ{{ number_format($product->Price) }}</span> <i
                                                class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i>
                                        </p>
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="w3ls_item" value="{{ $product->Prod_Name }}">
                                            <input type="hidden" name="amount" value="{{ $product->Price }}">
                                            <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                                        </form>
                                    </div>
                                    <h5>Color</h5>
                                    <div class="color-quality">
                                        <ul>
                                            <li><a href="#"><span></span></a></li>
                                            <li><a href="#" class="brown"><span></span></a></li>
                                            <li><a href="#" class="purple"><span></span></a></li>
                                            <li><a href="#" class="gray"><span></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
    @foreach ($newProducts as $product)
        <div class="modal video-modal fade" id="myModal{{ $product->Prod_Id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <section>
                        <div class="modal-body">
                            <div class="col-md-5 modal_body_left">
                                <img src="{{ asset('FrontEnd/images/3.jpg') }}" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 modal_body_right">
                                <h4>{{ $product->Prod_Name }}</h4>
                                {!! $product->Decription !!}
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                            class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                            class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                            class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="rating-left">
                                        <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="modal_body_right_cart simpleCart_shelfItem">
                                    <p><span>đ{{ number_format($product->Price) }}</span> <i
                                            class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i>
                                    </p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="w3ls_item" value="{{ $product->Prod_Name }}">
                                        <input type="hidden" name="amount" value="{{ $product->Price }}">
                                        <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                                    </form>
                                </div>
                                <h5>Color</h5>
                                <div class="color-quality">
                                    <ul>
                                        <li><a href="#"><span></span></a></li>
                                        <li><a href="#" class="brown"><span></span></a></li>
                                        <li><a href="#" class="purple"><span></span></a></li>
                                        <li><a href="#" class="gray"><span></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endforeach
    <!-- //modal-video -->
    <!-- banner-bottom1 -->
    <div class="banner-bottom1">
        <div class="agileinfo_banner_bottom1_grids">
            <div class="col-md-7 agileinfo_banner_bottom1_grid_left">
                <h3>Grand Opening Event With flat<span>20% <i>Discount</i></span></h3>
                <a href="products.html">Shop Now</a>
            </div>
            <div class="col-md-5 agileinfo_banner_bottom1_grid_right">
                <h4>hot deal</h4>
                <div class="timer_wrap">
                    <div id="counter"> </div>
                </div>
                <script src="{{ asset('FrontEnd/js/jquery.countdown.js') }}"></script>
                <script src="{{ asset('FrontEnd/js/script.js') }}"></script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //banner-bottom1 -->
    <!-- special-deals -->
    <div class="special-deals">
        <div class="container">
            <h2>Special Deals</h2>
            <div class="w3agile_special_deals_grids">
                <div class="col-md-7 w3agile_special_deals_grid_left">
                    <div class="w3agile_special_deals_grid_left_grid">
                        <img src="{{ asset('FrontEnd/images/21.jpg') }}" alt=" " class="img-responsive" />
                        <div class="w3agile_special_deals_grid_left_grid_pos1">
                            <h5>30%<span>Off/-</span></h5>
                        </div>
                        <div class="w3agile_special_deals_grid_left_grid_pos">
                            <h4>We Offer <span>Best Products</span></h4>
                        </div>
                    </div>
                    <div class="wmuSlider example1">
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="w3agile_special_deals_grid_left_grid1">
                                        <img src="{{ asset('FrontEnd/images/t1.png') }}" alt=" " class="img-responsive" />
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                            eum fugiat quo voluptas nulla pariatur</p>
                                        <h4>Laura</h4>
                                    </div>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="w3agile_special_deals_grid_left_grid1">
                                        <img src="{{ asset('FrontEnd/images/t2.png') }}" alt=" " class="img-responsive" />
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                            eum fugiat quo voluptas nulla pariatur</p>
                                        <h4>Michael</h4>
                                    </div>
                                </div>
                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-wrap">
                                    <div class="w3agile_special_deals_grid_left_grid1">
                                        <img src="{{ asset('FrontEnd/images/t3.png') }}" alt=" " class="img-responsive" />
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate
                                            velit esse quam nihil molestiae consequatur, vel illum qui dolorem
                                            eum fugiat quo voluptas nulla pariatur</p>
                                        <h4>Rosy</h4>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <script src="{{ asset('FrontEnd/js/jquery.wmuSlider.js') }}"></script>
                    <script>
                        $('.example1').wmuSlider();

                    </script>
                </div>
                <div class="col-md-5 w3agile_special_deals_grid_right">
                    <img src="{{ asset('FrontEnd/images/20.jpg') }}" alt=" " class="img-responsive" />
                    <div class="w3agile_special_deals_grid_right_pos">
                        <h4>Women's <span>Special</span></h4>
                        <h5>save up <span>to</span> 30%</h5>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //special-deals -->
    <!-- new-products -->
    <div class="new-products">
        <div class="container">
            <h3>Sản phẩm mới</h3>
            <div class="agileinfo_new_products_grids">
                @foreach ($newProducts as $product)
                    <div class="col-md-3 agileinfo_new_products_grid">
                        <div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
                            <div class="hs-wrapper hs-wrapper1">
                                <img src="{{ asset('FrontEnd/images/25.jpg') }}" alt=" " class="img-responsive" />
                                <img src="{{ asset('FrontEnd/images/23.jpg') }}" alt=" " class="img-responsive" />
                                <img src="{{ asset('FrontEnd/images/24.jpg') }}" alt=" " class="img-responsive" />
                                <img src="{{ asset('FrontEnd/images/22.jpg') }}" alt=" " class="img-responsive" />
                                <img src="{{ asset('FrontEnd/images/26.jpg') }}" alt=" " class="img-responsive" />
                                <div class="w3_hs_bottom w3_hs_bottom_sub">
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="modal"
                                                data-target="#myModal{{ $product->Prod_Id }}"><span
                                                    class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h5><a class="product__title"
                                    href="{{ route('details', $product->Prod_Id) }}">{{ $product->Prod_Name }}</a></h5>
                            <div class="simpleCart_shelfItem">
                                <p><span>đ{{ number_format($product->Price) }}</span> <i
                                        class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="{{ $product->Prod_Name }}">
                                    <input type="hidden" name="amount" value="{{ $product->Price }}">
                                    <button type="submit" class="w3ls-cart">Thêm vào giỏ`</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //new-products -->
@endsection
