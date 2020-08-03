   @extends('layouts.bg_layout')

@section('content')

        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Credit</a></li>
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
                    
                

                <div class="mdk-drawer-layout__content page">

                    <div class="container">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
                            <h1 class="m-lg-0">Billing & Payments</h1>
                            <a href="" class="btn btn-primary ml-lg-3">Make Payment</a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="alert alert-soft-warning d-flex align-items-center card-margin" role="alert">
                            <i class="material-icons mr-3">error_outline</i>
                            <div class="text-body">
                                You have an invoice <a href="#">#21387</a> due for
                                <strong class="text-danger">$49.00</strong>
                            </div>
                            <a href="" class="btn btn-warning ml-auto">Pay Now!</a>
                        </div>

                        <div class="shadow-sm card-form">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body p-2">
                                    <p><strong class="headings-color">Basic Information</strong></p>
                                    <p class="text-muted mb-0">This account is billed to:</p>
                                </div>
                                <div class="col-lg-8 card-form__body card-body  bg-light p-3">

                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" viewBox="0 0 40 26">
                                                <defs>
                                                    <linearGradient id="pEkgXa" x1="50%" x2="50%" y1="0%" y2="100%">
                                                        <stop offset="0%" stop-color="#FFF"></stop>
                                                        <stop offset="100%" stop-color="#ECEEF8"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="pEkgXb" x1="0%" x2="66.866%" y1="0%" y2="100%">
                                                        <stop offset="0%" stop-color="#191E62"></stop>
                                                        <stop offset="100%" stop-color="#10289A"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd">
                                                    <rect width="40" height="26" fill="url(#pEkgXa)" rx="4"></rect>
                                                    <path fill="#000" fill-opacity=".101" fill-rule="nonzero" d="M4 .75A3.249 3.249 0 0 0 .75 4.006v17.988A3.256 3.256 0 0 0 4 25.25h32a3.249 3.249 0 0 0 3.25-3.256V4.006A3.256 3.256 0 0 0 36 .75H4zM4 0h32c2.204 0 4 1.793 4 4.006v17.988A3.999 3.999 0 0 1 36 26H4c-2.204 0-4-1.793-4-4.006V4.006A3.999 3.999 0 0 1 4 0z"></path>
                                                    <path fill="url(#pEkgXb)" d="M20.015 11.197C20.03 9.315 21.77 8 24.243 8c.964 0 1.739.21 2.341.43l-.44 2.05c-1.12-.516-2.109-.48-2.467-.432-.723.094-1.053.463-1.062.809-.024 1.14 3.517 1.282 3.507 3.834-.01 2.012-1.729 3.309-4.357 3.309-1.12-.01-2.199-.245-2.782-.513l.453-2.12c.581.272 1.312.631 2.57.611.72-.01 1.49-.297 1.497-.946.004-.424-.323-.728-1.298-1.203-.948-.462-2.207-1.24-2.19-2.632zm10.795-3.02h2.137l2.02 9.672h-2.314l-.304-1.444H29.14l-.522 1.444h-2.626l3.754-8.963c.18-.43.585-.71 1.064-.71zm.368 2.613l-1.318 3.632h2.076l-.758-3.632zM16.832 8.177h2.5l-2.068 9.672h-2.502l2.07-9.672zm-3.702 0h2.627l-4.054 9.672H9.06L7.063 10.13c-.12-.475-.226-.65-.594-.85-.602-.327-1.595-.633-2.469-.822l.06-.281h4.257c.543 0 1.03.36 1.154.985l1.054 5.598 2.605-6.583z"></path>
                                                </g>
                                            </svg>
                                        </div>

                                        <strong>Visa card ending in 2428</strong>


                                        <div class="ml-auto">
                                            <button class="btn btn-danger"> Remove</button>
                                            <button class="btn btn-outline-primary"> Change</button>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                        <div class="shadow-sm  card-form mt-3">
                            <div class="row no-gutters">
                                <div class="col-lg-4 card-body p-2">
                                    <p><strong class="headings-color">Invoices</strong></p>
                                    <p class="text-muted mb-0">Your past payments</p>
                                </div>
                                <div class="col-lg-8 bg-light p-3 card-form__body">

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Invoice</th>
                                                    <th class="text-center">Amount</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center" style="width: 140px;">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">

                                                <tr>
                                                    <td>
                                                        <a href="invoice.html">#<span>12199</span></a>
                                                    </td>
                                                    <td class="text-center">
                                                        $49.00
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge badge-soft-warning">
                                                            DUE
                                                        </div>
                                                    </td>
                                                    <td>

                                                        <div class="d-flex align-items-center text-muted small">
                                                            <i class="material-icons icon-16pt mr-1">today</i>
                                                            25 May 2019
                                                        </div>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
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
</section>

    <div class="m-5"></div>                        
  @endsection