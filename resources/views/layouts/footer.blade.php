<footer>
    <section class="df-footer__area bg-theme-5">
        <div class="footer__widgets-area">
            <div class="container">
                <div class="footer__widgets-wrapper-2 widgets-5 row">
                    <div class="footer__widget col-lg-4 col-md-6 col-12 mt-5">
                        <div class="mb-40">
                            <div class="df-footer__logo mb-30">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/logo.png')}}" alt="image not found"></a>
                            </div>
                            
                        </div>
                        <div class="social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/login/" target="_blank"><i class="icon-023-facebook-app-symbol"></i></a></li>
                                <li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="icon-025-instagram"></i></a></li>
                                <li><a href="https://www.pinterest.com/login/" target="_blank"><i class="icon-029-pinterest"></i></a></li>
                                <li><a href="https://x.com/i/flow/login" target="_blank"><i class="icon-twitter-x"></i></a></li>                                
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-2 col-md-4 col-12 mt-5">
                        <h4 class="footer__widget-title">Company</h4>
                        <div class="footer__links underline">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/service') }}">Services</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-2 col-md-4 col-12 mt-5">
                        <h4 class="footer__widget-title">Categories</h4>
                        <div class="footer__links underline">
                           <ul>
                            @foreach($categories as $category)
                                <li><a href="{{url('/' . strtolower($category->name))}}">{{$category->name}} Items</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget col-lg-4 col-md-6 col-12 mt-5">
                        <h4 class="footer__widget-title">Contact Info</h4>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-phone"></i>
                            <p>+974 66445912</p>
                        </div>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-envelope"></i>
                            <p>al.nooralhuda@gmail.com</p>
                        </div>
                        <div class="footer-meta mb-15">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>C.R. NO: 49223, P.O. BOX: 31591, <br> DOHA, QATAR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- horizontal line start  -->
        <div class="container">
            <div class="hr1"></div>
        </div>
        <!-- horizontal line end  -->
        <div class="copyright__area p-relative">
            <div class="container">
                <div class="copyright-content__wrapper">
                    <div class="copyright__text">
                        <p>©
                            <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                document.write(new Date().getFullYear())
                            </script>
                           Al-Noor Al-Huda Tradg & Cont.Est By <a href="https://progbiz.io/" target="_blank" style="color: #1765E5;">progbiz.</a>
                           All Rights Reserved.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</footer>