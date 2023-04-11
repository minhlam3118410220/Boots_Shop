<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

use function Ramsey\Uuid\v1;

class CheckOutController extends Controller
{
    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total','subtotal'));
    }

    public function addOrder(Request $request)
    {
        //1.Thêm đơn hàng
        $order = Order::create($request->all());

        //2.Thêm chi tiết đơn hàng
        $carts = Cart::content();

        foreach ($carts as $cart ) {
            $data =[
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty ,
            ];

            OrderDetails::create($data);
        }

        //3.Xóa giỏ hàng
        Cart::destroy();

        //4.Trả về kết quả
        return redirect('/checkout/result')
                ->with('notification' , 'Success! You will pay on delivery.');
    }

    public function result()
    {
        $notification = session('notification');
        return view('front.checkout.result', compact('notification'));
    }

}
