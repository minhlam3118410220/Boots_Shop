@extends('front.layout.master')

@section('title' , 'Shopping Cart')

@section('body')
     <!--Breadcrumb Section Start  -->
     <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="/"><i class="fa fa-home"> Home</i></a>
                        <a href="/shop">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!--Breadcrumb Section End  -->

     <!--Shopping Cart Section Start  -->
     <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                
                @if (Cart::count() > 0)
                    <div class="col-lg-12">
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th class="p-name">Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th><i onclick="confirm('Are you sure?') === true? window.location ='./cart/destroy' : ''" class="ti-close" style="cursor: pointer"></i></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($carts as $cart)
                                    <tr>
                                        <td class="cart-pic first-row"><img style="height:170px" src="front/img/products/{{$cart->options->images[0]->path}}" alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>{{$cart->name}}</h5>
                                        </td>
                                        <td class="p-price first-row">${{ number_format($cart->price,2)}}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="{{$cart->qty}}" data-rowid="{{$cart->rowId}}">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="total-price first-row">${{ number_format($cart->price * $cart->qty, 2)}}</td>
                                        <td class="close-td first-row"><i onclick="window.location ='./cart/delete/{{$cart->rowId}}'" class="ti-close"></i></td>

                                    </tr>  
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="cart-buttons">
                                    <a href="#" class="primary-btn continue-shop">Continue Shopping</a>
                                    <a href="#" class="primary-btn up-cart">Update Cart</a>
                                </div>
                                <div class="discount-coupon">
                                    <h6>Discount Codes</h6>
                                    @if(session()->has('coupon'))
                                    <span>Have a Coupon</span>
                                     @endif
                                    <form method="POST" action="coupon/add" id="coupon-form" class="coupon-form">
                                        @csrf
                                        <input type="text" class="form-control" name="code" placeholder="Enter your codes">
                                        <button type="submit" class="site-btn coupon-btn">Apply</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 offset-lg-4">
                                <div class="proceed-checkout">
                                    <ul>
                                        <li class="subtotal">Subtotal <span>${{$subtotal}}</span></li>
                                        @if(session()->has('coupon'))
                                        <li class="subtotal p-t-10">Coupon 
                                            <span>-${{Session::get('coupon')['value']}}</span>
                                        </li>
                                        @endif
                                        @if(session()->has('coupon'))
                                            <li class="cart-total">Total <span>${{$total-Session::get('coupon')['value']}}</span></li>
                                        @else
                                            <li class="cart-total">Total <span>${{$total}}</span></li>
                                        @endif
                                       
                                    </ul>
                                    <a href="./checkout" class="proceed-btn">PROCEED TO CHECKOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-lg-12">
                        <h4 class="text-center">YOUR CART IS EMPTY.</h4>
                    </div>
                @endif
            </div>
        </div>
     </div>
     <!--Shopping Cart Section End  -->

@endsection

@section('scripts')

        <script>
            $(document).on('click', 'coupon-btn',function(e){
                e.preventDefault();
                var code=$('input[name=code]').val();
                

            });
        </script>
  
@endsection
   


    