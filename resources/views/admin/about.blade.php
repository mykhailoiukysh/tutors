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



                      <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" name="title" value="{{ $about->title }}" class=" ">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Content</label>
                          <div class="col-sm-9">
                           <textarea class="form-control" name="content"></textarea>
                          </div>
                        </div>


                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-primary">Save changes</button>
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