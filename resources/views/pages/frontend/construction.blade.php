@extends('layouts.guest')

@section('content')

    <!-- banner -->
    <section class="banner-1-section pt_240 pb_140 bg_cover overflow-hidden" style="background-image: url(assets/frontend/images/background/bg-7.jpg);">
        <div class="line-grid-wrap">
            <span class="line-grid-1"></span>
            <span class="line-grid-2"></span>
            <span class="line-grid-3"></span>
            <span class="line-grid-4"></span>                                                                                                                                                                                                                                             
            <span class="line-grid-5"></span>
        </div>
        <div class="banner-1-image-1 p_absolute b_0 r_0"><img src="{{asset('assets/frontend/images/resource/building3.png')}}" alt=""></div>              
        <div class="auto-container"> 
            <div class="p_relative text-center">
                <h1 class="c_light mb_10 fw_black fs_65 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">Building Construction </h1> 
                <ul class="fs_18 d-flex justify-content-center c_light wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1.5s">
                    <li><a href="index.php">Home</a></li>
                    <li class="ml_10 mr_10">/</li>
                    <li><a href="services.php">Services</a></li>
                    <li class="ml_10 mr_10">/</li>
                    <li>Building Construction</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- services -->
    <section class="pb_110 pt_100">        
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Residential Buildings</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/1.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                                Create your dream home with our expert residential building services. Quality craftsmanship and tailored designs.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Commerical Buildings</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/2.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                                Elevate your business with our commercial building solutions. Functional spaces designed for success.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Industrial Buildings</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/3.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                                Efficiency meets innovation in our industrial building projects. Constructing the foundation for your industry.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Institutional Buildings</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/5.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                            Institutional Buildings Service: Expert solutions for planning, designing, and maintaining functional, safe, and sustainable public structures.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Religious Buildings</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/4.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                                Sacred spaces crafted with reverence. Trust us to build your place of worship with devotion.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="service-1-block alt">
                        <h4 class="service-1-title fs_25">Roads and Bridges</h4>
                        <div class="service-1-image">
                            <img src="{{asset('assets/frontend/images/resource/Building_Construction/6.jpg')}}" alt="">
                            <div class="service-1-read-more"><a href="javascript:void(0);" class="c_light ff_sec fw_bold fs_14 ls_1">
                            Roads and bridges: vital infrastructure connecting communities, enabling travel, and fostering economic growth and development.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>                                                                                

    <!-- whychoose us -->
    <section class="">    
        <div class="parallax-bg-wrap b_0 p_absolute t_0 l_0 r_0 o_hidden">
            <div class="parallax-bg bg_cover  p_absolute t__50 l_0 r_0 b__50" data-parallax='{"y": 30}' style="background-image: url(assets/frontend/images/background/bg-6.jpg);"></div>
        </div>    
        <div class="auto-container">
            <div class="row no-gutters align-items-end">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                    <div class="whychooseus-right-box" style="background-image: url(assets/frontend/images/resource/image-2.jpg);">
                        <div class="">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Bigger, Better, Faster </h6>
                            <h2 class="c_light fs_45 fw_black mb_18">Leading Way In Civil <br> Construction</h2>
                            <p class="mb_20 fs_16 c_light p_relative">Bring to the table win-win survival strategies to ensure
                                proactive domination. At the end of the day, going forward, a new normal that has evolved.</p>
                            <a href="contact.php" class="c_light ff_sec fw_bold tt_u fs_14 ls_1 p_relative">request a call back <i class="ml_10 fs_20 v_middle flaticon-right-1"></i></a>
                            <div class="p_absolute r_0 t__35 p_33 bg_primary"><a href="https://youtu.be/uop7muARSno" class="video-btn-1 ripple" data-fancybox="video-1" data-caption=""><i class="flaticon-play-button"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection