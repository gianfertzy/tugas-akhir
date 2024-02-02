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
                        <span>Cart</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- start cart-section -->
    <section class="cart-section woocommerce-cart pb-80">
        <form method="post" action="{{ route('user.keranjang.update') }}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="woocommerce">
                            <form action="/" method="post">
                                <table class="shop_table shop_table_responsive cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $subtotal=0; foreach($keranjangs as $keranjang): ?>
                                            <tr class="cart_single">
                                                <td class="product-remove">
                                                    <a href="{{ route('user.keranjang.delete',['id' => $keranjang->id]) }}" class="remove" title="Remove this item" data-product_id="8" data-product_sku="my name is">&times;</a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="{{route('user.produk.detail', ['id' => $keranjang->produk->id])}}">
                                                        <img width="57" height="70" src="{{asset($keranjang->produk->image)}}"
                                                    class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="#!"  />
                                                    </a>
                                                </td>
                                                <td class="product-name" data-title="Product">
                                                    <a href="#!">{{ $keranjang->produk->name }}</a> </td>

                                                <td class="product-price" data-title="Price">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">IDR </span>{{number_format($keranjang->produk->price, 2, '.', ',')}}</span>
                                                </td>
                                                <td class="product-quantity" data-title="Quantity">
                                                    <div class="quantity">
                                                        <input type="hidden" name="id[]" value="{{ $keranjang->id }}">
                                                        <input type="number" step="1" min="0" name="qty[]" value="{{$keranjang->qty}}" title="Qty" class="product-count input-text qty text product-count form-control" />
                                                    </div>
                                                </td>
                                                <?php
                                                    $total = $keranjang->price * $keranjang->qty;
                                                    $subtotal = $subtotal + $total;
                                                ?>
                                                <td class="product-subtotal" data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">IDR </span>{{number_format($total, 2, '.', ',')}}</span>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>

                                    </tbody>

                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <button type="submit" class="checkout-button thm-btn thm-btn__2 no-icon br-0 alt wc-forward">
                                        <span class="btn-wrap">
                                            <span>Update keranjang</span>
                                            <span>Update keranjang</span>
                                        </span>
                                    </button>
                                </div>
                            </form>

                            <div class="cart-collaterals">
                                <div class="cart_totals calculated_shipping">
                                    <h2>Cart Totals</h2>
                                    <table class="shop_table shop_table_responsive">
                                        <tr class="cart-subtotal">
                                            <th>Total</th>
                                            <td data-title="Subtotal"><span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">IDR </span>{{number_format($subtotal, 2, '.', ',')}}</span>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="wc-proceed-to-checkout">
                                        @if($cekalamat > 0)
                                            <a href="{{route('user.checkout')}}" class="checkout-button thm-btn thm-btn__2 no-icon br-0 alt wc-forward">
                                                <span class="btn-wrap">
                                                    <span>Checkout</span>
                                                    <span>Checkout</span>
                                                </span>
                                            </a>
                                            @else
                                            <a href="{{route('user.alamat')}}" class="checkout-button thm-btn thm-btn__2 no-icon br-0 alt wc-forward">
                                                <span class="btn-wrap">
                                                    <span>Atur alamat</span>
                                                    <span>Atur alamat</span>
                                                </span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- end cart-section -->

</main>

@endsection
