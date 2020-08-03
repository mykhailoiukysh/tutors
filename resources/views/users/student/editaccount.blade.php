@extends('layouts.bg_layout')

@section('content')
<section class="inner-banner">
    <div class="container">
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Edit Account</a></li>
        </ul><!-- /.list-unstyled -->
        <!-- <h2 class="inner-banner__title"> </h2>  -->
        <div class="m-4"></div>
    </div><!-- /.container -->
</section><!-- /.inner-banner -->
<div class="m-5"></div>     

<section>
        <!-- Header Layout Content -->

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

                <div class="">
                    <div class="page__heading d-flex align-items-center justify-content-between">

                        <h1 class="m-0">Edit Account</h1>
                    </div>
                </div>






                <div class=" page__container">
                    <div class="card card-form p-3 mb-2 mt-2">
                        <div class="row">
                            <div class="col-lg-4 card-body">
                                <p><strong class="headings-color">Basic Information</strong></p>
                                <p class="text-muted mb-0">Edit your account details and settings.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <input id="fname" type="text" class="form-control" placeholder="First name" value="Adrian">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <input id="lname" type="text" class="form-control" placeholder="Last name" value="Demian">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc">Bio / Description</label>
                                    <textarea id="desc" rows="4" class="form-control" placeholder="Bio / description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country</label><br />
                                    <select id="country" class="custom-select w-auto">
                                        <option value="usa">United States</option>
                                        <option value="usa">Canada</option>
                                    </select>
                                    <small class="form-text text-muted">The country is not visible to other users.</small>
                                </div>
                                <div class="form-group">
                                    <label for="subscribe">Subscribe to newsletter</label><br>
                                    <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                        <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                        <label class="custom-control-label" for="subscribe">Yes</label>
                                    </div>
                                    <label for="subscribe" class="mb-0">Yes</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-form mb-2 mt-2">
                        <div class="row">
                            <div class="col-lg-4 card-body ">
                                <p><strong class="headings-color">Update Your Password</strong></p>
                                <p class="text-muted mb-0">Change your password.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="opass">Old Password</label>
                                            <input id="opass" type="password" class="form-control" placeholder="Old password" value="****">
                                        </div>
                                        <div class="form-group">
                                            <label for="npass">New Password</label>
                                            <input id="npass" type="password" class="form-control is-invalid">
                                            <small class="invalid-feedback">The new password must not be empty.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="cpass">Confirm Password</label>
                                            <input id="cpass" type="password" class="form-control" placeholder="Confirm password">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-form mb-2 mt-2">
                        <div class="row">
                            <div class="col-lg-4 card-body ">
                                <p><strong class="headings-color">Profile Settings</strong></p>
                                <p class="text-muted mb-0">Update your public profile with relevant and meaningful information.</p>
                            </div>
                            <div class="col-lg-8 card-form__body card-body">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <div class="dz-clickable media align-items-center" data-toggle="dropzone" data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable" data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                        <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                            <div class="avatar avatar-lg">
                                                <img src="assets/images/account-add-photo.svg" class="avatar-img rounded" alt="..." data-dz-thumbnail>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <button class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="desc2">Description</label>
                                    <textarea id="desc2" rows="4" class="form-control" placeholder="Description ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="social1">Social links</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social1" type="text" class="form-control form-control-prepended" placeholder="Facebook">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-facebook text-facebook"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social2" type="text" class="form-control form-control-prepended" placeholder="Twitter">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-twitter text-twitter"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group input-group-merge mb-2">
                                                <input id="social3" type="text" class="form-control form-control-prepended" placeholder="Instagram">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="fab fa-instagram text-instagram"></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="customCheck1">Available for freelance?</label>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                        <label class="custom-control-label" for="customCheck1">Yes, show me as available for freelance!</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mb-5">
                        <a href="" class="btn btn-success">Save</a>
                    </div>
                </div>


            </div>
    </div>
</div>       
</section>

     

                                
    <div class="m-5"></div>                        
  @endsection