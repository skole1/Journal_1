@extends('layouts.plain')

@section('title')

@endsection

@section('content')
<div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 mb-5"  data-aos="fade">
          <form action="#" class="p-5 bg-white">

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
              <div class="col-md-12">
                <label class="text-black" for="subject">Re-type Password</label>
                <input type="password" id="subject" class="form-control">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-12">
                <p>Have an account? <a href="login.html">Log In</a></p>
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
@endsection
