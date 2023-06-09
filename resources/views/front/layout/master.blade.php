<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Wolves</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@1.0/dist/tailwind.min.css" rel="stylesheet">


    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader">

        </div>
    </div>

    <!-- Header Section Start-->
    <div class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i>
                        Wolves@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i>
                        +84 93.32.18.11
                    </div>
                </div>
    
                <div class="ht-right">
                    <a href="login.html" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select name="language_drop" name="countries" id="countries" style="width:90px;">
                            <option value="yt" data-image="front/img/flag-1.jpg" data-imagecss="flag yt"
                                    data-title="English" >English</option>
                            <option value="yu" data-image="front/img/flag-2.jpg" data-imagecss="flag yu"
                                    data-title="Bangladesh">German</option>
                            <option value="yf" data-image="front/img/flag-1.jpg" data-imagecss="flag yf"
                                    data-title="France" >France</option>
                                        
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="inner-header">
                <div  style="display: flex; align-items: center; flex-direction: row;">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./">
                                <img src="front/img/logo.png" width="150" height="50"  alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 ">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">All Categories</button>
                                <div class="input-group">
                                    <input name="search" type="text" value="{{ request('search')}}" placeholder="What do you need?">
                                    <button type="submit" class="bg-dark" type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 text-right" >
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span class="bg-danger">1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./cart">
                                    <i class="icon_bag_alt"></i>
                                    <span class="bg-danger">{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>

                                               @foreach (Cart::content() as $cart)
                                                    <tr>
                                                    <td class="si-pic"><img style="height:70px" src="front/img/products/{{$cart->options->images[0]->path}}"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>${{ number_format($cart->price,2)}} x {{$cart->qty}}</p>
                                                            <h6>{{$cart->name}}</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                               @endforeach
                                                
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>${{Cart::total()}}</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./cart" class="primary-btn view-card">VIEW CART</a>
                                        <a href="./checkout" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                             <li class="cart-price">${{Cart::total()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                {{-- <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li><a href="">Chelsea Boot</a></li>
                            <li><a href="">Combat Boot</a></li>
                            <li><a href="">Derby</a></li>
                            <li><a href="">Loafer</a></li>
                            <li><a href="">Accessory</a></li>
                            
                        </ul>
                    </div>
                </div> --}}
                <nav class="nav-menu mobile-menu ">
                    <ul >
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="./">Home</a></li>
                        <li class="{{ (request()->segment(1) == 'shop') ? 'active' : '' }}"><a href="./shop">Shop</a></li>
                        <li><a href="">Collection</a>
                            <ul class="dropdown">
                                <li><a href="shop/Men">Men</a></li>
                                <li><a href="shop/Lady">Women</a></li>
                                <li><a href="shop/Accessories">Accessories</a></li>
                            </ul>
                        </li>
                        <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}"><a href="./blog">Blog</a></li>
                        <li class="{{ (request()->segment(1) == 'contact') ? 'active' : '' }}"><a href="./contact">Contact</a></li>
                        <li class="{{ (request()->segment(1) == 'cart') ? 'active' : '' }}"><a href="./cart">Cart</a></li>
                        <li><a href="./">Pages</a>
                            <ul class="dropdown">
                                {{-- <li><a href="blog-details.html">Blog Details</a></li> --}}
                                <li><a href="./checkout">Checkout</a></li>
                                {{-- <li><a href="./">Faq</a></li> --}}
                                <li><a href="./">Register</a></li>
                                <li><a href="./">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </div>
     <!-- Header Section End-->


    @yield('body')



     <!-- Partner Logo Section Start-->
     {{-- <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
     </div> --}}
     <!-- Partner Logo Section End-->

     <!-- Footer Section Start-->
     <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/logo.png" width="100" height="50" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>123 Le Van Si . Ho Chi Minh</li>
                            <li>Phone: +84 93.13.21.811</li>
                            <li>Email: Wolves@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Checkout</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="">My Account</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Shopping Cart</a></li>
                            <li><a href="">Shop<a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-widget">
                        <div class="newslatter-item">
                            <h5>SUBSCRIBE NOW</h5>                          
                            <ul>
                                <li><a href="">Sign Up For Exclusive Discounts, Free Shipping and So Much More!</a></li>
                                
                            </ul>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Your EMail">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            @<script>document.write(new Date().getFullYear());</script> Wolves <i class="fa fa-heart-o" aria-hidden="true"></i>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </footer>
     <!-- Footer Section End-->


    <!-- Js Plugins -->


    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>

    <script src="front/js/owlcarousel2-filter.min.js"></script>

    <script src="front/js/main.js"></script>
</body>

</html>