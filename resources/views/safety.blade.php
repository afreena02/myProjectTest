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
                        <h2 class="page__title-2 mb-15">Safety</h2>
                        <div class="breadcrumb-menu-2 d-flex justify-content-center">
                            <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items-2">
                                    <li class="trail-item-2 trail-begin"><a href="{{ url('/') }}"><span>Home</span></a></li>
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
                                <li><a href="{{ url('/plumbing') }}">Plumbing Items</a></li>
                                <li class="cat-item cat-item-62"><a href="{{ url('/electrical') }}">Electrical Items</a></li>
                                <li><a href="{{ url('/sanitary') }}">Sanitary Items</a></li>
                                <li><a href="{{ url('/safety') }}">Safety Items</a></li>
                                <li><a href="{{ url('/paint') }}">Paint Items</a></li>
                                <li><a href="{{ url('/other') }}">Other Items</a></li>
                            </ul>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 order-lg-2 order-1">
                    <div class="product-area-wrapper mb-20 wow fadeInUp" data-wow-delay=".3s">
                        <div class="product-filter-wrapper mb-30">
                            <div class="row g-5">
                                <div class="col-lg-6 col-md-6">
                                    <!--<div class="items-showing-text">
                                        <div class="items-showing capitalize">
                                            <p> Showing <span>1</span>–<span>9</span> of <span>11</span> Results</p>
                                        </div>
                                    </div>-->
                                </div>
                                
                            </div>
                        </div>
                        <div class="product-wrapper">
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-01.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Safety Helmet
                                    </h4>
                                    
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/safety-02.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Safety Glasses</h4>
                                    
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-03.jpg')}}" alt="product"></a>
                                    
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Vests and Jackets</h4>
                                    
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/safety-04.jpg')}}" alt="product"></a>
                                    
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Boots and Shoes</h4>
                                    
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-05.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Gloves</h4>
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-06.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Ear Protectors</h4>
                                    
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-07.jpg')}}" alt="product"></a>
                                   
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Respirators</h4>
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-08.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Safety Harness</h4>
                                   
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-09.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Barricades and Bariers</h4>
                                      
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-10.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">First Aid Kits</h4>
                                      
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-11.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Fire Extinguisher</h4>
                                      
                                </div>
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-12.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Emergency Eyewash</h4>
                                     
                                </div>
                                
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-13.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Safety Sings and Labels</h4>
                                     
                                </div>
                                
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-14.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Lockout or Tagout Devices</h4>
                                     
                                </div>
                                
                            </div>
                            <div class="product-single">
                                <div class="product-thumb">
                                    <a href="shop-details.html"><img src="{{ asset('assets/img/shop/Safety-15.jpg')}}" alt="product"></a>
                                    
                                </div>
                                <div class="product-description">
                                    <h4 class="product-name">Safety Traffic Cone</h4>
                                   
                                </div>
                                
                            </div>
                        </div>
                        <!--<div class="basic-pagination mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <ul>
                                <li><a class="prev page-numbers" href="#">
                                        <i class="icon-022-left"></i>
                                    </a>
                                </li>
                                <li><span aria-current="page" class="page-numbers current">1</span></li>
                                <li><a class="page-numbers" href="#">2</a></li>
                                <li><a class="page-numbers" href="#">3</a></li>
                                <li><a class="page-numbers" href="#">
                                        <i class="fa-light fa-ellipsis"></i>
                                    </a>
                                </li>
                                <li><a class="next page-numbers" href="#">
                                        <i class="icon-021-next"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="brand__area ">
                <div class="container">
                    <div class="brands__wrapper wow fadeInUp" data-wow-delay=".3s">
                        <div class="swiper brand__slider" >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-01.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-02.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-03.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-04.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-05.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-06.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-07.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-08.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-09.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-10.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-11.jpg')}}" alt="image not found">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="brand__item">
                                        <img src="{{ asset('assets/img/brands/Other-logo/Other-12.jpg')}}" alt="image not found">
                                    </div>
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
@endsection