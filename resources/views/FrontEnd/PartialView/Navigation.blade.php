<div class="container">
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse"
                data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
                <li><a href="index.html" class="act">Trang chủ</a></li>
                <!-- Mega Menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm<b class="caret"></b></a>
                    <ul class="dropdown-menu multi-column columns-3">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>Danh mục</h6>
                                    @foreach ($categorys as $category)
                                        <li><a
                                                href="{{ route('category', $category->Cate_Id) }}">{{ $category->Cate_name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="multi-column-dropdown">
                                    <h6>Nhà sản xuất</h6>
                                    @foreach ($manufactures as $manufacture)
                                        <li><a
                                                href="{{ route('manufacture', $manufacture->Manu_Id) }}">{{ $manufacture->Name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="w3ls_products_pos">
                                    <h4>30%<i>Off/-</i></h4>
                                    <img src="{{ asset('FrontEnd/images/1.jpg') }}" alt=" " class=" img-responsive" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </ul>
                </li>
                <li><a href="about.html">Liên lạc</a></li>
                <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Tin tức <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="icons.html">Web Icons</a></li>
                        <li><a href="codes.html">Short Codes</a></li>
                    </ul>
                </li>
                <li><a href="mail.html">Giúp đỡ</a></li>
            </ul>
        </div>
    </nav>
</div>
