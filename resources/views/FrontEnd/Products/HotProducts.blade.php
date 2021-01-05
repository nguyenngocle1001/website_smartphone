@extends('masterfe')
@section('content')
    <div class="banner banner1">
        <div class="container">
            <h2>Ưu đãi hấp dẫn<span>Điện thoại</span> giảm mạnh <i>35% giá gốc</i></h2>
        </div>
    </div>
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
                    <i>/</i>
                </li>
                <li>Sản phẩm hot</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="mobiles">
        <div class="container">
            <div class="w3ls_mobiles_grids">
                <div class="col-md-4 w3ls_mobiles_grid_left">
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Categories</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                    class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                        aria-labelledby="headingOne">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                <li><a href="products.html">Mobiles</a></li>
                                                <li><a href="products1.html">Laptop</a></li>
                                                <li><a href="products2.html">Tv</a></li>
                                                <li><a href="products.html">Wearables</a></li>
                                                <li><a href="products2.html">Refrigerator</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title asd">
                                            <a class="pa_italic collapsed" role="button" data-toggle="collapse"
                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i
                                                    class="glyphicon glyphicon-minus" aria-hidden="true"></i>Accessories
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="headingTwo">
                                        <div class="panel-body panel_text">
                                            <ul>
                                                <li><a href="products2.html">Grinder</a></li>
                                                <li><a href="products2.html">Heater</a></li>
                                                <li><a href="products2.html">Kid's Toys</a></li>
                                                <li><a href="products2.html">Filters</a></li>
                                                <li><a href="products2.html">AC</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="panel_bottom">
                                <li><a href="products.html">Summer Store</a></li>
                                <li><a href="products.html">Featured Brands</a></li>
                                <li><a href="products.html">Today's Deals</a></li>
                                <li><a href="products.html">Latest Watches</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Color</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="ecommerce_color">
                                <ul>
                                    <li><a href="#"><i></i> Red(5)</a></li>
                                    <li><a href="#"><i></i> Brown(2)</a></li>
                                    <li><a href="#"><i></i> Yellow(3)</a></li>
                                    <li><a href="#"><i></i> Violet(6)</a></li>
                                    <li><a href="#"><i></i> Orange(2)</a></li>
                                    <li><a href="#"><i></i> Blue(1)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w3ls_mobiles_grid_left_grid">
                        <h3>Price</h3>
                        <div class="w3ls_mobiles_grid_left_grid_sub">
                            <div class="ecommerce_color ecommerce_size">
                                <ul>
                                    <li><a href="#">Below $ 100</a></li>
                                    <li><a href="#">$ 100-500</a></li>
                                    <li><a href="#">$ 1k-10k</a></li>
                                    <li><a href="#">$ 10k-20k</a></li>
                                    <li><a href="#">$ Above 20k</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 w3ls_mobiles_grid_right">
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{ asset('FrontEnd/images/46.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3ls_mobiles_grid_right_grid1_pos1">
                                <h3>Di động thông minh<span>giảm giá</span> lên đến 15%</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 w3ls_mobiles_grid_right_left">
                        <div class="w3ls_mobiles_grid_right_grid1">
                            <img src="{{ asset('FrontEnd/images/47.jpg') }}" alt=" " class="img-responsive" />
                            <div class="w3ls_mobiles_grid_right_grid1_pos">
                                <h3>Top 10 <span>Điện thoại & phụ kiện</span> mới nhất</h3>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="w3ls_mobiles_grid_right_grid2">
                        <div class="w3ls_mobiles_grid_right_grid2_left">
                            <h3>Kết quả tìm kiếm:</h3>
                        </div>
                        <div class="w3ls_mobiles_grid_right_grid2_right">
                            <select name="select_item" class="select_item">
                                <option selected="selected">Sắp xếp mặc định</option>
                                <option>Hot</option>
                                <option>Đánh giá</option>
                                <option>Mới nhất</option>
                                <option>Giá thấp tới cao</option>
                                <option>Giá cao tới thấp</option>
                            </select>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="w3ls_mobiles_grid_right_grid3">
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles">
                            <div class="product agile_ecommerce_tab_left mobiles_grid">
                                <div class="hs-wrapper hs-wrapper2">
                                    <img src="{{ asset('FrontEnd/images/31.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/30.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/28.jpg') }}" alt=" " class="img-responsive" />
                                    <img src="{{ asset('FrontEnd/images/29.jpg') }}" alt=" " class="img-responsive" />
                                    <div class="w3_hs_bottom w3_hs_bottom_sub1">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#myModal9"><span
                                                        class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h5><a href="single.html">Smart Phone</a></h5>
                                <div class="simpleCart_shelfItem">
                                    <p><span>$250</span> <i class="item_price">$245</i></p>
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart" />
                                        <input type="hidden" name="add" value="1" />
                                        <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                        <input type="hidden" name="amount" value="245.00" />
                                        <button type="submit" class="w3ls-cart">Add to cart</button>
                                    </form>
                                </div>
                                <div class="mobiles_grid_pos">
                                    <h6>New</h6>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="col-md-5 modal_body_left">
                            <img src="{{ asset('FrontEnd/images/27.jpg') }}" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-md-7 modal_body_right">
                            <h4>Latest Smart Phone </h4>
                            <p>Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore
                                eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum.</p>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="rating-left">
                                    <img src="{{ asset('FrontEnd/images/star-.png') }}" alt=" " class="img-responsive" />
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
                                <p><span>$250</span> <i class="item_price">$245</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" />
                                    <input type="hidden" name="w3ls_item" value="Smart Phone" />
                                    <input type="hidden" name="amount" value="245.00" />
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
@endsection
