<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(){
        return view('index');
    }

    function masuk(){
        $order = new Order;
        $order->nama = request('nama');
        $order->alamat = request('alamat');
        $order->notlp = request('notlp');
        $order->qty = request('qty');
        $order->total_price = request('total_price');
        $order->status = "Unpied;
    }
}
