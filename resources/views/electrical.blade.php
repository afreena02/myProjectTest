@extends('layouts.app')

@section('content')

<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- page title area start  -->
    <section class="page-title-area-2 breadcrumb-spacing bg-theme-4 section-spacing">
        <div class="d-none" data-background="d-none"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-9">
                    <div class="page-title-wrapper-2 text-center">
                        <h2 class="page__title-2 mb-15">Electrical Items</h2>
                        <div class="breadcrumb-menu-2 d-flex justify-content-center">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items-2">
                                    <li class="trail-item-2 trail-begin"><a href="{{ url('/index') }}"><span>Home</span></a></li>
                                    <li class="trail-item-2 trail-end"><span>Products</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area start  -->

    <!-- product area start  -->
    <div class="product-area section-spacing bg-theme-4 b-top b-bottom-2">
        <div class="container">
            <div class="row g-50">
                <div class="col-xl-3 col-lg-4 order-lg-1 order-2">
                    <div class="product-left-wrapper wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="product-left-item mb-45">
                            <h6 class="product-widget-title">Product categories</h6>
                            <ul class="product-categories">
                                <li><a href="plumbing-items.html">Plumbing Items</a></li>
                                <li class="cat-item cat-item-62"><a href="electrical-items.html">Electrical Items</a></li>
                                <li><a href="sanitary-items.html">Sanitary Items</a></li>
                                <li><a href="safety-items.html">Safety Items</a></li>
                                <li><a href="safety-items.html">Paint Items</a></li>
                                <li><a href="other-items.html">Other Items</a></li>
                            </ul>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                    <div class="product-area-wrapper mb-20 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product-filter-wrapper mb-30">
                            <div class="row g-5">
                                <div class="col-lg-6 col-md-6">
                                    <div class="items-showing-text">
                                        <!--<div class="items-showing capitalize">
                                            <p> Showing <span>1</span>–<span>9</span> of <span>11</span> Results</p>
                                        </div>-->
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-01.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Wiring Materials
                                    </h4>
                                    
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-02.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Circuit Breakers</h4>
                                    
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-03.jpg')}}" alt="product"></a>
                                    
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Electrical Outlet</h4>
                                  
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-04.jpg')}}" alt="product"></a>
                                    
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Light Fixtures</h4>
                                    
                                     
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-05.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Distribution Boards</a></h4>
                                      
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-06.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Junction Boxes</a></h4>
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-07.jpg')}}" alt="product"></a>
                                   
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Panels For HVAC Systems</h4>
                                    
                                     
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-08.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Surge Protectors</h4>
                                    
                                     
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-09.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Grounding Materials</h4>
                                    
                                     
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-10.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Electrical Meters</h4>
                                    
                                     
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Electrical-11.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Exhaust Fans</h4>
                                    
                                     
                                </div>
                            </div>
                           
                    </div>
                </div>
            </div>
            <div class="brand__area ">
                <div class="container" style="background-color: #f3f6f9;">
                    <div class="brands__wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="swiper brand__slider" >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-01.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-02.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-03.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-04.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-05.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-06.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-12.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-07.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-08.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-09.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-10.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Electrical-logo/Electrical-logo-11.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                            
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brands/Electrical-logo/Logo-07.jpg')}}" alt="image not found">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="brand__item">
                                    <img src="{{ asset('assets/img/brands/Electrical-logo/Logo-08.jpg')}}" alt="image not found">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end  -->

  

</main>
