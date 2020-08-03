@extends('layouts.bg_layout')

@section('content')

 <section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tutor</a></li>
            <li class="active"><a href="#">Profile</a></li>
        </ul><!-- /.list-unstyled -->
        <!-- <h2 class="inner-banner__title"> </h2>  -->
        <div class="m-4"></div>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<div class="m-5"></div>     
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                    <div class="sidebar-block p-0 m-0">
                        <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light p-2">
                            <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                                <span class="avatar avatar-sm mr-2">
                                    <img src="http://placeimg.com/50/50/poeple" class="rounded-circle">
                                </span>
                                <span class="flex d-flex flex-column">
                                    <span style=" margin-bottom: -15px; "><strong>Adrian Demian</strong></span>
                                    <small class="text-muted text-uppercase">Tutor</small>
                                </span>
                            </a>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-musted"><i class="fas fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="tutor-profile">My profile</a>
                                    <a class="dropdown-item" href="tutor-edit-account">Edit account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" rel="nofollow" data-method="delete" href="">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="dashboard-sidebar">   
                        <ul class="list-unstyled">    
                            <li>    
                                <a href="/tutor/my-account"><span> <i class="fas fa-braille"></i> </span> Dashboard</a>
                            </li>    
                            <li>    
                                <a href="/tutor/lesson"><span> <i class="fas fa-book"></i> </span> Courses</a>
                            </li> 
                            <li>    
                                <a href="/tutor/payment"><span> <i class="fas fa-wallet"></i> </span> Payments</a>
                            </li>
                            <li>    
                                <a href="/tutor/student-edit-account"><span> <i class="fas fa-user-edit"></i> </span> Edit account</a>
                            </li>
                            <li>    
                                <a href="/student/profile"><span> <i class="fas fa-id-card-alt"></i> </span> My Profile</a>
                            </li>
                        </ul>
                    </nav>
            </div>
            <div class="col-md-9">

                  <div class="mdk-drawer-layout__content page"> 

                    <div class="bg-secondary text-white d-flex justify-content-center align-items-center p-4 mb-4" style="height:400px">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center text-center text-lg-left">
                            <div class="mr-lg-4 mb-4 mb-lg-0">
                                <img src="http://placeimg.com/200/200" class="rounded-circle" width="200" alt="Frontted">
                            </div>
                            <div>
                                <h1 class="mb-lg-4">Adrian Demian</h1>
                                <p class="mb-lg-4">Adrian Demian works for Lorem Ipsum is simply dummy text of the printing.</p>
                                <a href="#" class="mr-3 text-white text-underline">https://www.tutorweb.com</a> <i class="fab fa-twitter"></i>
                            </div>
                        </div>

                    </div>

                    <div class="">
                        <h4 class="mb-4">Adrian's Courses</h4>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="card card__course">
                                    <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="#">
                                            <span><img src="{{asset('assets/images/logos/react.svg')}}" class="mb-1" style="width:34px;" alt="logo"></span>
                                            <span class="course__title">React</span>
                                            <span class="course__subtitle">Learn the Basics</span>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <div class="mb-2">
                                            <span class="mr-2">
                                               <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                            </span>
                                            <strong>4.7</strong><br />
                                            <small class="text-muted">(391 ratings)</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <strong class="h4 m-0">$49</strong>
                                            <a href="#" class="btn btn-primary ml-auto"><i class="fas fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card__course">
                                    <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="#">
                                            <span><img src="{{asset('assets/images/logos/vuejs.svg')}}" class="mb-1" style="width:34px;" alt="logo"></span>
                                            <span class="course__title">Vue.js</span>
                                            <span class="course__subtitle">Quick Tips</span>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <div class="mb-2">
                                            <span class="mr-2">
                                               <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                            </span>
                                            <strong>4.7</strong><br />
                                            <small class="text-muted">(391 ratings)</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <strong class="h4 m-0">$49</strong>
                                            <a href="#" class="btn btn-primary ml-auto"><i class="fas fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card__course">
                                    <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="#">
                                            <span><img src="{{asset('assets/images/logos/angular.svg')}}" class="mb-1" style="width:34px;" alt="logo"></span>
                                            <span class="course__title">Angular</span>
                                            <span class="course__subtitle">Back to Basics</span>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <div class="mb-2">
                                            <span class="mr-2">
                                               <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                                <a href="#" class="rating-link active"><i class="fas fa-star"></i></a>
                                            </span>
                                            <strong>4.7</strong><br />
                                            <small class="text-muted">(391 ratings)</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <strong class="h4 m-0">$49</strong>
                                            <a href="#" class="btn btn-primary ml-auto"><i class="fas fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                    

                        </div>
                    </div>


                </div>
                <!-- // END drawer-layout__content -->

 

            </div>
            </div>
        </div>
    </div>
</section> 

 



 

     

                           
    <div class="m-5"></div>                        
  @endsection