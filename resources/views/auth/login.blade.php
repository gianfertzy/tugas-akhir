
@extends('user.app')
@section('content')

<main>

    <!-- breadcrumb start -->
    
    <!-- breadcrumb end -->

    <!-- account start
    <section class="account pb-90">
        <div class="container">
            <div class="row mt-none-30">

                <div class="col-lg-6 mt-30">
                    <div class="account__wrap pl-60">
                        <h2 class="account__title">Login here</h2>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="account__input-field">
                                <label for="lemail">Email Address</label>
                                <input id="email" name="email" type="email" placeholder="Enter Email Address">
                            </div>
                            <div class="account__input-field">
                                <label for="lpassword">Password</label>
                                <input id="password" name="password" type="password" placeholder="password">
                            </div>
                            <div class="account__btn">
                                <button class="thm-btn thm-btn__2" type="submit">
                                    <span class="btn-wrap">
                                        <span>Login here</span>
                                        <span>Login here</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 mt-30">
                    <div class="account__wrap pr-60">
                        <h2 class="account__title">Sign Up</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="account__input-field">
                                <label for="name">Your Name</label>
                                <input id="name" type="text" required  name="name" placeholder="Enter your  name*">
                            </div>
                            <div class="account__input-field">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" required  name="email" placeholder="Enter Email Address">
                            </div>
                            <div class="account__input-field">
                                <label for="password">Password</label>
                                <input id="password" type="password" required  name="password" placeholder="Create password">
                            </div>
                            <div class="account__input-field">
                                <label for="password">Re - password</label>
                                <input id="password" type="password" required  name="password_confirmation" placeholder="Create password">
                            </div>
                            <div class="account__input-field">
                                <input class="form-check-input" required id="checkbox" type="checkbox">
                                <label class="form-check-label"  for="checkbox">I agree to al <a href="#!">Terms</a> & <a href="#!">Condition</a> and Feeds</label>
                            </div>
                            <div class="account__btn">
                                <button class="thm-btn thm-btn__2" type="submit">
                                    <span class="btn-wrap">
                                        <span>Sign Up</span>
                                        <span>Sign Up</span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="container">
    Outer Row
            </div>
        </div>
    </section>
    account end -->

</main>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Login</title>
  <!-- Custom fonts for this template-->
  <link href="{{ asset('adminassets/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('adminassets/assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>
  <!-- <section class="breadcrumb-area">
    <div class="container">
        <div class="radios-breadcrumb breadcrumbs">
            <ul class="list-unstyled d-flex align-items-center">
                <li class="radiosbcrumb-item radiosbcrumb-begin">
                    <a href="index.html"><span>Home</span></a>
                </li>
                <li class="radiosbcrumb-item radiosbcrumb-end">
                    <span>Account</span>
                </li>
            </ul>
        </div>
    </div>
  </section> -->
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form action="{{ route('login') }}" method="POST" class="user">
                    @csrf
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                      </div>
                    @endif
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input name="remember" type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember
                          Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-user">Login</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('adminassets/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('adminassets/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('adminassets/assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>

@endsection
