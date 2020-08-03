@extends('layouts.bg_layout')

@section('head')
  <link rel="stylesheet" href="{{asset('bootstrap-material-design/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-material-design/css/mdb.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-material-design/css/mdb.lite.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-material-design/css/mdb.lite.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-material-design/css/style.css')}}">

  <!--===============================================================================================-->
  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/select2/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/util.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

@endsection

@section('content')
  <section class="inner-banner">
    <div class="container">
      <ul class="list-unstyled thm-breadcrumb">
        <li><a href="#">Add</a></li>
        <li class="active"><a href="{{'/subjects'}}">Subjects</a></li>
      </ul><!-- /.list-unstyled -->
      <div class="m-4"></div>
    </div><!-- /.container -->

  </section><!-- /.inner-banner -->


  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Add Subjects</button>

  <!-- Modal: modalPoll -->
  <div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true" data-backdrop="false">
    <form method="post" action="{{url('/addSubject')}}">
      @csrf
      <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
      <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
          <p class="heading lead">Add Subjects
          </p>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">×</span>
          </button>
        </div>

        <!--Body-->
        <div class="modal-body">
          <div class="text-center">
            <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
            <p>
              <strong>Add New Subject</strong>
            </p>
            <p>
              <strong>Add New Subject</strong>
            </p>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="subject_name" placeholder="subject name">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="subject_name" placeholder="subject name">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="type" placeholder="type">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="language_medium" placeholder="language medium">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="subject_code" placeholder="subject code">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

          <div class="wrap-input100 validate-input m-b-10">
            <input class="input100" type="text" name="url" placeholder="url">
            <span class="focus-input100"></span>
            <span class="symbol-input100"><i class="fa fa-user"></i></span>
          </div>

        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
          <button type="submit" class="btn btn-primary waves-effect waves-light">Add
            <i class="fa fa-paper-plane ml-1"></i>
          </button>
          <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
        </div>
      </div>
    </div>
    </form>
  </div>
  <!-- Modal: modalPoll -->
@endsection

@section('foot')
  <script src="{{asset('bootstrap-material-design/mdb.min.js')}}"></script>
  <script src="{{asset('bootstrap-material-design/bootstrap.min.js')}}"></script>
  <script src="{{asset('bootstrap-material-design/popper.min.js')}}"></script>
  <!--===============================================================================================-->
  <script src="{{asset('assets/vendor/select2/select2.min.js')}}js/main.js"></script>
  <script src="{{asset('assets/js/main.js')}}js/main.js"></script>
@endsection
