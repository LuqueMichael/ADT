@extends('modules.web.master')
@section('content')
    <div class="main-content">
            <!-- Breadcrumbs Section Start -->
            <div class="rs-breadcrumbs bg-8">
                <div class="container">
                    <div class="content-part text-center pt-160 pb-160">
                        <h1 class="breadcrumbs-title white-color mb-0">Blog</h1>
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs Section End -->

            <!-- Blog Section  Start -->
            <div class="rs-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-wrap shadow mb-70 xs-mb-50">
                                <div class="image-part">
                                    <a href="blog-single.html"><img src="assets/images/blog/1.jpg" alt=""></a>
                                </div>
                                <div class="content-part">
                                    <h3 class="title mb-10"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones</a></h3>
                                    <ul class="blog-meta mb-22">
                                        <li><i class="fa fa-calendar-check-o"></i> April 6, 2020</li>
                                        <li><i class="fa fa-user-o"></i> admin</li>
                                        <li><i class="fa fa-book"></i> <a href="blog-single.html">Strategy</a></li>
                                    </ul>
                                    <p class="desc mb-20">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...</p>
                                    <div class="btn-part">
                                        <a class="readon-arrow" href="blog-single.html">Continue Reading</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                            <div id="sticky-sidebar" class="blog-sidebar">
                                <div class="sidebar-search sidebar-grid shadow mb-50">
                                    <form class="search-bar">
                                        <input type="text" placeholder="Search...">
                                        <span>
                                          <button type="submit"><i class="flaticon-search"></i></button> 
                                        </span>
                                    </form>
                                </div>

                                <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Ultimas Entradas</h3>
                                    </div>
                                    <div class="single-post mb-20">
                                        <div class="post-image">
                                            <a href="blog-single.html"><img src="assets/images/blog/small/1.jpg" alt="post image"></a>
                                        </div>
                                        <div class="post-desc">
                                            <div class="post-title">
                                                <h5 class="margin-0"><a href="blog-single.html">Covid-19 threatens the next generation of smartphones </a></h5>
                                            </div>
                                            <ul>
                                                <li><i class="fa fa-calendar"></i> 28 June, 2019</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-categories sidebar-grid shadow">
                                    <div class="sidebar-title">
                                       <h3 class="title semi-bold mb-20">Categorias</h3>
                                    </div>
                                    <ul>                                    
                                        <li><a href="blog.html#">GNV</a></li> 
                                        <li><a href="blog.html#">MOTOS</a></li> 
                                        <li><a href="blog.html#">CREDITOS</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sticky-end"></div>
                </div>
            </div>
            <!-- Blog Section  End -->
        </div> 
        <!-- Main content End -->
@endsection
