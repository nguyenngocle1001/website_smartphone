@extends('masterfe')
@section('content')

    <!-- banner -->
    <div class="banner banner10">
        <div class="container">
            <h2>{{ $product->Prod_Name }}</h2>
        </div>
    </div>
    <!-- //banner -->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang
                        chủ</a>
                    <i>/</i>
                </li>
                <li>{{ $product->Prod_Name }}</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- single -->
    <div class="single">
        <div class="container">
            <div class="col-md-4 single-left">
                <div class="flexslider">
                    <ul class="slides">
                        <li data-thumb="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image1 }}">
                            <div class="thumb-image"> <img
                                    src="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image1 }}"
                                    data-imagezoom="true" class="img-responsive" alt=""> </img>
                        </li>
                        <li data-thumb="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image2 }}">
                            <div class="thumb-imag"> <img
                                    src="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image2 }}"
                                    data-imagezoom="true" class="img-responsive" alt=""> </img>
                        </li>
                        <li data-thumb="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image3 }}">
                            <div class="thumb-image"> <img
                                    src="{{ asset('storage/products/') }}/{{ $product->Prod_Id }}/{{ $product->image3 }}"
                                    data-imagezoom="true" class="img-responsive" alt=""> </img>
                        </li>
                    </ul>
                </div>
                <!-- flexslider -->
                <script defer src="{{ asset('FrontEnd/js/jquery.flexslider.js') }}"></script>
                <link rel="stylesheet" href="{{ asset('FrontEnd/css/flexslider.css') }}" type="text/css" media="screen" />
                <script>
                    // Can also be used with $(document).ready()
                    $(window).load(function() {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });

                </script>
                <!-- flexslider -->
                <!-- zooming-effect -->
                <script src="{{ asset('FrontEnd/js/imagezoom.js') }}"></script>
                <!-- //zooming-effect -->
            </div>
            <div class="col-md-8 single-right">
                <h3>{{ $product->Prod_Name }}</h3>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked>
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <div class="description">
                    <h5><i>MÔ TẢ</i></h5>
                    {!! $product->Decription !!}
                </div>
                <div class="color-quality">
                    <div class="color-quality-right">
                        <h5>Số lượng :</h5>
                        <div class="quantity">
                            <div class="quantity-select">
                                <div class="entry value-minus1">&nbsp;</div>
                                <div class="entry value1"><span>1</span></div>
                                <div class="entry value-plus1 active">&nbsp;</div>
                            </div>
                        </div>
                        <!--quantity-->
                        <script>
                            $('.value-plus1').on('click', function() {
                                var divUpd = $(this).parent().find('.value1'),
                                    newVal = parseInt(divUpd.text(), 10) + 1;
                                divUpd.text(newVal);
                            });

                            $('.value-minus1').on('click', function() {
                                var divUpd = $(this).parent().find('.value1'),
                                    newVal = parseInt(divUpd.text(), 10) - 1;
                                if (newVal >= 1) divUpd.text(newVal);
                            });

                        </script>
                        <!--quantity-->

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="simpleCart_shelfItem">
                    <p><span>đ{{ number_format($product->Price) }}</span> <i
                            class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i></p>
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="w3ls_item" value="{{ $product->Prod_Name }}">
                        <input type="hidden" name="amount" value="{{ $product->Price }}">
                        <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                    </form>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="additional_info">
        <div class="container">
            <div class="sap_tabs">
                <div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
                    <div class="resp-tab-item" style="cursor: default" <span>Reviews</span></div>
                    <div class="tab-2 resp-tab-content additional_info_grid">
                        <h4>({{ count($comments) }}) Reviews</h4>
                        @foreach ($comments as $comment)
                            <div class="additional_info_sub_grids">
                                <div class="col-xs-2 additional_info_sub_grid_left">
                                    <img src="{{ asset('storage/avatars') }}/{{ $comment->User_id }}/{{ $comment->Avatar }}"
                                        alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-10 additional_info_sub_grid_right">
                                    <div class="additional_info_sub_grid_rightl">
                                        <p>{{ $comment->User_Name }}</p>
                                        <p>{{ $comment->Content }}</p>
                                    </div>
                                    <div class="additional_info_sub_grid_rightr">
                                        <div class="rating">
                                            <div class="rating-left">
                                                <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                    class="img-responsive">
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                    class="img-responsive">
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" "
                                                    class="img-responsive">
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" "
                                                    class="img-responsive">
                                            </div>
                                            <div class="rating-left">
                                                <img src="{{ asset('FrontEnd/images/star.png') }}" alt=" "
                                                    class="img-responsive">
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                        @endforeach

                        <div class="clearfix"> </div>
                    </div>
                    <div class="review_grids">
                        <h5>Add A Review</h5>
                        <form action="#" method="post">
                            <input type="text" name="Name" value="Name" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                            <textarea name="Review" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Add Your Review';}"
                                required="">Add Your Review</textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('FrontEnd/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#horizontalTab1').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true // 100% fit in a container
                });
            });

        </script>
    </div>
    </div>
    <!-- Related Products -->
    <div class="w3l_related_products">
        <div class="container">
            <h3>Sản phẩm tương tự</h3>
            <ul id="flexiselDemo2">
                @foreach ($relatedPRoducts as $product)
                    <li>
                        <div class="w3l_related_products_grid">
                            <div class="agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper3">
                                    <img src="{{ asset('FrontEnd/images/34.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/35.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/37.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom">
                                        <div class="flex_ecommerce">
                                            <a href="#" data-toggle="modal"
                                                data-target="#myModal{{ $product->Prod_Id }}"><span
                                                    class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <h5><a class="product__title"
                                        href="{{ route('details', $product->Prod_Id) }}">{{ $product->Prod_Name }}</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p class="flexisel_ecommerce_cart"><span>đ{{ number_format($product->Price) }}</span> <i
                                            class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="w3ls_item" value="Kid's Toy">
                                        <input type="hidden" name="amount" value="{{ $product->Price }}">
                                        <button type="submit" class="w3ls-cart">Thêm vào giỏ</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>

            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo2").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });

            </script>
            <script type="text/javascript" src="{{ asset('FrontEnd/js/jquery.flexisel.js') }}"></script>
        </div>
    </div>
    <!-- //Related Products -->
    @foreach ($relatedPRoducts as $product)
        <div class="modal video-modal fade" id="myModal{{ $product->Prod_Id }}" tabindex="-1" role="dialog"
            aria-labelledby="myModal6">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <section>
                        <div class="modal-body">
                            <div class="col-md-5 modal_body_left">
                                <img src="{{ asset('FrontEnd/images/34.jpg') }}" alt=" " class="img-responsive" />
                            </div>
                            <div class="col-md-7 modal_body_right">
                                <h4>{{ $product->Prod_Name }}</h4>
                                <p>{{ $product->Decription }}</p>
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
                                            class="item_price">đ{{ number_format(($product->Price * 90) / 100) }}</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="w3ls_item" value="Kids Toy">
                                        <input type="hidden" name="amount" value="100.00">
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
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

    <!-- //single -->
@endsection
