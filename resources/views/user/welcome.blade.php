@extends('user.app')
@section('content')
    <main>

        <!-- hero start -->
        
        <div class="hero hero__height ul_li" data-background="assets/img/bg/hero_bg.jpg">
            <div class="container">
                <div class="row align-items-center mt-none-30">
                    <div class="col-lg-12 col-md-6 mt-30">
                        <div class="hot-deal__slide-wrap style-2 bg-white ">
                            <h2 class="section-heading mb-25"><span>Top Product</span></h2>
                            <div class="hot-deal__slide tx-arrow">
                                @foreach ($produk10 as $item)
                                    <div class="hot-deal__item text-center">
                                        <div class="thumb">
                                            <a href="{{route('user.produk.detail', ['id' => $item->id])}}">
                                                <img src="{{ asset($item->image) }}" alt="">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h2 class="title mb-15"><a href="{{route('user.produk.detail', ['id' => $item->id])}}">{{ $item->name }}</a></h2>
                                            <h4 class="product__price mb-20"><span class="new">Rp.
                                                    {{ number_format($item->price, 2, '.', ',') }}</span><span
                                                    class="old">Rp.
                                                    {{ number_format($item->price + 10000, 2, '.', ',') }}</span></h4>
                                            <div class="mxw_216 m-auto">
                                                <div class="product__progress progress mb-6 h-8 color-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="ul_li_between">
                                                    <span class="product__available">Available:
                                                        <span>{{ $item->stok }}</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero end -->

        <!-- feature start -->
        <div class="feature pt-40 pb-30">
            <div class="container">
                <div class="feature__wrap ul_li">
                    <div class="feature__item ul_li">
                        <div class="icon">
                            <img src="assets/img/icon/feat_01.svg" alt="">
                        </div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>Free shipping over $100</p>
                        </div>
                    </div>
                    <div class="feature__item ul_li">
                        <div class="icon">
                            <img src="assets/img/icon/feat_02.svg" alt="">
                        </div>
                        <div class="content">
                            <h3>Payment Secure</h3>
                            <p>Got 100% Payment Safe</p>
                        </div>
                    </div>
                    <div class="feature__item ul_li">
                        <div class="icon">
                            <img src="assets/img/icon/feat_03.svg" alt="">
                        </div>
                        <div class="content">
                            <h3>Support 24/7</h3>
                            <p>Top quialty 24/7 Support</p>
                        </div>
                    </div>
                    <div class="feature__item ul_li">
                        <div class="icon">
                            <img src="assets/img/icon/feat_04.svg" alt="">
                        </div>
                        <div class="content">
                            <h3>100% Money Back</h3>
                            <p>Cutomers Money Backs</p>
                        </div>
                    </div>
                    <div class="feature__item ul_li">
                        <div class="icon">
                            <img src="assets/img/icon/feat_05.svg" alt="">
                        </div>
                        <div class="content">
                            <h3>Quality Products</h3>
                            <p>We Insure Product Quailty</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature end -->

        <!-- rd slide product start -->
        <div class="rd-slide-product">
            <div class="container">
                <div class="row mt-none-30">
                    <div class="col-lg-12 mt-30">
                        <div class="rd-slide-products">
                            <h2 class="section-heading mb-25"><span>Trending Product</span></h2>
                            <div class="rd-product__slide tx-arrow">
                                @foreach ($produks as $item)
                                <div class="rd-product__slide-item">
                                        <div class="product__item">
                                            <div class="product__img text-center pos-rel mb-5">
                                                <a href="{{route('user.produk.detail', ['id' => $item->id])}}"><img src="{{ asset($item->image) }}"
                                                        alt=""></a>
                                            </div>
                                            <h2 class="product__title"><a href="{{route('user.produk.detail', ['id' => $item->id])}}">{{ $item->name }}</a>
                                            </h2>
                                            <h4 class="product__price"><span class="new">Rp. {{number_format($item->price)}}</span></h4>
                                        </div>
                                    </div>

                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rd slide product end -->
    </main>
@endsection
