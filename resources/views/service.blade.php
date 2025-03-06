@extends('layouts.app')

@section('content')

<main>

    <div class="adjust-header-space bg-common-white"></div>

    <!-- services area start  -->
    <section class="df-services2__area section-spacing p-relative x-clip">
        <div class="area-shapes">
            <div class="df-inner-area__shape1"></div>
            <div class="df-inner-area__shape2"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center section-title-spacing mb-40 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xl-8">
                    <div class="section__title-wrapper text-center">
                        <span class="section__subtitle bg-lighter">OUR SERVICES</span>
                        <h2 class="section__title">Explore Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row mt-50 g-5 row-cols-xl-3 row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-1">
                                <img src="{{ asset('assets/img/service-icon/service-1.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/civil') }}">Civil Works</a></h4>
                            <p class="small">AL-NOOR AL-HUDA offers comprehensive civil services tailored to project needs, ensuring efficient execution and adherence to local regulations for durable and safe structures. 
                            </p>
                            <div class="service3__btn">
                                <a href="{{ url('/civil') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__content">
                        <div class="service3__img bg-2">
                            <img src="{{ asset('assets/img/service-icon/service-2.webp')}}" alt="image not found">
                        </div>
                        <h4 class="service3__title"><a href="{{ url('/interior') }}">Interior Fit-out Works</a></h4>
                        <p class="small">Al Noor Al Huda excels in interior fit-out works, offering tailored solutions to elevate spaces with precision and style. Trust us for seamless execution and exceptional results.
                        </p>
                        <div class="service3__btn">
                            <a href="{{ url('/interior') }}" class="primary-btn bordered">Know more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__content">
                        <div class="service3__img bg-3">
                            <img src="{{ asset('assets/img/service-icon/service-3.webp')}}" alt="image not found">
                        </div>
                        <h4 class="service3__title"><a href="{{ url('/waterproofing') }}">Waterproofing works</a></h4>
                        <p class="small">Al Noor Al Huda specializes in waterproofing and fit-out works, ensuring quality and durability in every project. Trust us to protect and enhance your spaces with expert craftsmanship and attention to detail.</p>
                        <div class="service3__btn">
                            <a href="{{ url('/waterproofing') }}"  class="primary-btn bordered">Know more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-1">
                                <img src="{{ asset('assets/img/service-icon/service-4.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/painting') }}">Painting Works</a></h4>
                            <p class="small">Transform your interiors and exteriors with AL-NOOR AL-HUDA's professional painting services. Our skilled team delivers impeccable finishes, using quality materials and techniques for lasting results.
                            </p>
                            <div class="service3__btn">
                                <a href="{{ url('/painting') }}"  class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-2">
                                <img src="{{ asset('assets/img/service-icon/service-5.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/fire-rated') }}">Fire rated Door Works</a></h4>
                            <p class="small">Al Noor Al Huda is your trusted partner for fire-rated door works, providing reliable solutions for safety and security. Count on us for quality craftsmanship and compliance with industry standards.
                            </p>
                            <div class="service3__btn">
                                <a href="{{ url('/fire-rated') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-6.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/expansion-control') }}">Expansion joints & control joints works</a></h4>
                            <p class="small">At Al Noor Al Huda, we specialize in expansion joints and control joints works, ensuring structural integrity and longevity in every project. Trust our expertise for seamless installation and optimal performance.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/expansion-control') }}"  class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-7.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/flooring') }}">Flooring Works</a></h4>
                            <p class="small">Al Noor Al Huda excels in flooring works, offering innovative solutions and superior craftsmanship. Trust us for stunning flooring designs and durable installations.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/flooring') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-8.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/fabrication') }}">Fabrication Works</a></h4>
                            <p class="small">AL-NOOR AL-HUDA specializes in top-notch fabrication solutions, delivering custom-made products to meet diverse project requirements with precision, quality, and timely delivery.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/fabrication') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-2">
                                <img src="{{ asset('assets/img/service-icon/service-9.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/glass') }}">Glass Works</a></h4>
                            <p class="small">Elevate your spaces with precision-crafted glass installations from AL-NOOR AL-HUDA. Our expertise encompasses innovative designs and expert installation for both residential and commercial projects.
                            </p>
                            <div class="service3__btn">
                                <a href="{{ url('/glass') }}"  class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-10.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/upvc') }}">UPVC Doors and Windows</a></h4>
                            <p class="small">
                                Al Noor Al Huda specializes in UPVC doors and windows, providing high-quality solutions for durability and energy efficiency. Trust us for expert installations and superior performance.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/upvc') }}"  class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-2">
                                <img src="{{ asset('assets/img/service-icon/service-11.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/carpentry') }}">Carpentry works</a></h4>
                            <p class="small">From intricate woodwork to structural enhancements, AL-NOOR AL-HUDA offers skilled carpentry services tailored to your project's needs, ensuring craftsmanship excellence and timely completion.
                            </p>
                            <div class="service3__btn">
                                <a href="{{ url('/carpentry') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-12.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/aluminum-kitchen') }}">Aluminum Kitchen, Doors & windows</a></h4>
                            <p class="small">At Al Noor Al Huda, we offer top-notch aluminum kitchen, doors, and windows solutions for modern and functional spaces. Trust our expertise for sleek designs and durable installations.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/aluminum-kitchen') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-13.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/gypsum') }}">Gypsum Works</a></h4>
                            <p class="small">Trust us for flawless gypsum installations, enhancing interiors with versatile designs and expert craftsmanship. Our commitment to quality ensures durable and aesthetically pleasing finishes.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/gypsum') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="service3__box">
                        <div class="service3__content">
                            <div class="service3__img bg-3">
                                <img src="{{ asset('assets/img/service-icon/service-14.webp')}}" alt="image not found">
                            </div>
                            <h4 class="service3__title"><a href="{{ url('/false-ceiling') }}">False ceiling works</a></h4>
                            <p class="small">Al Noor Al Huda specializes in false ceiling works, delivering innovative designs and impeccable craftsmanship. Trust us for elevated aesthetics and superior quality in every project.</p>
                            <div class="service3__btn">
                                <a href="{{ url('/false-ceiling') }}" class="primary-btn bordered">Know more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services area end  -->



    <!-- horizontal line start  -->
    <div class="container">
        <div class="hr1"></div>
    </div>
    <!-- horizontal line end  -->

   

</main>
@endsection