   @extends('layouts.bg_layout')

@section('content')

        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">My Lesson</a></li>
                </ul><!-- /.list-unstyled -->
                <!-- <h2 class="inner-banner__title"> </h2>  -->
                <div class="m-4"></div>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
    <div class="m-5"></div>     
<section>   
    <div class="container">
        <div class="row">   
            <div class="col-md-3"> <!-- left sidebar  -->
                    <div class="sidebar-block p-0 m-0">
                        <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light p-2">
                            <a href="#" class="flex d-flex align-items-center text-body text-underline-0">
                                <span class="avatar avatar-sm mr-2">
                                    <img src="http://placeimg.com/50/50/poeple" class="rounded-circle">
                                </span>
                                <span class="flex d-flex flex-column">
                                    <span style=" margin-bottom: -15px; "><strong>Adrian Demian</strong></span>
                                    <small class="text-muted text-uppercase">student</small>
                                </span>
                            </a>
                            <div class="dropdown ml-auto">
                                <a href="#" data-toggle="dropdown" data-caret="false" class="text-musted"><i class="fas fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="student-profile">My profile</a>
                                    <a class="dropdown-item" href="student-edit-account">Edit account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" rel="nofollow" data-method="delete" href="">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav class="dashboard-sidebar">   
                        <ul class="list-unstyled">    
                            <li>    
                                <a href="/student/my-account"><span> <i class="fas fa-braille"></i> </span> Dashboard</a>
                            </li>    
                            <li>    
                                <a href="/student/lesson"><span> <i class="fas fa-book"></i> </span> Courses</a>
                            </li>
                            <li>    
                                <a href="/student/lesson"><span> <i class="fas fa-book-open"></i> </span> Take Course</a>
                            </li>
                            <li>    
                                <a href="/student/credit"><span> <i class="fas fa-wallet"></i> </span> Billing</a>
                            </li>
                            <li>    
                                <a href="/student/student-edit-account"><span> <i class="fas fa-user-edit"></i> </span> Edit account</a>
                            </li>
                            <li>    
                                <a href="/student/profile"><span> <i class="fas fa-id-card-alt"></i> </span> My Profile</a>
                            </li>
                        </ul>
                    </nav>

            </div>  

            <div class="col-md-9"> <!-- body content start -->      
           

            <div class="row">
                            <div class="col-md-4">
                                <div class="card card__course">
                                    <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href="">
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
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href=" ">
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
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href=" ">
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

                            <div class="col-md-4">
                                <div class="card card__course">
                                    <div class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href=" ">
                                            <span><img src="{{asset('assets/images/logos/javascript.svg')}}" class="mb-1" style="width:34px;" alt="logo"></span>
                                            <span class="course__title">Javascript</span>
                                            <span class="course__subtitle">ES6 and Beyond</span>
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
                                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column" href=" ">
                                            <span><img src="{{asset('assets/images/logos/angular.svg')}}" class="mb-1" style="width:34px;" alt="logo"></span>
                                            <span class="course__title">Angular</span>
                                            <span class="course__subtitle">Typescript and Beyond</span>
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
    </div>                
</section>

    <div class="m-5"></div>                        
  @endsection