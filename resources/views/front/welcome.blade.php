
@extends('layouts.layout')

@section('content')
        <section class="slider-three">
            <img src="assets/images/slider-3-icon-1-2.png" class="slider-three__icon-2" alt="">
            <img src="assets/images/slider-3-icon-1-3.png" class="slider-three__icon-3" alt="">
            <img src="assets/images/slider-3-icon-1-4.png" class="slider-three__icon-4" alt="">
            <img src="assets/images/slider-3-icon-1-5.png" class="slider-three__icon-5" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="slider-three__content">
                            <!--p class="slider-three__tag-line">We can train you for your O Levels</p><!-- /.slider-three__tag-line -->
                            <h2 class="slider-three__title">Start preparing for your Exams now!</h2><!-- /.slider-three__title -->
                             
                            <form action="#" class="slider-three__search">
                                <button type="button" class="btn btn-primary">Get your First Hour of Tutoring Free Now</button>
                            </form><!-- /.slider-three__search -->
                        </div><!-- /.slider-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.slider-three -->
        <section class="course-category-three">
            
            <div class="container">
                <div class="block-title">
                    <h2 class="block-title__title">Subjects We Offer Now  </h2><!-- /.block-title__title -->
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <img src="assets/images/english.png" alt="">
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="#">English</a></h3>
                                <!-- /.course-category-three__title -->
                                <p class="course-category-three__text"><!-- Get Start Now --></p>
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <img src="assets/images/mathematics.png" alt="">
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="#"> Mathematics  </a></h3>
                                <!-- /.course-category-three__title -->
                                <p class="course-category-three__text"><!-- Over 752 Courses --></p>
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <img src="assets/images/science.png" alt="">
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="#">Chemistry </a></h3>
                                <!-- /.course-category-three__title -->
                                <p class="course-category-three__text"><!-- Over 752 Courses --></p>
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="course-category-three__single">
                            <img src="assets/images/tamil.png" alt="">
                            <div class="course-category-three__content">
                                <h3 class="course-category-three__title"><a href="#">Tamil</a></h3>
                                <!-- /.course-category-three__title -->
                                <p class="course-category-three__text"><!-- Over 752 Courses --></p>
                                <!-- /.course-category-three__text -->
                            </div><!-- /.course-category-three__content -->
                        </div><!-- /.course-category-three__single -->
                    </div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
                </div><!-- /.row -->
                <div class="text-center">
                    <a href="{{'/subjects'}}" class="thm-btn course-category-three__more-link">View All</a><!-- /.thm-btn -->
                </div><!-- /.text-center -->
            </div><!-- /.container -->
        </section><!-- /.course-category-three -->
        <section class="cta-one cta-one__home-one" style="background-image: url(assets/images/bg.jpg);">
            <div class="container">
                <h2 class="cta-one__title">TutorsWeb.org one & only <br>
                    mission is to prepare   <br>
                    you for your examination.</h2><!-- /.cta-one__title -->
                <div class="cta-one__btn-block">
                    <a href="/about" class="thm-btn cta-one__btn">Learn More</a><!-- /.thm-btn -->
                </div><!-- /.cta-one__btn-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->
        

        
        <section class="cta-six thm-gray-bg">
            <img src="assets/images/line-stripe-2.png" class="cta-six__line" alt="">
            <div class="container-fluid clearfix">
                <div class="cta-six__left">
                    <div class="cta-six__content">
                        <div class="block-title text-center">
                            <h2 class="block-title__title">Start Preparing 
                            Now!</h2><!-- /.block-title__title -->
                        </div><!-- /.block-title -->
                        <img src="assets/images/online.jpg" alt="">
                    </div><!-- /.cta-six__content -->
                </div><!-- /.cta-six__left -->
                <div class="cta-six__right">
                    <img src="assets/images/onlineT.jpg" alt="">
                   <!--  <h2 class="cta-six__title">More than <span class="counter">7840</span> students are registered</h2> -->
                    <!-- /.cta-six__title -->
                </div><!-- /.cta-six__right -->
            </div><!-- /.container-fluid -->
        </section><!-- /.cta-six -->
        
        <!--section class="brand-one brand-one__home-three">
            <div class="container">
                <div class="brand-one__carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <!--div class="item">
                        <img src="assets/images/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                <!--/div><!-- /.brand-one__carousel owl-carousel owl-theme -->
            <!--/div><!-- /.container -->
        <!--/section><!-- /.brand-one -->
       
@endsection
