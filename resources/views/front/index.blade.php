@extends('front.layout.master')

@section('title' ,'Home')

@section('body')
        <!-- Hero Section Start-->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
                <div class="container">
                    {{-- <div class="row">
                        <div class="col-lg-5">
                            <span class="text-dark">Outerwears</span>
                            <h1 class="text-light">Black Friday</h1>
                            <!-- <p>Lorem ipsum dolor sit amet,</p> -->
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div> --}}
                    <!-- <div class="off-card">
                        <h2>Sale <span>40%</span></h2>
                    </div> -->
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            
                            
                            <!-- <a href="#" class="primary-btn">Shop Now</a> -->
                        </div>
                    </div>
                    <!-- <div class="off-card">
                        <h2>Sale <span>58%</span></h2>
                    </div> -->
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="front/img/hero-3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            
                            
                            <!-- <a href="#" class="primary-btn">Shop Now</a> -->
                        </div>
                    </div>
                    <!-- <div class="off-card">
                        <h2>Sale <span>58%</span></h2>
                    </div> -->
                </div>
            </div>
            
        </div>
    </section>
    <!-- Hero Section End-->

    <!-- Banner Section Start-->
    <div class="banner-section sqad">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="single-banner">
                        <img src="front/img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <!-- <h4>Men's</h4> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner">
                        <img src="front/img/banner-2.jpg"  alt="">
                        <div class="inner-text">
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Banner Section End-->

    <!-- Women Banner Section Start-->
    <section class="women-banner sqad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="front/img/pic-women.jpg">
                        <h2>Lady</h2>
                        <a href="#">Discover More</a>

                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="women">All</li>
                            <li class="item" data-tag=".ChelseaBoot" data-category="women">Chelsea Boot</li>
                            <li class="item" data-tag=".CombatBoot" data-category="women">Combat Boot</li>                          
                            <li class="item" data-tag=".Derby" data-category="women">Derby</li>
                            <li class="item" data-tag=".Loafer" data-category="women">Loafer</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel women">
                        
                        @foreach ($ladyProducts as $ladyProduct)
                            @include('front.components.product-item' , ['product' => $ladyProduct])
                        @endforeach
                        

                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- Women Banner Section End-->

    <!-- Deal Of The Week Section Start-->
    <section class="deal-of-week set-bg sqad" data-setbg="front/img/time.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="sectionx-title">
                    <h2 class=" mb-3">Deal Of The Week</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur, .</p> -->
                    <!-- <div class="product-price">
                        $35.00
                        <span>/ HanBag</span>
                    </div> -->
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span class="text-dark">56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End-->

    <!-- Man Banner Section Start-->
    <section class="man-banner sqad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="filter-control">
                        <ul>
                            <li class="item active" data-tag="*" data-category="men">All</li>
                            <li class="item" data-tag=".ChelseaBoot" data-category="men">Chelsea Boot</li>
                            <li class="item" data-tag=".CommbatBoot" data-category="men">Combat Boot</li>                          
                            <li class="item" data-tag=".Derby" data-category="men">Derby</li>
                            <li class="item" data-tag=".Loafer" data-category="men">Loafer</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel men">
                        
                        @foreach ($menProducts as $menProduct)
                          @include('front.components.product-item',['product' => $menProduct])
                        @endforeach
                        

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg" data-setbg="front/img/pic-man.jpg">
                        <h2>Men</h2>
                        <a href="#">Discover More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End-->

    <!-- Instagram Section Start-->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="">Buy Now</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="shop.html">Buy Now</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="shop.html">Buy Now</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="shop.html">Buy Now</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="shop.html">Buy Now</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="shop.html">Buy Now</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End-->

    <!-- Latest blog Section Start-->
    <section class="latest-blog sqad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6" >
                    <div class="single-latest-blog">
                        <img src="front/img/blog/{{$blog->image}}" height="170" alt="">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    {{date('M d ,Y', strtotime($blog->created_at))}}
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    {{ count($blog->blogComments)}} 
                                </div>
                            </div>
                            <a href="">
                                <h4>{{$blog->title}}</h4>
                            </a>
                            <p>{{$blog->subtitle}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
            {{-- <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery on time</h6>
                                <p>if good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="front/img/icon-3.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </section>
    <!-- Latest blog Section End-->
@endsection
    
    
    
