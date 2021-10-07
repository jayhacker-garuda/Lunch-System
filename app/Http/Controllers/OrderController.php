<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::orderBy('id', 'asc')->get();

        return view('orders.index')
        ->with('orders', $orders);
        
    }
}