@extends('masterfe')
@section('content')
    <div class="banner banner1">
        <div class="container">
            <h2>Ưu đãi tuyệt vời giảm giá<span> cố định </span> <i> 35%</i></h2>
        </div>
    </div>
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Trang
                        chủ</a>
                    <i>/</i>
                </li>
                <li>Sản phẩm</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="mobiles">
        <div class="container">
            <div class="w3ls_mobiles_grids">
                <div class="col-md-12 w3ls_mobiles_grid_right">
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{ asset('FrontEnd/images/46.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3ls_mobiles_grid_right_grid1_pos1">
                                <h3>Di động thông minh giảm giá<span>lên đến</span> 15%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{ asset('FrontEnd/images/47.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3ls_mobiles_grid_right_grid1_pos">
                                <h3>Top 10 <span>di động thông minh </span>mới nhất</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="w3ls_mobiles_grid_right_grid2">
                        <div class="w3ls_mobiles_grid_right_grid2_left">
                            <h3>Kết quả tìm kiếm:</h3>
                        </div>
                        <div class="w3ls_mobiles_grid_right_grid2_right">
                            <select name="select_item" class="select_item" onchange='genderChanged(this)'>
                                <option selected="selected">Sắp xếp mặc định</option>
                                <option>Mới nhất</option>
                                <option>Giá: từ thấp tới cao</option>
                                <option>Giá: từ cao tới thấp</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3ls_mobiles_grid_right_grid3">
                        @foreach ($products as $product)
                            <div class="col-md-3 agile_ecommerce_tab_left">
                                <div class="hs-wrapper">
                                    <img src="{{ asset('FrontEnd/images/3.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/4.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/5.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/6.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom">
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
                            </div>
                        @endforeach
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product_page_paging">{{ $products->links() }}</div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    @foreach ($products as $product)
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
    <script>
        function genderChanged(obj) {
            console.log(obj.value);
        }

    </script>
@endsection
