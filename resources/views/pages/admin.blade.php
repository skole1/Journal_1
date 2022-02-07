@extends('layouts.app')
@section('title')
Admin | Dashboard
@endsection

@section('content')
<div class="site-section bg-light ">
    <div class="container mt-5">
        <div class="row align-items-stretch no-gutters">
          <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
            <a href="#" class="popular-category h-100">
                <i class="fas fa-sticky-note fa-3x"></i>
              <hr>
              <span class="number"><i class="fas fa-sticky-note"></i> Recieved Manuscript</span>
            </a>
          </div>
          <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
            <a href="#" class="popular-category h-100">
                <i class="fas fa-check fa-3x"></i>
              <hr>
              <span class="number"><i class="fas fa-check"></i> Accepted Article</span>
            </a>
          </div>
          <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
            <a href="#" class="popular-category h-100">
                <i class="fas fa-paper-plane fa-3x"></i>
              <hr>
              <span class="number"><i class="fas fa-paper-plane"></i> Published Paper</span>
            </a>
          </div>
          <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
            <a href="#" class="popular-category h-100">
                <i class="fas fa-trash-alt fa-3x"></i>
              <hr>
              <span class="number"><i class="fas fa-pen"> Edit/Delete Publication </i></span>
            </a>
          </div>
        </div>


        <div class="row align-items-stretch no-gutters">
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-users fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-users"></i> Authors Account</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-users fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-users"></i> Reviewers application</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-envelope fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-envelope"></i> Send Bulk Mail</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-pencil-alt fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-pencil-alt"></i> View Comment</span>
              </a>
            </div>
        </div>

        <div class="row align-items-stretch no-gutters">
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-question fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-key"></i> Save FAQ</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-plus fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-key"></i> Post News on Blog </span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-trash-alt fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-trash"></i> Delete News on Blog</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-envelope fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-key"></i> Staff Email Login</span>
              </a>
            </div>
        </div>

        <div class="row justify-content-md-center">

            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fas fa-key fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-key"></i> Change Password</span>
              </a>
            </div>
            <div class="col-sm-3 col-md-3 mb-4 mb-lg-0 col-lg-3 p-3">
              <a href="#" class="popular-category h-100">
                <i class="fa fa-share-square fa-3x"></i>
                <hr>
                <span class="number"><i class="fas fa-share-square"></i> Logout</span>
              </a>
            </div>

        </div>

    </div>
  </div>
@endsection


