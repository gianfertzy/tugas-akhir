<!doctype html>
<html lang="zxx">
@php
    $auth = Auth::user();


    if(isset($auth->id)){
        $keranjang = App\Models\Keranjang::with('produk')->where('user_id', $auth->id)->with('produk')->get();
        $status = true;
    } else {
        $status = false;
    }


@endphp


<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>FerStore - Handphone Store WooCommerce</title>

    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="images/x-icon"/>

    <!-- css include -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/uikit.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css') }}">
</head>

<body>

    <div class="body_wrap">

        <!-- preloder start  -->
        <div class="preloder_part">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
        <!-- preloder end  -->

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header start -->
        <header class="header header__style-one">
            <div class="container">
                <div class="header__middle ul_li_between justify-content-xs-center">
                    <div class="header__logo">
                        <a href="/">
                            <img src="{{asset('assets/img/logo/logo.svg')}}" alt="">
                        </a>
                    </div>
                    <form class="header__search-box" action="{{route('user.produk.cari')}}" method="get" >
						<input type="text" name="cari" id="search" placeholder="Search For Products"
							required value="{{request()->get('cari')}}" />
						<button type="submit"><i class="far fa-search"></i>
						</button>
					</form>
                    <div class="header__lang ul_li">
                        <div class="header__language mr-15">
                            <ul>
                                <li><a href="#!" class="lang-btn">IDR <i class="far fa-chevron-down"></i></a>
                                    <ul class="lang_sub_list">
                                        <li><a href="#">IDR</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__icons ul_li">

                        <div class="icon">

                            @if ($status)
                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('assets/img/icon/user.svg') }}" alt="">
                                </button>
                            
                                <div class="dropdown-menu dropdown-menu-end">
                                    <h6 class="dropdown-header">Welcome {{Auth::user()->name}}!</h6>
                                    <a class="dropdown-item" href="{{ route('user.index') }}" ><i class="mdi mdi-account-circle text-muted fs-17 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" ><i class="mdi mdi-account-circle text-muted fs-17 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </div>
                            </div>
                            @endif
                        </div>
                        @if ($status)
                        <div class="cart_btn icon">
                            <img src="{{asset('assets/img/icon/shopping_bag.svg') }}" alt="">
                            <span class="count">{{count($keranjang)}}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
                <div class="container">
                    <div class="header__wrap ul_li_between">
                        <div class="header__cat ul_li" >
                            <div class="hamburger_menu">
                                <a href="javascript:void(0);" class="active">
                                    <div class="icon bar">
                                        <span><i class="fal fa-bars"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        @if ($status)
                        <div class="login-sign-btn">
                            <a class="thm-btn" href="{{route('login')}}">
                                <span class="btn-wrap">
                                    <span>Haloo, {{$auth->name}}</span>
                                    <span>Haloo, {{$auth->name}}</span>
                                </span>
                            </a>
                        </div>
                        @else

                        <div class="login-sign-btn">
                            <a class="thm-btn" href="{{route('login')}}">
                                <span class="btn-wrap">
                                    <span>Login / Sign Up</span>
                                    <span>Login / Sign Up</span>
                                </span>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </header> 
        <!-- header end -->

         <!-- slide-bar start -->
         <aside class="slide-bar">
             <div class="close-mobile-menu">
                 <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
                </div>

                @if ($status)
            <!-- sidebar-info start -->
            <div class="cart_sidebar">
                <button type="button" class="cart_close_btn"><i class="fal fa-times"></i></button>
                <h2 class="heading_title text-uppercase">Cart Items - <span>{{count($keranjang)}}</span></h2>
                <div class="cart_items_list">
                    @php
                        $total=0;
                    @endphp
                    @foreach ($keranjang as $item)
                    <div class="cart_item">
                        <div class="item_image">
                            <img src="{{asset($item->produk->image)}}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <h4 class="item_title">
                                {{$item->produk->name}}
                            </h4>
                            <h4 class="item_title">
                                Qty: {{$item->qty}}
                            </h4>
                            <span class="item_price">Rp. {{number_format($item->produk->price * $item->qty)}}</span>
                            <a href="{{route('user.keranjang.delete', ['id' => $item->id])}}" class="remove_btn"><i class="fal fa-times"></i></a>
                        </div>
                    </div>
                    @php
                        $total += $item->produk->price * $item->qty;
                    @endphp
                    @endforeach
                </div>
                <div class="total_price text-uppercase">
                    <span>Total:</span>
                    <span>Rp. {{number_format($total)}}</span>
                </div>
                <ul class="btns_group ul_li">
                    <li><a href="{{route('user.keranjang')}}" class="thm-btn">
                        <span class="btn-wrap">
                            <span>View Cart</span>
                            <span>View Cart</span>
                        </span>
                    </a></li>
                </ul>
            </div>
            @endif
            <!-- sidebar-info end -->
            <nav class="side-mobile-menu">
                <ul id="mobile-menu-active">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('user.produk')}}">Produk</a></li>
                    @if ($status)
                    <li><a href="{{route('user.order')}}">Order</a></li>
                    <li><a href="{{route('user.alamat')}}">Alamat</a></li>
                    @endif
                </ul>
            </nav>

            <!-- side-mobile-menu start -->
            <!-- side-mobile-menu end -->
        </aside>

        <div class="body-overlay"></div>
        <!-- slide-bar end -->

        <div class="container">
            @yield('content')
        </div>

        <!-- footer start -->
        <footer class="footer" data-background="assets/img/bg/footer_bg.jpg">
            <div class="container">
                <div class="footer__main pt-90 pb-90">
                    <div class="row mt-none-40">
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <div class="footer__logo mb-20">
                                <a href="/"><img src="assets/img/logo/logo.svg" alt=""></a>
                            </div>
                            <p>4517 Washington Ave. Manchester, Kentucky 39495 ashington Ave. Manchester,</p>
                            <ul class="footer__info mt-30">
                                <li><i class="far fa-map-marker-alt"></i>254 Lillian Blvd, Holbrook</li>
                                <li><i class="fas fa-phone"></i>1-800-654-3210</li>
                            </ul>
                            <div class="apps-img mt-15 ul_li">
                                <div class="app mt-15">
                                    <a href="#!"><img src="assets/img/icon/google_play.png" alt=""></a>
                                </div>
                                <div class="app mt-15">
                                    <a href="#!"><img src="assets/img/icon/app_store.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Find It Fast</h2>
                            <ul class="quick-links">
                                <li><a href="#!">Laptops & Computers</a></li>
                                <li><a href="#!">Cameras & Photography</a></li>
                                <li><a href="#!">Smart Phones & Tablets</a></li>
                                <li><a href="#!">Video Games & Consoles</a></li>
                                <li><a href="#!">TV & Audio</a></li>
                                <li><a href="#!">Gadgets</a></li>
                                <li><a href="#!">Waterproof Headphones</a></li>
                            </ul>
                        </div>

                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Quick Links</h2>
                            <ul class="quick-links">
                                <li><a href="#!">Your Account</a></li>
                                <li><a href="#!">Returns & Exchanges</a></li>
                                <li><a href="#!">Return Center</a></li>
                                <li><a href="#!">Purchase Hisotry</a></li>
                                <li><a href="#!">App Download</a></li>
                                <li><a href="#!">Latest News Blog</a></li>
                                <li><a href="#!">Shipping & Delivery</a></li>
                            </ul>
                        </div>
                        <div class="footer__widget col-lg-3 col-md-6 mt-40">
                            <h2 class="title">Service us</h2>
                            <ul class="category">
                                <li><a href="#!">Support Center</a></li>
                                <li><a href="#!">Term & Conditions</a></li>
                                <li><a href="#!">Shipping</a></li>
                                <li><a href="#!">Privacy Policy</a></li>
                                <li><a href="#!">Help</a></li>
                                <li><a href="#!">Products Return</a></li>
                                <li><a href="#!">FAQS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom ul_li_center">
                    <div class="footer__copyright mt-15">
                        &copy; 2022 <a href="#!">Themexriver</a> . All Rights Reserved.
                    </div>
                    <div class="footer__social mt-15">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-instagram"></i></a>
                        <a href="#!"><i class="fab fa-youtube"></i></a>
                        <a href="#!"><i class="fab fa-pinterest"></i></a>
                    </div>
                    <div class="payment_method mt-15">
                        <img src="assets/img/bg/payment_method.png" alt="">
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->



    </div>

    <!-- jquery include -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/uikit.min.js') }}"></script>
    <script src="{{ asset('assets/js/resize-sensor.min.js') }}"></script>
    <script src="{{ asset('assets/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jqueryui.js') }}"></script>
    <script src="{{ asset('assets/js/touchspin.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @yield('js')
</body>

</html>
