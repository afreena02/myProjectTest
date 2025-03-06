<!DOCTYPE html>
<html lang="en">

@include('layouts.head')


<body>
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Drag</span></div>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img src="{{asset('assets/img/logo/logo.png')}}" alt="">
                    <img class="loading-logo" src="{{asset('assets/img/logo/preloader.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    @include('layouts.header')

    <aside class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset__widget offset__header">
                    <div class="offset__logo">
                        <a href="index.html">
                            <img src="{{asset('assets/img/logo/logo-white.png')}}" alt="logo">
                        </a>
                    </div>
                    <button class="side-info-close">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offset__widget offset__support d-none d-sm-block">
                    <h3 class="offset__title">Handling over projects that are a Source of Pride</h3>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>
                <div class="offset__widget offset__support">
                    <h6 class="offset__sub-title small fw-400 mb-30">CONTACT US</h6>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2">
                            <i class="icon-007-telephone"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="tel:+866332-2020">+866 332-2020</a></span>
                        </div>
                    </div>
                    <div class="meta-item mb-20">
                        <div class="meta-item__icon-2 style-2">
                            <i class="icon-052-email"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a
                                    href="https://html.bdevs.net/cdn-cgi/l/email-protection#23505653534c515763474c454a5b0d404c4e"><span
                                        class="__cf_email__"
                                        data-cfemail="15666065657a676155717a737c6d3b767a78">[email&#160;protected]</span></a></span>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-item__icon-2 style-3">
                            <i class="icon-030-pin"></i>
                        </div>
                        <div class="meta-item__text-2">
                            <span><a href="#">800S, Salt Lake City, USA</a></span>
                        </div>
                    </div>
                </div>
                <div class="offset__widget offset__gallery">
                    <div class="offset__instagram d-none d-sm-block">
                        <h6 class="offset__sub-title small fw-400 mb-30">OUR INSTAGRAM POST</h6>
                        <div class="tp-insta">
                            <div class="row">
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-1.webp')}}" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-2.webp')}}" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-3.webp')}}" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-4.webp')}}" alt="image not found"></a>
                                        </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-5.webp')}}" alt="image not found"></a>
                                    </div>
                                </div>
                                <div class="col-4 col-sm-4">
                                    <div class="offset-insta__thumb">
                                        <a href="#">
                                            <img src="{{asset('assets/img/offcanvas/insta-6.webp')}}" alt="image not found"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')

    
    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <div class="whatsapp-button">
        <a href="https://wa.me/+97466445912" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <div class="whatsapp-button call-button">
        <a href="tel:+97466445912" target="_blank">
            <i class="fa fa-phone"></i>
        </a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-ui-slider-range.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/js_circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
