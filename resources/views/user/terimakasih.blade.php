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
                        <span>Sukses</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                <span class="icon-check_circle display-3 text-success"></span>
                <h2 class="display-3 text-black">Terimakasih!</h2>
                <p class="lead mb-5">Pesanan Kamu Berhasil Dibuat Dengan No Invoice Silahkan Konfirmasi Pembayaran Lewat Menu Konfirmasi Pembayaran.</p>
                <div class="login-sign-btn">
                    <a class="thm-btn" href="{{ route('user.order') }}">
                        <span class="btn-wrap">
                            <span>Menu pembayaran</span>
                            <span>Menu pembayaran</span>
                        </span>
                    </a>
                </div>
                {{-- <p><a href="{{ route('user.order') }}" class="btn btn-sm btn-primary">Menu Pembayaran</a></p> --}}
                </div>
            </div>
            </div>
    </section>
    <!-- breadcrumb end -->
</main>
@endsection
