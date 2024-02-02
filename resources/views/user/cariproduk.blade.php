@extends('user.app')
@section('content')

<main>

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

    <div class="product pt-40">
        <div class="container mxw_1360">
            <div class="row mt-20">
                <div class="col-lg-12 mt-30">
                    <div class="rd-products__nav ul_li_between mb-20">
                        <h2 class="section-heading"><span>Product</span></h2>
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tx-tab-00" data-bs-toggle="tab"
                                    data-bs-target="#tx-tab0" type="button" role="tab" aria-controls="tx-tab0"
                                    aria-selected="false">{{request()->get('cari')}}</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-3">
                        <div class="tab-pane animated fadeInUp active" id="tx-tab0" role="tabpanel"
                            aria-labelledby="tx-tab-00">
                            <div class="row g-0">
                                @foreach ($produks as $prod)
                                    <div class="col-lg-3 col-md-6">
                                        <div class="product__item style-2">
                                            <div class="product__img text-center pos-rel">
                                                <a href="{{route('user.produk.detail', ['id' => $prod->id])}}"><img src="{{ asset($prod->image) }}"
                                                        alt=""></a>

                                            </div>
                                            <div class="product__content">
                                                <h2 class="product__title mt-2"><a href="{{route('user.produk.detail', ['id' => $prod->id])}}">{{$prod->name}}</a></h2>
                                                <span class="product__available">Available: <span>{{$prod->stok}}</span></span>
                                                <div class="product__progress progress color-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <h4 class="product__price"><span class="new">{{ number_format($prod->price, 2, '.', ',') }}</span></h4>
                                            </div>
                                            <div class="product__action-wrap">
                                                <span class="plus-icon"><i class="fal fa-plus"></i></span>
                                                <ul class="product__action2">
                                                    <li><a href="#!"><i class="far fa-compress-alt"></i></a></li>
                                                    <li><a href="#!"><i class="far fa-shopping-basket"></i></a>
                                                    </li>
                                                </ul>
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
    </div>


</main>

@endsection
