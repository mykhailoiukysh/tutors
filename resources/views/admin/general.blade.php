@include('inc.admin-header')

        
        <!-- Side Navbar -->
        @include('inc.admin-nav')
        <!-- End Side Navbar -->

        <div class="content-inner"> 
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
            <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
              
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="card">
                   
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Theme Options</h3>
                    </div>
                    <div class="card-body">

                       <p class="mssg text-success">{{ session('mssg')}}</p>
                         
                      <form class="form-horizontal" action="/Admin/theme-options" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Logo</label>
                          <div class="col-sm-9">
                            <input type="file" name="logo" class=""> <img src="{{ asset('assets/images/' )}}/{{ $general->logo }}" height="50" >
                            <input type="hidden" name="oldlogo" value="{{ $general->logo }}">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Top Header Background</label>
                          <div class="col-sm-9">
                            <input type="color" name="top_header" value="{{ $general->top_header }}" class=" "> 
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" name="email" value="{{ $general->email }}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" value="{{ $general->phone }}" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Menu Color</label>
                          <div class="col-sm-9">
                            <input type="color" name="menu_color" value="{{ $general->menu_color }}" class=" ">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Footer Background</label>
                          <div class="col-sm-9">
                            <input type="text" name="footer_bg" value="{{ $general->footer_bg }}" class="form-control">
                          </div>
                        </div>
                       
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">                            
                            <!-- <button type="submit" class="btn btn-primary">Save changes</button> -->
                            <input type="submit" name="" value="Save changes">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


  @include('inc.admin-footer')