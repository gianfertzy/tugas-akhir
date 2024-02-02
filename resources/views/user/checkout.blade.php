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
                        <span>Chekout</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->


    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="row mb-5">
                    <div class="col-md-12">
                      <h2 class="h3 mb-3 text-black">Your Order</h2>
                      <div class="p-3 p-lg-5 border">
                        <form action="{{ route('user.order.simpan') }}" method="POST">
                          @csrf
                        <table class="table site-block-order-table mb-5">
                          <thead>
                            <th>Product</th>
                            <th>Total</th>
                          </thead>
                          <tbody>
                            <?php $subtotal=0;?>
                            @foreach($keranjangs as $keranjang)
                            <tr>
                              <td>{{ $keranjang->nama_produk }} <strong class="mx-2">x</strong> {{ $keranjang->qty }}</td>
                              <?php
                                $total = $keranjang->price * $keranjang->qty;
                                $subtotal = $subtotal + $total;
                            ?>
                              <td>Rp. {{ number_format($total,2,',','.') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                              <td>
                                Ongkir
                              </td>
                              <td>
                                Rp .{{ number_format($ongkir,2,',','.') }}
                              </td>
                            </tr>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Jumlah Pembayaran</strong></td>
                              <td class="text-black font-weight-bold">
                              <?php $alltotal = $subtotal + $ongkir; ?>
                              <strong>Rp. {{ number_format($alltotal,2,',','.') }}</strong></td>
                            </tr>
                            <tr>
                            <td>Alamat Penerima</td>
                            <td>{{ $alamat->detail }}, {{ $alamat->kota }}, {{ $alamat->prov }}</td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="form-group">
                          <label for="">Catatan</label>
                          <textarea name="pesan" class="form-control"></textarea>
                        </div>
                        <div class="form-group mb-3">
                          <label for="">No telepon yang bisa dihubungi</label>
                          <input type="text" name="no_hp" id="" class="form-control">
                        </div>
                        <input type="hidden" name="invoice" value="{{ $invoice }}">
                        <input type="hidden" name="subtotal" value="{{ $alltotal }}">
                        <input type="hidden" name="ongkir" value="{{ $ongkir }}">
                        <input type="hidden" name="metode_pembayaran" value="trf">
                        <div class="form-group">
                          <button class="btn btn-primary btn-lg py-3 btn-block" type="submit">Pesan Sekarang</button>
                          <br>
                          <small>Mohon periksa alamat penerima dengan benar agar tidak terjadi salah pengiriman</small>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>
</main>
@endsection
