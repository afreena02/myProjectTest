<header>
    <div id="header-sticky" class="header__main">
        <div class="container header__main-container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="header__main-content-wrapper p-relative">
                        <div class="header__main-left">
                            <div class="header__logo">
                                <a href="{{ url('/index') }}" class="logo-dark"><img src="{{ asset('assets/img/logo/logo.png')}}" alt="logo-img" width="120"></a>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                            <div class="location-search">
                                <img class="img-fluid" src="{{ asset('assets/img/icon/iso-mark.png')}}" alt="" width="65%">
                            </div>
                        </div>
                        <div class="header__main-right">
                            <div class="main-menu main-menu1 d-none d-xl-block">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('/index') }}">Home</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Categories</a>
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                <li><a href="{{url('/' . strtolower($category->name))}}">{{$category->name}} Items</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="has-dropdown has-mega-menu">
                                            <a href="{{ url('/service') }}">Services</a>
                                            <!-- <ul class="mega-menu">
                                                <li class="mega-menu-item">
                                                    <ul>
                                                        <li><a href="civil-works.html">Civil Works</a></li>
                                                        
                                                        <li><a href="glass-works.html">Glass Work</a>
                                                        </li>
                                                        <li><a href="fabrication-works.html">Fabrication works</a></li>
                                                        <li><a href="painting-works.html">Painting Works</a>
                                                        </li>
                                                        
                                                        <li><a href="carpentary-works.html">Carpentry Works</a>
                                                        </li>
                                                        <li><a href="gypsum-works.html">Gypsum work</a></li>
                                                        <li><a href="flooring-works.html">Flooring Works</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul>
                                                        <li><a href="fire-rated-door-works.html">Fire rated Doors</a></li>
                                                        
                                                        <li><a href="interior-fit-out-works.html">Interior Fit-out Works</a></li>
                                                        <li><a href="upvc-doors-and-windows.html">UPVC Doors and Windows</a></li>
                                                        <li><a href="waterproofig-works.html">Waterproofing work</a></li>
                                                        <li><a href="expansion-joints-works.html">Expansion joints Works</a></li>
                                                        <li><a href="aluminium-doors-kitchen-windows.html">Aluminum Kitchen, Doors & windows</a></li>
                                                        
                                                        <li><a href="false-ceiling-works.html">False ceiling works</a></li>
                                                    </ul>
                                                </li>
                                               
                                                
                                            </ul> -->
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('/about') }}">About Us</a>
                                            
                                        </li>
                                        
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('/blog') }}">Blogs</a>
                                            
                                        </li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                       <li><button class="btn btn-primary d-none d-md-block "><a style="padding: 10px 0;color:#fff;" href="{{url('assets/brouchure_compressed.pdf')}}" download>Download</a></button></li>
                                    </ul>
                                    
                                </nav>
                            </div>
                            
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                            <div class="message__now d-none d-lg-inline-flex">
                                <div class="meta-item">
                                    <div class="meta-item__icon">
                                        <i class="icon-074-phone"></i>
                                    </div>
                                    <div class="meta-item__text">
                                        <p>CONTACT NUMBER</p>
                                        <span><a class="is-black" href="tel:+97466445912">+974 66445912</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="area-separator d-none d-lg-inline-flex"></div>
                            <button class="btn btn-primary d-block d-md-none "><a style="padding: 20px 0;color:#fff;font-size: 14px;" href="brouchure_compressed.pdf" download >Download</a></button>
                            <button class="side-toggle">
                                <span class="menu__bar">
                                    <span class="bar-icon">
                                        <span></span>
                                <span></span>
                                <span></span>
                                </span>
                                </span>
                            </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>