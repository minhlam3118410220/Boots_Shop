<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function couponAdd(Request $request){
        //return $request->all();
        $coupon=Coupon::where('code',$request->code)->first();
        //dd($coupon);
        if(!$coupon){
            return back()->with('error','Invalid coupon code, Please try again');
            
        }
        if($coupon){
            $total_price = Cart::subtotal();
            session()->put('coupon',[
                'id'=>$coupon->id,
                'code'=>$coupon->code,
                'value'=>$coupon->discount($total_price)
            ]);
            
            return back()->with('success','Coupon successfully applied');
            
        }

    }
}
