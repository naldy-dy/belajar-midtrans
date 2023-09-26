<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class IndexController extends Controller
{
    function index(){
        return view('index');
    }

    function checkout(Request $request){
     $order = new Order;
     $order->nama = request('nama');
     $order->alamat = request('alamat');
     $order->notlp = request('notlp');
     $order->qty = request('qty');
     $order->total_price = 100000*request('qty');
     $order->status = "Unpied";
     $order->save();

     \Midtrans\Config::$serverKey = "SB-Mid-server-69wR6Ng8FfX55fZPy5ZHQkNs";
     \Midtrans\Config::$isProduction = false;
     \Midtrans\Config::$isSanitized = true;
     \Midtrans\Config::$is3ds = true;

     $params = array(
        'transaction_details' => array(
            'order_id' => $order->id,
            'gross_amount' => $order->total_price,
        ),
        'customer_details' => array(
            'first_name' => request('nama'),
            'phone' => request('notlp'),
        ),
    );

     $snapToken = \Midtrans\Snap::getSnapToken($params);

     return view('checkout',compact('snapToken','order'));

 }
}
