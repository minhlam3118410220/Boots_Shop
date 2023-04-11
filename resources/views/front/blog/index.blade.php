@extends('front.layout.master')

@section('title' ,'Blog')

@section('body')

      <!--Breadcrumb Section Start  -->
      <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"> Home</i></a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!--Breadcrumb Section End  -->
     
     <!--Blog Section Start  -->
     <div class="blog-section spad">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search....">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="">Travel</a></li>
                                <li><a href="">Picnic</a></li>
                                <li><a href="">Model</a></li>
                                <li><a href="">Party</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            <div class="recent-blog">
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Make..</h6>
                                        <p>Lin<span>Mar 5 ,2023</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Make..</h6>
                                        <p>Lin<span>Mar 5 ,2023</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Make..</h6>
                                        <p>Lin<span>Mar 5 ,2023</span></p>
                                    </div>
                                </a>
                                <a href="" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Make..</h6>
                                        <p>Lin<span>Mar 5 ,2023</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div> --}}
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="row">
                        
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-sm-6">
                        <div class="blog-item">
                            <div class="bi-pic">
                                <img src="front/img/blog/{{$blog->image}}" alt="">
                            </div>
                            <div class="bi-text">
                                <a href="blog-details.html">
                                    <h4>{{$blog->title}}</h4>
                                </a>
                                <p>{{$blog->category}}<span> {{date('M d ,Y', strtotime($blog->created_at))}}</span></p>
                            </div>
                        </div>
                    </div>
                        @endforeach
                        
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">Loading More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
      <!--Blog Section End  -->
@endsection
  