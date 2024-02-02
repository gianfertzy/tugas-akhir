@extends('user.app')
@section('content')
    <section class="breadcrumb-area">
        <div class="container">
            <div class="radios-breadcrumb breadcrumbs">
                <ul class="list-unstyled d-flex align-items-center">
                    <li class="radiosbcrumb-item radiosbcrumb-begin">
                        <a href="index.html"><span>Home</span></a>
                    </li>
                    <li class="radiosbcrumb-item radiosbcrumb-end">
                        <span>User</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

  <div class="site-section">
    <div class="container">
      <div class="row">

        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span> User Detail </h3>
            <nav aria-label="breadcrumb">
              <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                  <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
              </ul>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  {{--                    
                  @php
                      dd($user->id);
                  @endphp --}}

                  <div class="row">
                      <div class="col-md-12">
                          <form  method="POST" action="{{ route('user.updateuser') }}" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="form-group">
                                  <label>Nama</label>
                                </div>
                              <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
                              
                              <div class="form-grup mb-3">
                              <label for="">Email</label>
                              <input type="email" class="form-control" name="email" value="{{$user->email}}"/>
                              </div>
                              <div class="w-1/4">
                                  <div class="form-group">
                                      <label>Foto</label>
                                      <input type="file" name="image" class="form-control">
                                  </div>
                              </div>
                              <div class="mt-2 text-right">
                                  <button type="submit" class="btn btn-success text-right">Simpan</button>
                              </div>
                          </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection