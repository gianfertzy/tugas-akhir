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
                        <span>Alamat</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    @if($check != 0)
        <div class="site-section m-2">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>{{$alamat[0]->detail}},{{$alamat[0]->kota}}</h5>
                            <a  href="alamat/{{$alamat[0]->id}}/hapus" class="checkout-button thm-btn mt-10 thm-btn__2 no-icon br-0 alt wc-forward">
                                <span class="btn-wrap">
                                    <span>Hapus</span>
                                    <span>Hapus</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    @else
        <div class="site-section">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('user.alamat.simpan') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                <label for="">Pilih Provinsi</label>
                                <select name="province_id" id="province_id" class="form-control">
                                <option value="">Pilih Provinsi</option>
                                @foreach($province as $provinsi)
                                    <option value="{{ $provinsi->province_id }}">{{ $provinsi->title }}</option>
                                @endforeach
                                </select>
                                </div>
                                <div class="form-grup">
                                    <label for="">Pilih Kota/Kabupaten</label>
                                    <select name="cities_id" id="cities_id" class="form-control">
                                </select>
                                </div>
                                <div class="form-grup">
                                    <label for="">Alamat Lengkap</label>
                                    <input type="text" name="detail" id="" placeholde="Kecamatan/Desa/Nama Jalan" class="form-control">
                                </select>
                                </div>
                                <div class="mt-4 text-right">
                                    <button type="submit" class="checkout-button thm-btn thm-btn__2 no-icon br-0 alt wc-forward">
                                        <span class="btn-wrap">
                                            <span>Atur alamat</span>
                                            <span>Atur alamat</span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>

            </div>
        </div>
    @endif
</main>
@endsection

@section('js')
<script type="text/javascript">
var toHtml = (tag, value) => {
    $(tag).html(value);
}
console.log('oioi')
    //  $('#province_id').select2();
    //  $('#cities_id').select2();
     $('#province_id').on('change',function(){
     var id = $('#province_id').val();
     var url = window.location.href;
     var urlNya = url.substring(0, url.lastIndexOf('/alamat/'));
         $.ajax({
             type:'GET',
             url:urlNya + '/getcity/' + id,
             dataType:'json',
             success:function(data){
                var op = '<option value="">Pilih Kota</option>';
                if(data.length > 0) {
                var i = 0;
                for(i = 0; i < data.length; i++) {
                    op += `<option value="${data[i].city_id}">${data[i].title}</option>`
                }
                }
                toHtml('[name="cities_id"]', op);
             }
         })

 });
</script>
@endsection
