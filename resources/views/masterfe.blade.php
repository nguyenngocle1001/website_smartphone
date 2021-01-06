<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Electronic Store a Ecommerce Online Shopping Category Bootstrap Responsive Website Template | Home ::
        w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
 SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //for-mobile-apps -->
    <!-- Custom Theme files -->
    <link href="{{ asset('FrontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('FrontEnd/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('FrontEnd/css/fasthover.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('FrontEnd/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- font-awesome icons -->
    <link href="{{ asset('FrontEnd/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{ asset('FrontEnd/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('FrontEnd/css/jquery.countdown.css') }}" /> <!-- countdown -->
    <!-- //js -->
    <!-- web fonts -->
    <link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link
        href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <!-- //web fonts -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });

    </script>
    <!-- //end-smooth-scrolling -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ asset('FrontEnd/js/bootstrap-3.1.1.min.js') }}"></script>
    <!-- //for bootstrap working -->
    <!-- header modal -->
    <div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;</button>
                    <h4 class="modal-title" id="myModalLabel">Đừng vội, Đăng nhập ngay bây giờ!</h4>
                </div>
                <div class="modal-body modal-body-sub">
                    <div class="row">
                        <div class="col-md-8 modal_body_left modal_body_left1"
                            style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
                            <div class="sap_tabs">
                                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                    <ul>
                                        <li class="resp-tab-item" aria-controls="tab_item-0"><span>Đăng nhập</span></li>
                                        <li class="resp-tab-item" aria-controls="tab_item-1"><span>Đăng ký</span></li>
                                    </ul>
                                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="{{route('login')}}" method="post">
                                                    @csrf
                                                    <input name="username" placeholder="Tên đăng nhập" type="text"
                                                        required="">
                                                    <input name="password" placeholder="Mật khẩu" type="password"
                                                        required="">
                                                    <div class="sign-up">
                                                        <input type="submit" value="Đăng nhập" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                        <div class="facts">
                                            <div class="register">
                                                <form action="#" method="post">
                                                    <input placeholder="Tên người dùng" name="Name" type="text"
                                                        required="">
                                                    <input placeholder="Địa chỉ email" name="Email" type="email"
                                                        required="">
                                                    <input placeholder="Mật khẩu" name="Password" type="password"
                                                        required="">
                                                    <input placeholder="Xác nhận mật khẩu" name="Password"
                                                        type="password" required="">
                                                    <div class="sign-up">
                                                        <input type="submit" value="Tạo tài khoản" />
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src="{{ asset('FrontEnd/js/easyResponsiveTabs.js') }}" type="text/javascript">
                            </script>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#horizontalTab').easyResponsiveTabs({
                                        type: 'default', //Types: default, vertical, accordion           
                                        width: 'auto', //auto or any width like 600px
                                        fit: true // 100% fit in a container
                                    });
                                });

                            </script>
                            <div id="OR" class="hidden-xs">HOẶC</div>
                        </div>
                        <div class="col-md-4 modal_body_right modal_body_right1">
                            <div class="row text-center sign-with">
                                <div class="col-md-12">
                                    <h3 class="other-nw">ĐĂNG NHẬP VỚI</h3>
                                </div>
                                <div class="col-md-12">
                                    <ul class="social">
                                        <li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
                                        <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
                                        <li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
                                        <li class="social_behance"><a href="#" class="entypo-behance"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header modal -->
    <!-- header -->
    <div class="header" id="home1">
        <div class="container">
            <div class="w3l_login">
                <a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user"
                        aria-hidden="true">
                              
                </span></a>
                
            </div>
            <div style="padding-top: 10px ;">
                @if (Session::get('user_name') != null)
                        {{Session::get('user_name')}}
                        <a href="{{URL::to('/logout')}}">Thoát</a>
                        <script>
                            $('#myModal88').remove();
                        </script>
                        @endif  
            </div>
            <div class="w3l_logo">
                <h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
                        aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <input type="text" name="search" placeholder="tìm kiếm...">
                        <input type="submit" value="Tìm">
                    </form>
                </div>
            </div>
            <div class="cart cart box_1">
                <form action="#" method="post" class="last">
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down"
                            aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation">

    </div>
    <!-- //navigation -->
    @yield('content')
    <!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Bản tin</h3>
                <p>Nhập mail của bạn, chúng tôi sẽ báo cho bạn khi có tin tức mới!</p>
            </div>
            <div class="col-md-6 w3agile_newsletter_right">
                <form action="#" method="post">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="submit" value="" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Liên hệ</h3>
                    <p>Liên hệ với chúng tôi!</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>300A An Phú Đông, Quận 12,
                            tp Hồ Chí Minh</span>
                        </li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a
                                href="mailto:nguyenngocle1001@gmail.com">nguyenngocle1001@gmail.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+84 919 823 185</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Thông tin</h3>
                    <ul class="info">
                        <li><a href="">Thông tin</a></li>
                        <li><a href="">Phản hồi</a></li>
                        <li><a href="">Sản phẩm đặc biệt</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>mặt hàng</h3>
                    <ul class="info">
                        <li><a href="">Điện thoại</a></li>
                        <li><a href="">Máy tính bảng</a></li>
                        <li><a href="">Máy cũ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Nổi bật</h3>
                    <ul class="info">
                        <li><a href="route('home')">Trang chủ</a></li>
                    </ul>
                    <h4>Theo dõi chúng tôi</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                            <li><a href="#" class="google"> </a></li>
                            <li><a href="#" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="{{ asset('FrontEnd/images/arrow.png') }}" alt=" "
                            class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2020 Electronic Store. Project PHP</p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- cart-js -->
    <script src="{{ asset('FrontEnd/js/minicart.js') }}"></script>
    <script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function(evt) {
            var items, len, i;

            if (this.subtotal() > 0) {
                items = this.items();

                for (i = 0, len = items.length; i < len; i++) {}
            }
        });

    </script>
    <!-- //cart-js -->

    <!-- ajax load navigation -->
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                header: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'GET',
                cache: false,
                url: "{{ route('navigation') }}",
                success: function(data) {
                    $('.navigation').html(data);
                }
            });
        });

    </script>
    <!-- ajax load navigation -->

</body>

</html>
