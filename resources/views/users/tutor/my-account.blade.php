@extends('layouts.bg_layout')

@section('content')

 <section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tutor</a></li>
            <li class="active"><a href="#">My Account</a></li>
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



                    <div class="container-fluid page__heading-container mb-3">
                        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <h1 class="m-lg-0">Instructor Dashboard</h1>
                            <a href="" class="btn btn-success ml-lg-3">Go to Courses</a>
                        </div>
                    </div>





                    <div class="container-fluid page__container">

                        <div class="row card-group-row mb-3">
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Current Month</div>
                                        <div class="text-amount" style="font-size: 42px">&dollar;12,920</div>
                                        <div class="text-stats text-success">31.5% <i class="fas fa-arrow-up"></i></div>
                                    </div>

                                    <div class="avatar" style=" position: absolute; right: 30px; font-size: 40px; ">
                                        <span class="text-success">
                                            <i class="fas fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Total Lifetime</div>
                                        <div class="text-amount" style="font-size: 42px">&dollar;53,642</div>
                                        <div class="text-stats text-primary">100% <i class="fab fa-angellist"></i></div>
                                    </div>
                                    <div class="avatar" style=" position: absolute; right: 30px; font-size: 40px; ">
                                        <span class="text-warning">
                                             <i class="fas fa-home"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 card-group-row__col">
                                <div class="card card-group-row__card card-body card-body-x-lg flex-row align-items-center">
                                    <div class="flex">
                                        <div class="card-header__title text-muted mb-2">Students this Month</div>
                                        <div class="text-amount" style="font-size: 42px">182</div>
                                        <div class="text-stats text-danger">3.5% <i class="fas fa-arrow-up"></i></div>
                                    </div>
                                    <div class="avatar" style=" position: absolute; right: 30px; font-size: 40px; ">
                                        <span class="">
                                            <i class="fas fa-users"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CHART -->
                        <div class="row">
                            <div class="col-md-8">

                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title mb-0">Earnings</h4>
                                        <div class="flatpickr-wrapper flatpickr-calendar-right d-flex ml-auto">
                                            <div id="recent_orders_date" data-toggle="flatpickr" data-flatpickr-wrap="true" data-flatpickr-static="true" data-flatpickr-mode="range" data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y">
                                                <a href="javascript:void(0)" class="link-date" data-toggle>01/03/2020 to 20/03/2020</a>
                                                <input class="d-none" type="hidden" value="13/03/2018 to 20/03/2018" data-input>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart">
                                            <canvas id="ordersChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">

                                        <h4 class="card-header__title">Top Courses</h4>

                                    </div>




                                    <ul class="list-group list-group-flush mb-0" style="z-index: initial;">

                                        <li class="list-group-item" style="z-index: initial;">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="flex">
                                                    <a href="#" class="text-body"><strong>Basics of Social Media</strong></a>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-muted">60 sales</small>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    $23460
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item" style="z-index: initial;">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="flex">
                                                    <a href="#" class="text-body"><strong>Learn Vue.js Fundamentals</strong></a>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-muted">25 sales</small>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    $9775
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item" style="z-index: initial;">
                                            <div class="d-flex align-items-center">
                                               
                                                <div class="flex">
                                                    <a href="#" class="text-body"><strong>Angular in Steps</strong></a>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-muted">100 sales</small>
                                                    </div>
                                                </div>
                                                <div class="ml-3">
                                                    $39100
                                                </div>
                                            </div>
                                        </li>

                                      
                                    </ul>
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