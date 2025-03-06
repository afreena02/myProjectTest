@extends('layouts.app')

@section('content')
    <main>

        <div class="adjust-header-space bg-common-white"></div>

        <!-- Blog Area Start -->
        <section class="df-blog__area section-spacing p-relative fix">
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="container">
                <div class="row justify-content-center section-title-spacing wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-xl-8">
                        <div class="section__title-wrapper text-center">
                            <h2 class="section__title">Our Blogs</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 grid">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-6 grid-item">
                            <div class="df-blog2__box bg-2">
                                <div class="df-blog2__thumb-wrap p-relative">
                                    <div class="df-blog2__thumb">
                                        <img src="{{ asset($blog->image_url ?? 'assets/img/gallery/default.jpg') }}"
                                            alt="Blog Image">
                                    </div>
                                </div>
                                <div class="df-blog2__content">
                                    <h3 class="blog-title">
                                        <a href="#">{{ $blog->title }}</a>
                                    </h3>
                                    <p class="blog-author">
                                        <span class="author-name">{{ $blog->user_name ?? 'Unknown' }}</span>
                                    </p>
                                    <p class="blog-description">{{ Str::limit($blog->description, 300) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

        <!-- Styles -->
        <style>
            .df-blog2__box {
                background: #f9f9f9;
                border-radius: 10px;
                overflow: hidden;
                transition: transform 0.3s ease-in-out;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            }

            .df-blog2__box:hover {
                transform: translateY(-10px);
            }

            .df-blog2__thumb img {
                width: 100%;
                height: 250px;
                object-fit: cover;
                border-radius: 10px 10px 0 0;
            }

            .df-blog2__content {
                padding: 15px;
                text-align: center;
            }

            .blog-title {
                font-size: 18px;
                font-weight: bold;
                margin-top: 10px;
            }

            .blog-title a {
                text-decoration: none;
                color: #333;
            }

            .blog-title a:hover {
                color: #ff6600;
            }

            .blog-author {
                font-size: 14px;
                color: #777;
                margin: 5px 0;
            }

            .blog-description {
                font-size: 14px;
                color: #555;
                line-height: 1.5;
            }

            .blog-author {
                font-size: 16px;
                color: #555;
                font-family: Arial, sans-serif;
            }

            .blog-author .author-name {
                font-weight: italic;
                color: black;
                font-size: px;
                margin-left: 5px;
            }
        </style>

    </main>
@endsection
