@extends('user.app')
@section('content')

<main>
    <section class="breadcrumb-area">
        <div class="container">
            <div class="radios-breadcrumb breadcrumbs">
                <ul class="list-unstyled d-flex align-items-center">
                    <li class="radiosbcrumb-item radiosbcrumb-begin">
                        <a href="index.html"><span>Home</span></a>
                    </li>
                    <li class="radiosbcrumb-item radiosbcrumb-end">
                        <span>Order</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="site-section">
            <div class="container">
                <div class="title8 section-big-my-space" data-aos="fade-up">
                    <h4>Belum Dibayar</h4>
                </div>
                <div class="row mb-3 mt-3">
                    <div class="col-md-12 card">
                    <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3 mb-3">
                            <thead class="thead-dark">
                                <tr>
                                <th class="col-md-3 product-thumbnail">Invoice</th>
                                <th class="col-md-3 product-name">Total</th>
                                <th class="col-md-3 product-price">Status</th>
                                <th class="col-md-3 product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order as $o)
                                <tr>
                                    <td>{{ $o->invoice }}</td>
                                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                    <td>{{ $o->name }}</td>
                                    <td>
                                    <a href="{{ route('user.order.pembayaran',['id' => $o->id]) }}" class="btn btn-success">Bayar</a>
                                    <a href="{{ route('user.order.pesanandibatalkan',['id' => $o->id]) }}" onclick="return confirm('Yakin ingin membatalkan pesanan')" class="btn btn-danger">Batalkan</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="title8 section-big-my-space" data-aos="fade-up">
                        <h4>Sedang Dalam Proses</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 card">
                    <div class="table-responsive">
                    <div class="table-responsive">                        
                        <table class="table table-bordered mt-3 mb-3">
                            <thead class="thead-dark">
                                <tr>
                                <th class="col-md-3 product-thumbnail">Invoice</th>
                                <th class="col-md-3 product-name">Total</th>
                                <th class="col-md-3 product-price">Status</th>
                                <th class="col-md-3 product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dicek as $o)
                                <tr>
                                    <td>{{ $o->invoice }}</td>
                                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                    <td>
                                        @if($o->name == 'Perlu Di Cek')
                                        Sedang Di Cek
                                        @else
                                        {{ $o->name }}
                                        @endif
                                    </td>
                                    <td>
                                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="title8 section-big-my-space" data-aos="fade-up">
                        <h4>Riwayat Pemesanan</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12 card">
                    <div class="table-responsive">
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3 mb-3">
                            <thead class="thead-dark">
                                <tr>
                                <th class="col-md-3 product-thumbnail">Invoice</th>
                                <th class="col-md-3 product-name">Total</th>
                                <th class="col-md-3 product-price">Status</th>
                                <th class="col-md-3 product-quantity" width="20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($histori as $o)
                                <tr>
                                    <td>{{ $o->invoice }}</td>
                                    <td>{{ $o->subtotal + $o->biaya_cod }}</td>
                                    <td>{{ $o->name }}</td>
                                    <td>
                                    <a href="{{ route('user.order.detail',['id' => $o->id]) }}" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
