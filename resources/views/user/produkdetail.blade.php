@extends('user.app')
@section('content')
<main>

    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="radios-breadcrumb breadcrumbs">
                <ul class="list-unstyled d-flex align-items-center">
                    <li class="radiosbcrumb-item radiosbcrumb-begin">
                        <a href="index.html"><span>Home</span></a>
                    </li>
                    <li class="radiosbcrumb-item radiosbcrumb-end">
                        <span>Produk </span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- start shop-single-section -->
    <section class="shop-single-section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-single-wrap mb-30">
                        <div class="product_details_img ">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="pl_thumb">
                                        <img src="{{asset($produk->image)}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 product-details-col">
                    <div class="product-details">
                        <h2>{{$produk->name}}</h2>
                        <div class="price">
                            <span class="current">Rp. {{number_format($produk->price,2 ,'.', ',')}}</span>
                        </div>
                        <p>{{$produk->description}}</p>


                        <div class="thb-product-meta-before mt-20">
                            <div class="product_meta">
                                <span class="posted_in">Merk: {{$produk->merk->name}}</span>
                                <span class="tagged_as">Tags: <a href="#!">Button</a>, <a href="#!">Red</a>, <a href="#!">Tshirt</a></span>
                            </div>
                        </div>

                        <div class="product-option">
                            <form class="form" method="post" action="{{route('user.keranjang.simpan')}}">
                                <input type="hidden" value="{{$produk->id}}" name="products_id">
                                @csrf
                                <div class="product-row">
                                    <div>
                                        <input class="product-count" type="text" value="1" name="qty">
                                    </div>
                                    <div class="add-to-cart-btn">
                                        @auth
                                        <button class="thm-btn thm-btn__2 no-icon" type="submit">

                                            <span class="btn-wrap">
                                                <span>Shop Now</span>
                                                <span>Shop Now</span>
                                            </span>
                                        </button>
                                        @endauth
                                        @guest
                                        <a class="mt-2 thm-btn thm-btn__2 no-icon" href="{{route('login')}}">

                                            <span class="btn-wrap">
                                                <span>Login</span>
                                                <span>Login</span>
                                            </span>
                                        </a>
                                        @endguest
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            {{-- <div class="row">
                <div class="col col-xs-12">
                    <div class="single-product-info">
                        <!-- Nav tabs -->
                        <div class="tablist">
                            <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                                <li><button class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tb-01">Product Details</button></li>
                                <li><button id="tab-two" data-bs-toggle="pill" data-bs-target="#tb-02">Additional imformation</button></li>
                                <li><button id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tb-03">Review (09)</button></li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tb-01">
                                <p>Travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer</p>
                                <p> waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar wallstrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather</p>
                            </div>
                            <div class="tab-pane fade" id="tb-02">
                                <p>Travelling salesman and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer</p>
                                <p> waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar wallstrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather</p>
                            </div>
                            <div class="tab-pane fade" id="tb-03">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 col-xs-12">
                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="{{asset('assets/img/avatar/comments/img_01.jpg') }}" alt="">
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Mice</h4>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="time">
                                                        <span>1 day ago</span>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Helplessly as he looked What's happened to me he thought. It wasn't a dreamtrated magazine and housed in a nice, gilded frame. It showed a lady fitted</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="{{asset('assets/img/avatar/comments/img_02') }}.jpg" alt="">
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Hone</h4>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="time">
                                                        <span>1 day ago</span>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Helplessly as he looked What's happened to me he thought. It wasn't a dreamtrated magazine and housed in a nice, gilded frame. It showed a lady fitted</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="client-rv">
                                            <div class="client-pic">
                                                <img src="{{asset('assets/img/avatar/comments/img_01') }}.jpg" alt="">
                                            </div>
                                            <div class="details">
                                                <div class="name-rating-time">
                                                    <div class="name-rating">
                                                        <div>
                                                            <h4>Piloa</h4>
                                                        </div>
                                                        <div class="rating">
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                            <i class="fi flaticon-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="time">
                                                        <span>2 days ago</span>
                                                    </div>
                                                </div>
                                                <div class="review-body">
                                                    <p>Helplessly as he looked What's happened to me he thought. It wasn't a dreamtrated magazine and housed in a nice, gilded frame. It showed a lady fitted</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-lg-6 col-sm-12 col-xs-12 review-form-wrapper">
                                        <div class="review-form">
                                            <h4>Here you can review the item</h4>
                                            <form>
                                                <div>
                                                    <input type="text" class="form-control" placeholder="Name *" required="">
                                                </div>
                                                <div>
                                                    <input type="email" class="form-control" placeholder="Email *" required="">
                                                </div>
                                                <div>
                                                    <textarea class="form-control" placeholder="Review *"></textarea>
                                                </div>
                                                <div class="rating-wrapper">
                                                    <div class="rating">
                                                        <a href="#!" class="star-1">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                        <a href="#!" class="star-1">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                        <a href="#!" class="star-1">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                        <a href="#!" class="star-1">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                        <a href="#!" class="star-1">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </div>
                                                    <div class="submit">
                                                        <button class="thm-btn thm-btn__2 no-icon" type="submit">
                                                            <span class="btn-wrap">
                                                                <span>Shop Now</span>
                                                                <span>Shop Now</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
             <!-- end row -->

            {{-- <div class="row">
                <div class="col col-xs-12">
                    <div class="realted-porduct">
                        <h3>Related product</h3>
                        <div class="shop-area">
                            <ul class="products clearfix">
                                <li class="product">
                                    <div class="product-holder">
                                        <a href="shop-single.html"><img src="{{asset('assets/img/product/img_165.png') }}" alt=""></a>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <div class="product__review ul_li">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Rokinon Xeen CF 16mm T2.6 Pro Cinema Wide</a></h2>
                                        <span class="product__available">Available: <span>334</span></span>
                                        <div class="product__progress progress color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product-holder">
                                        <a href="shop-single.html"><img src="{{asset('assets/img/product/img_166.png') }}" alt=""></a>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <div class="product__review ul_li">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Tab M10 Plus, FHD Android Tablet, Processor</a></h2>
                                        <span class="product__available">Available: <span>334</span></span>
                                        <div class="product__progress progress color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                    <span class="product__badge color-2"><span>New</span></span>
                                </li>
                                <li class="product">
                                    <div class="product-holder">
                                        <a href="shop-single.html"><img src="{{asset('assets/img/product/img_167.png') }}" alt=""></a>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <div class="product__review ul_li">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Portable 2TB External Hard Drive Portable HDD USB</a></h2>
                                        <span class="product__available">Available: <span>334</span></span>
                                        <div class="product__progress progress color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product-holder">
                                        <a href="shop-single.html"><img src="{{asset('assets/img/product/img_168.png') }}" alt=""></a>
                                        <ul class="product__action">
                                            <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                            <li><a href="#!"><i class="far fa-shopping-basket"></i></a></li>
                                            <li><a href="#!"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <div class="product__review ul_li">
                                            <ul class="rating-star ul_li mr-10">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                            <span>(126) Review</span>
                                        </div>
                                        <h2 class="product__title"><a href="shop-single.html">Skullcandy Dime True In-Ear Earbuds – Golden</a></h2>
                                        <span class="product__available">Available: <span>334</span></span>
                                        <div class="product__progress progress color-primary">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="product__price"><span class="new">$30.52</span><span class="old">$28.52</span></h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div> <!-- end of container -->
    </section>
    <!-- end of shop-single-section -->


</main>


{{-- <div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>Produk</h2>
                        <ul>
                            <li><a href="javascript:void(0)">Home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section start -->
<section class="section-big-pt-space b-g-light">
    <form action="{{ route('user.keranjang.simpan') }}" method="post">
        @csrf
        @if(Route::has('login'))
        @auth
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        @endauth
    @endif
    <div class="collection-wrapper">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-slick no-arrow">
                        <div><img src="{{ asset($produk->image) }}" alt="" class="img-fluid  image_zoom_cls-0"></div>
                    </div>
                </div>
                <div class="col-lg-7 rtl-text">
                  <div class="product-right">
                      <div class="pro-group">
                        <h2>{{ $produk->name }}</h2>
                        <ul class="pro-price">
                          <li>Rp. {{number_format($produk->price,2 ,'.', ',')}}</li>
                        </ul>
                    </div>
                    <input type="hidden" name="products_id" value="{{ $produk->id }}">
                    <input type="hidden" value="{{ $produk->stok }}" id="sisastok">
                      <div id="selectSize" class="pro-group addeffect-section product-description border-product mb-0">
                          <h6 class="product-title">quantity</h6>
                          <div class="qty-box">
                            <div class="input-group">
                              <button class="qty-minus" type="button"></button>
                              <input class="qty-adj form-control" name="qty" type="number" min="1" value="1"/>
                              <button type="button" class="qty-plus"></button>
                            </div>
                          </div>
                          <div class="product-buttons">
                            <button href="javascript:void(0)"  id="cartEffect" class="btn cart-btn btn-normal tooltip-top" type="submit" data-tippy-content="Add to cart">
                              <i class="fa fa-shopping-cart"></i>
                              add to cart
                            </button>
                          </div>
                      </div>
                      <div class="pro-group">
                          <div class="delivery-lable">
                            Tersisa {{$produk->stok}}
                          </div>
                        </div>
                      </div>
                      <div class="pro-group">
                        <div class="product-offer">
                          <h6 class="product-title"><i class="fa fa-tags"></i>Deskripsi </h6>
                          <div class="offer-contain">
                            <ul>
                              <li>
                                <div>
                                  <h5>{{ $produk->description }}</h5>
                                </div>
                              </li>
                            </ul>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</form>

</section> --}}
<!-- Section ends -->



<script>
    document.addEventListener("DOMContentLoaded", () => {
        $('.js-minus').on('click', function(e){
			e.preventDefault();
			if ( $(this).closest('.input-group').find('.form-control').val() != 0  ) {
				$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) - 1);
			} else {
				$(this).closest('.input-group').find('.form-control').val(parseInt(0));
			}
		});
		$('.js-plus').on('click', function(e){
			e.preventDefault();
			$(this).closest('.input-group').find('.form-control').val(parseInt($(this).closest('.input-group').find('.form-control').val()) + 1);
		});
});

</script>
@endsection
