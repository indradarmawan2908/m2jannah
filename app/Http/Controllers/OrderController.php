<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class OrderController extends Controller
{

     //show all service
     public function index_order()
     {
         $orders = Order::all();
         return view('order.index_order', compact('orders'));
     }



    //show Boking
    public function index_order_user()
    {
        $user = Auth::user();
        // $role = $user->role == 'marketing';
        //   $orders = Order::all();
        $orders = Order::where('user_id', $user->id)->get();
        return view('order.index_user', compact('orders'));
        // return $orders;
    }

    public function detail($id){
      
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)
        ->where('id',$id)
        ->get();

        return view('order.detail_order', compact('orders'));

    }


    // add product to cart
    public function store_order(Service $service, Request $request)
    {
        $user_id = Auth::id();
        $service_id = $service->id;

    //    $existing_order = Order::where('service_id', $service_id)
    //     ->where('user_id', $user_id)
    //     ->first();
        

        // if($existing_order == null){
            $request->validate([
                'amount' => 'required|gte:1|lte:'.$service->stock
            ]);

            Order::create([
                'user_id' => $user_id,
                'service_id' => $service_id,
                'amount' => $request->amount
            ]);

        // }else {
          
        // }
      

        return redirect::route('buat_jamaah');

    }

    public function dp_receipt(Order $order)
    {
        return view('order.dp_receipt', compact('order'));
    }

    //Submit uang muka
    public function submit_dp_receipt(Order $order, Request $request)
    {
        $file =   $request->file('dp_receipt');
        $path = time().'_'.$order->id.'.'.$file->getClientOriginalExtension();

        Storage::disk('local')->put('public/dp_receipt/'.$path, file_get_contents($file));

        $order->update([
            'dp_receipt' => $path
        ]);

        return redirect::route('index_order', $order);
    }

    //Pelunasan
    public function payment_receipt(Order $order)
    {
        return view('order.payment_receipt', compact('order'));
    }

    //Submit uang muka
    public function submit_payment_receipt(Order $order, Request $request)
    {
        $file =   $request->file('payment_receipt');
        $path = time().'_'.$order->id.'.'.$file->getClientOriginalExtension();

        Storage::disk('local')->put('public/payment_receipt/'.$path, file_get_contents($file));

        $order->update([
            'payment_receipt' => $path
        ]);

        return redirect::route('index_order', $order);
    }

    //validasi payment
    public function confirm_payment(Order $order)
    {
        $order->update([
            'is_paid' =>true
        ]);
        return Redirect::back();
    }
}

