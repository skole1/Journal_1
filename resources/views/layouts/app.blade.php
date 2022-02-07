<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ClassyAds &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

  </div>

  <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src=" {{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/rangeslider.min.js') }}"></script>

  <script src="js/main.js"></script>

  </body>
</html>
<!-- Login -->
<div class="modal fade mt-5 pt-4" id="loginModal" aria-labelledby="Login" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="1">
    <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Login">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="#" method="POST" class="p-5 bg-white">
                @csrf
                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label>
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="subject">Password</label>
                    <input type="password" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-12">
                    <p>No account yet? <a href="register.html">Register</a></p>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Sign In" class="btn btn-primary py-2 px-4 text-white">
                  </div>
                </div>


            </form>
        </div>
      </div>
    </div>
</div>

<!-- Register -->
<div class="modal fade mt-5 pt-5" id="registerModal" aria-labelledby="Login" aria-hidden="true" data-backdrop="static" data-keyboard="false" tabindex="1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Login">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select id="inputState" class="form-control">
                            <option selected>Title...</option>
                            <option>Prof.</option>
                            <option>Dr.</option>
                            <option>Mr.</option>
                            <option>Mrs.</option>
                            <option>Miss.</option>
                          </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Area of Specialisation*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Sur Name *">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-check-inline">
                        <span>Would you like to review ?</span>&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Yes</label>&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">No</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Other Name*">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" id="lname" class="form-control" placeholder="Password*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Other Name*">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" id="lname" class="form-control" placeholder="Confirm Passwor*">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Email*">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">By registering, you accept Terms & Conditions</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="number" id="phone" class="form-control" placeholder="Phone Number*">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group form-check-inline">
                        <label class="form-check-label" for="inlineCheckbox1">Already have an account ?</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="lname" class="form-control" placeholder="Contact Address/Affiliation*">
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#">Sign in as Author</a>&nbsp;&nbsp;
                    <a href="#">Sign in as Reviewer</a>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary py-2 px-4 text-white float-right">
            </div>
        </form>
    </div>
  </div>
</div>

