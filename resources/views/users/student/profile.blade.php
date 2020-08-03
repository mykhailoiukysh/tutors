@extends('layouts.bg_layout')

@section('content')

 <section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Profile</a></li>
        </ul><!-- /.list-unstyled -->
        <!-- <h2 class="inner-banner__title"> </h2>  -->
        <div class="m-4"></div>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
    <div class="m-5"></div>     
<div class="m-5"></div>


    <div class="mdk-drawer-layout__content page"> 
        <div class="container">
            <div class="page__heading d-flex align-items-center justify-content-between">
                <div>

                    <h1 class="m-0">Adrian Demian</h1>
                    <p class="text-muted m-0">LEMA Student</p>
                    <p><a href=""><i class="fas fa-sign-out-alt"></i>  Logout</a></p>
                </div>
            </div>
        </div>

    <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="border-bottom">

                            <div class="card-body text-center">
                                <div class="mb-3">
                                    <img src="https://placeimg.com/200/200" alt="About Adrian" width="100" class="rounded-circle">
                                </div>


                                <p> Short bio about this student is comming soon.</p>


                                <a href="" class="btn btn-facebook btn-sm"><i class="fab fa-facebook"></i></a>
                                <a href="" class="btn btn-twitter btn-sm"><i class="fab fa-twitter"></i></a>
                                <a href="" class="btn btn-light btn-sm"><i class="fab fa-github"></i></a>

                            </div>
                        </div>



                        <div class="border-bottom">
                            <div class="card-header bg-light">
                                <h4 class="card-header__title text-center">Achievements</h4>
                            </div>
                            <div class="card-body text-center">
                                <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="Senior Developer">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="20" height="20">
                                            <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                <path d="M22,3.071c0.276,0,0.5-0.224,0.5-0.5v-0.5c0-1.105-0.895-2-2-2h-17c-1.105,0-2,0.895-2,2v0.5c0,0.276,0.224,0.5,0.5,0.5H22 z M2,4.571c-0.276,0-0.5,0.224-0.5,0.5v2.265c0.006,6.758,3.638,12.994,9.513,16.334c0.613,0.345,1.362,0.345,1.975,0 c5.875-3.341,9.506-9.576,9.512-16.334V5.071c0-0.276-0.224-0.5-0.5-0.5H2z M6.64,10.093c0.063-0.165,0.223-0.274,0.4-0.272h2.737 c0.199,0,0.379-0.118,0.459-0.3l1.377-3.193c0.092-0.214,0.341-0.313,0.555-0.22c0.099,0.043,0.178,0.121,0.22,0.22l1.377,3.193 c0.08,0.182,0.26,0.3,0.459,0.3h2.742c0.233,0,0.422,0.189,0.422,0.422c0,0.12-0.051,0.235-0.141,0.315l-2.311,2.06 c-0.161,0.144-0.212,0.375-0.126,0.573l1.352,3.109c0.093,0.213-0.003,0.461-0.216,0.555c-0.122,0.054-0.262,0.046-0.378-0.02 l-3.322-1.871c-0.152-0.086-0.339-0.086-0.491,0l-3.322,1.874c-0.203,0.114-0.46,0.042-0.575-0.161 c-0.065-0.115-0.072-0.254-0.019-0.375l1.352-3.111c0.086-0.198,0.035-0.429-0.126-0.573l-2.311-2.06 C6.623,10.442,6.578,10.257,6.64,10.093z" stroke="none" fill="#ffffff" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="100 Lessons Learned">
                                    <span class="avatar-title rounded-circle bg-warning">
                                        
                                    </span>
                                </div>
                                <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="First Course Completed">
                                    <span class="avatar-title rounded-circle bg-success">
                                       
                                    </span>
                                </div>
                                <div class="avatar avatar-xs mr-1" data-toggle="tooltip" data-placement="top" title="1 Series Completed">
                                    <span class="avatar-title rounded-circle bg-danger">
                                        
                                    </span>
                                </div>
                                <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top" title="VIP Pass">
                                    <span class="avatar-title rounded-circle bg-purple">
                                        
                                    </span>
                                </div>
                            </div>
                        </div>





                        <!-- START SKILLS -->

                        <div class="">
                            <div class="card-header">
                                <h4 class="card-header__title text-center">Skills</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled list-skills">
                                    <li>
                                        <div>HTML</div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-dark-gray"><strong>61%</strong></div>
                                    </li>
                                    <li>
                                        <div>CSS/SCSS</div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-dark-gray"><strong>39%</strong></div>
                                    </li>
                                    <li>
                                        <div>JAVASCRIPT</div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-dark-gray"><strong>76%</strong></div>
                                    </li>
                                    <li>
                                        <div>RUBY ON RAILS</div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 28%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-dark-gray"><strong>28%</strong></div>
                                    </li>
                                    <li>
                                        <div>VUEJS</div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-vuejs" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-dark-gray"><strong>50%</strong></div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- END SKILLS -->


                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-body mb-3">
                                <div class="d-flex align-items-center">

                                    <div class="avatar avatar-lg mr-3">
                                        <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">
                                            
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" class="text-muted mb-2">Courses Taken</a>
                                        <h4 class="m-0 bold">14</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body mb-3">
                                <div class="d-flex align-items-center">

                                    <div class="avatar avatar-lg mr-3">
                                        <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                            
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" class="text-muted mb-2">Overall Score</a>
                                        <h4 class="m-0 bold">592</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-body mb-3">
                                <div class="d-flex align-items-center">

                                    <div class="avatar avatar-lg mr-3">
                                        <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                            
                                        </span>
                                    </div>
                                    <div>
                                        <a href="#" class="text-muted mb-2">Quizzes Taken</a>
                                        <h4 class="m-0 bold">6</h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ACTIVITY -->

                    <div class="card mb-3">
                        <div class="px-4 py-3">
                            <div class="d-flex mb-1">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="https://placeimg.com/50/50" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="flex">
                                    <div class="d-flex align-items-center mb-1">
                                        <strong class="text-15pt">Sherri J. Cardenas</strong>
                                        <small class="ml-2 text-muted">3 days ago</small>
                                    </div>
                                    <div>
                                        <p>Thanks for contributing to the release of FREE Admin Vision - PRO Admin Dashboard Theme <a href="https://www.frontted.com">https://www.frontted.com</a> 🔥</p>
                                        <p><a href="">#themeforest</a> <a href="">#EnvatoMarket</a></p>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 38</a>
                                        <a href="" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 71</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="px-4 py-3">
                            <div class="d-flex mb-1">
                                <div class="avatar avatar-sm mr-3">
                                    <img src="https://placeimg.com/50/50" alt="Avatar" class="avatar-img rounded-circle">
                                </div>
                                <div class="flex">
                                    <div class="d-flex align-items-center mb-1">
                                        <strong class="text-15pt">Jenell D. Matney</strong>
                                        <small class="ml-2 text-muted">4 days ago</small>
                                    </div>
                                    <div>
                                        <p>Rails 5 Bootstrap 4 Boilerplate Admin Dashboard on <a href="">https://t.co/Wh7jE0yz4t</a> 😉
                                    </div>

                                    <a href="https://www.frontted.com" class="card my-3 text-body decoration-0">
                                        <img src="https://placeimg.com/350/200" alt="image" class="rounded card-img-top">
                                        <span class="card-footer d-flex flex-column">
                                            <strong>Admin Dashboard Template</strong>
                                            <span>Made with Rails 5 and Bootstrap 4</span>
                                            <i class="material-icons">link</i> frontted.com
                                        </span>
                                    </a>

                                    <div class="d-flex align-items-center">
                                        <a href="" class="text-muted d-flex align-items-center decoration-0"><i class="material-icons mr-1" style="font-size: inherit;">favorite_border</i> 156</a>
                                        <a href="" class="text-muted d-flex align-items-center decoration-0 ml-3"><i class="material-icons mr-1" style="font-size: inherit;">thumb_up</i> 351</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>






</div>

     

                           
    <div class="m-5"></div>                        
  @endsection