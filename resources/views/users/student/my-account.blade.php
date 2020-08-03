@extends('layouts.bg_layout')

@section('content')

 <section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
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
            <div class="col-md-9">
                <div class="mdk-drawer-layout__content page">



                  
                        <div class="page__heading d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <h1 class="m-lg-0">Student Dashboard</h1>
                            <div>
                                <a href="/student/student-edit-account" class="btn btn-light ml-3"><i class="fas fa-edit"></i> Edit</a>
                                <a href="/student/profile" class="btn btn-success ml-1">View Profile <i class="fas fa-user"></i></a>
                            </div>
                        </div>
                    





                    <div class="">

                        <div class="alert alert-warning d-flex align-items-center mt-2 p-2" role="alert">
                            
                            <div class="text-body">You have <strong>5 days left</strong> on your subscription</div>
                            <a href="" class="btn btn-warning ml-auto">Upgrade</a>
                        </div>

                        <h4 class="card-header__title mb-3">Featured Courses</h4>

                        <div class="row card-group-row mb-3">
                            <div class="col-md-4 card-group-row__col">
                                <div class="card card-group-row__card ">
                                    <div class="card-body d-flex flex-column">
                                        <div class="avatar mb-2">
                                            <span class="bg-soft-warning avatar-title rounded-circle text-center text-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M23,14.5H1c-0.552,0-1,0.448-1,1V16c0,0.684,0.462,1.282,1.125,1.453C1.346,17.51,1.5,17.709,1.5,17.937V23 c0,0.552,0.448,1,1,1s1-0.448,1-1v-1c0-0.276,0.224-0.5,0.5-0.5h16c0.276,0,0.5,0.224,0.5,0.5v1c0,0.552,0.448,1,1,1s1-0.448,1-1 v-5.063c0-0.228,0.154-0.427,0.375-0.484C23.538,17.282,24,16.684,24,16v-0.5C24,14.948,23.552,14.5,23,14.5z M20.5,19 c0,0.276-0.224,0.5-0.5,0.5H4c-0.276,0-0.5-0.224-0.5-0.5v-1c0-0.276,0.224-0.5,0.5-0.5h16c0.276,0,0.5,0.224,0.5,0.5V19z M7.522,5.717l0.75,0.385c0.143,0.073,0.313,0.073,0.456,0l0.75-0.385C9.645,5.631,9.75,5.46,9.75,5.272V4.334 c0-0.189-0.107-0.362-0.276-0.447l-0.75-0.375c-0.141-0.071-0.307-0.071-0.448,0l-0.75,0.375C7.357,3.972,7.25,4.145,7.25,4.334 v0.938C7.25,5.46,7.355,5.631,7.522,5.717z M14.522,9.217l0.75,0.385c0.143,0.073,0.313,0.073,0.456,0l0.75-0.385 c0.167-0.086,0.272-0.257,0.272-0.445V7.834c0-0.189-0.107-0.362-0.276-0.447l-0.75-0.375c-0.141-0.071-0.307-0.071-0.448,0 l-0.75,0.375c-0.169,0.085-0.276,0.258-0.276,0.447v0.938C14.25,8.96,14.355,9.131,14.522,9.217z M2.5,13h19 c0.276,0,0.5-0.224,0.5-0.5v-11C22,0.672,21.328,0,20.5,0h-17C2.672,0,2,0.672,2,1.5v11C2,12.776,2.224,13,2.5,13z M5.75,3.871 C5.749,3.397,6.017,2.964,6.441,2.753L7.941,2c0.352-0.175,0.766-0.175,1.118,0l1.5,0.75c0.424,0.211,0.692,0.644,0.691,1.118v1.4 c0,0.188,0.106,0.36,0.273,0.445l1.275,0.649c0.162,0.082,0.355,0.07,0.505-0.031c0.107-0.071,0.118-0.068,1.171-0.6 c0.169-0.085,0.276-0.258,0.276-0.447V3.5c0-0.414,0.336-0.75,0.75-0.75c0.414,0,0.75,0.336,0.75,0.75v1.79 c0,0.189,0.107,0.362,0.276,0.447l1.033,0.516c0.424,0.211,0.692,0.644,0.691,1.118V9.23c0.001,0.469-0.262,0.899-0.68,1.112 l-1.5,0.77c-0.358,0.184-0.784,0.184-1.142,0l-1.5-0.77c-0.417-0.213-0.68-0.643-0.678-1.112v-0.9c0-0.188-0.106-0.36-0.273-0.445 l-1.748-0.889c-0.143-0.073-0.312-0.073-0.455,0L9.522,7.383C9.355,7.468,9.25,7.64,9.25,7.827v2.237c0,0.414-0.336,0.75-0.75,0.75 s-0.75-0.336-0.75-0.75V7.825c0-0.187-0.105-0.359-0.272-0.444L6.429,6.842C6.011,6.629,5.749,6.199,5.75,5.73V3.871z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark mb-2">
                                            <strong>React for Beginners</strong>
                                        </a>
                                        <p class="text-muted">Become a SCRUM master in scheduling tasks.</p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="badge badge-pill badge-soft-secondary">
                                                    2 days left
                                                </span>
                                            </div>
                                            <div class="h4 text-primary">$49</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 card-group-row__col">
                                <div class="card card-group-row__card ">
                                    <div class="card-body d-flex flex-column">
                                        <div class="avatar mb-2">
                                            <span class="bg-soft-primary avatar-title rounded-circle text-center text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M11.979,17.125c4.052,0,6.875-5.1,6.875-9.67c-0.001-0.95-0.136-1.895-0.4-2.808l0,0c-0.828-2.841-3.522-4.723-6.475-4.522 C9.029-0.063,6.342,1.818,5.51,4.654v0.009c-0.26,0.911-0.395,1.853-0.4,2.8C5.105,12.035,7.929,17.125,11.979,17.125z M16.617,11.281c-0.048,0.125-0.185,0.19-0.312,0.148c-1.395-0.412-2.846-0.599-4.3-0.554c-1.469-0.045-2.936,0.144-4.346,0.559 c-0.127,0.043-0.265-0.022-0.312-0.147c-0.42-1.088-0.664-2.235-0.722-3.4C6.619,7.818,6.642,7.751,6.689,7.7 c0.047-0.049,0.112-0.077,0.18-0.077H17.09c0.138,0,0.25,0.112,0.25,0.25c0,0.004,0,0.008,0,0.012 C17.28,9.048,17.036,10.194,16.617,11.281z M21.632,18.127c0.123,0.065,0.274,0.018,0.339-0.105C21.99,17.986,22,17.946,22,17.906 v-1.531c0-0.138,0.112-0.25,0.25-0.25H23c0.414,0,0.75-0.336,0.75-0.75s-0.336-0.75-0.75-0.75h-0.75c-0.138,0-0.25-0.112-0.25-0.25 v-3c0-0.828-0.672-1.5-1.5-1.5s-1.5,0.672-1.5,1.5v3c0,0.138-0.112,0.25-0.25,0.25H18c-0.414,0-0.75,0.336-0.75,0.75 s0.336,0.75,0.75,0.75h0.75c0.138,0,0.25,0.112,0.25,0.25v0.2c0,0.092,0.051,0.177,0.132,0.22L21.632,18.127z M23.033,19.792 c-0.759-0.561-1.581-1.031-2.45-1.4c-0.119-0.052-0.258-0.005-0.32,0.109l-1.181,1.667l-2.367,3.338 c-0.066,0.121-0.022,0.273,0.099,0.339c0.037,0.02,0.078,0.031,0.12,0.031H23.5c0.276,0,0.5-0.224,0.5-0.5V21.77 C24.007,20.995,23.648,20.263,23.033,19.792z M11.079,21.4l-3.527-3.968c-0.117-0.132-0.294-0.193-0.467-0.16 c-2.206,0.358-4.3,1.221-6.118,2.52C0.351,20.262-0.007,20.995,0,21.77v1.605c0,0.276,0.224,0.5,0.5,0.5h7.326 c0.073,0,0.142-0.032,0.19-0.087l3.066-2.06C11.162,21.633,11.161,21.493,11.079,21.4z M18.31,17.837 c-0.029-0.07-0.088-0.123-0.161-0.145c-0.244-0.069-0.5-0.136-0.76-0.2c-0.091-0.022-0.187,0.009-0.249,0.08l-0.633,0.586 l-5.731,5.305c-0.09,0.105-0.078,0.263,0.027,0.353c0.045,0.039,0.103,0.06,0.162,0.06h3.191c0.092,0,0.176-0.05,0.22-0.13 l3.068-4.452l0.855-1.24C18.335,17.987,18.339,17.907,18.31,17.837z M8.489,8.826C8.185,9.108,8.168,9.583,8.45,9.887 c0.282,0.304,0.757,0.321,1.061,0.039l0,0c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039 c0.282-0.304,0.265-0.779-0.039-1.061C10.339,8.192,9.24,8.192,8.489,8.826z M13.421,10.125c0.19,0.001,0.372-0.071,0.511-0.2 c0.173-0.097,0.384-0.097,0.557,0c0.304,0.282,0.779,0.265,1.061-0.039c0.282-0.304,0.265-0.779-0.039-1.061 c-0.751-0.633-1.849-0.633-2.6,0c-0.304,0.282-0.322,0.756-0.04,1.06C13.013,10.038,13.213,10.125,13.421,10.125L13.421,10.125z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark mb-2">
                                            <strong>Build a Resume</strong>
                                        </a>
                                        <p class="text-muted">Become a SCRUM master in scheduling tasks.</p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="badge badge-pill badge-soft-secondary">
                                                    2 days left
                                                </span>
                                            </div>
                                            <div class="h4 text-primary">$49</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 card-group-row__col">
                                <div class="card card-group-row__card ">
                                    <div class="card-body d-flex flex-column">
                                        <div class="avatar mb-2">
                                            <span class="bg-soft-success avatar-title rounded-circle text-center text-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M21.428,8.666 c0.046,0.13-0.021,0.273-0.151,0.319C21.25,8.995,21.221,9,21.193,9h-3.856c-0.087,0-0.168-0.046-0.214-0.12 c-0.499-0.815-1.185-1.501-2-2C15.047,6.834,15,6.753,15,6.664V2.808c0-0.139,0.113-0.251,0.252-0.25 c0.028,0,0.056,0.005,0.082,0.014C18.178,3.585,20.415,5.823,21.428,8.666L21.428,8.666z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4 s4,1.791,4,4S14.209,16,12,16z M8.666,2.572c0.131-0.046,0.274,0.023,0.32,0.154C8.995,2.752,9,2.78,9,2.808v3.856 c0,0.087-0.045,0.168-0.12,0.214c-0.815,0.499-1.501,1.185-2,2C6.834,8.954,6.752,9,6.663,9H2.807C2.726,9.002,2.649,8.965,2.6,8.9 C2.553,8.834,2.541,8.748,2.569,8.672C3.581,5.826,5.82,3.586,8.666,2.572z M2.572,15.334c-0.047-0.129,0.02-0.272,0.149-0.319 C2.749,15.005,2.778,15,2.807,15h3.856c0.087,0,0.168,0.045,0.214,0.12c0.499,0.815,1.185,1.501,2,2 c0.074,0.046,0.12,0.127,0.12,0.214v3.856c0,0.138-0.112,0.25-0.25,0.25c-0.028,0-0.057-0.005-0.084-0.015 C5.821,20.412,3.585,18.176,2.572,15.334z M15.334,21.429c-0.13,0.046-0.273-0.021-0.319-0.151C15.005,21.251,15,21.222,15,21.194 v-3.856c0-0.087,0.045-0.168,0.12-0.214c0.815-0.499,1.501-1.185,2-2c0.046-0.075,0.127-0.12,0.214-0.12h3.856 c0.08,0.001,0.154,0.041,0.2,0.106c0.047,0.066,0.059,0.151,0.031,0.227C20.409,18.178,18.174,20.414,15.334,21.429z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <a href="#" class="text-dark mb-2">
                                            <strong>Customer Support</strong>
                                        </a>
                                        <p class="text-muted">Become a SCRUM master in scheduling tasks.</p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="badge badge-pill badge-soft-secondary">
                                                    2 days left
                                                </span>
                                            </div>
                                            <div class="h4 text-primary">$49</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-6">

                                <div class="card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">In Progress</h4>
                                            <div class="card-subtitle text-muted">Recent Courses</div>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="student/courses" class="btn btn-light">Browse All</a>
                                        </div>
                                    </div>




                                    <ul class="list-group list-group-flush mb-0" style="z-index: initial;">

                                        <li class="list-group-item" style="z-index: initial;">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="mr-3">
                                                    <img src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=clamp&amp;w=35&amp;h=35" alt="course" class="">

                                                </a>
                                                <div class="flex">
                                                    <a href="#" class="text-body"><strong>Basics of Social Media</strong></a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress" style="width: 100px; height:4px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="text-muted ml-2">60%</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown ml-3">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">View Stats</a>
                                                        <a class="dropdown-item" href="#">Proceed</a>
                                                        <a class="dropdown-item" href="#">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="list-group-item" style="z-index: initial;">
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="mr-3">
                                                    <img src="assets/images/logos/vuejs.svg" alt="course" class="">

                                                </a>
                                                <div class="flex">
                                                    <a href="#" class="text-body"><strong>Learn Vue.js Fundamentals</strong></a>
                                                    <div class="d-flex align-items-center">
                                                        <div class="progress" style="width: 100px; height:4px;">
                                                            <div class="progress-bar bg-vuejs" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <small class="text-muted ml-2">25%</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown text-right ml-3">
                                                    <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">View Stats</a>
                                                        <a class="dropdown-item" href="#">Proceed</a>
                                                        <a class="dropdown-item" href="#">Close</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        

                                    </ul>
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