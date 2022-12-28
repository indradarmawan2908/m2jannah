<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Jamaah;
use App\Models\Order;


class JamaahController extends Controller
{
    //show form data jamaah

    public function Index_Jamaah()
    {
        $user_id = Auth::id();
        $jamaah = Jamaah::where('user_id', $user_id)
        ->get();
     
        return view('jamaah.index',compact('jamaah'));
    }
    public function Buat_Jamaah(Order $order)
    {
        return view('jamaah.create', compact('order'));
    }
    public function Tambah_Jamaah(Order $order, Request $request)
    {
        $user_id = Auth::id();
       

        $request->validate([
        'full_name' => 'required',
        'nohp' => 'required',
        ]);
      

         
                Jamaah::create([
                    'full_name' => $request->full_name,
                    'nohp' => $request->nohp,
                    'user_id' => $user_id
                ]);
         
           return Redirect::route('index_order');
    }

    public function create_jamaah(Order $order)
    {
        return view('jamaah.create', compact('order'));
    }


       //insert data to db
       public function store_jamaah(Request $request)
       {
           $user_id = Auth::id();
          

           $request->validate([
           'full_name' => 'required',
           'nohp' => 'required',
           ]);

         
                Jamaah::create([
                    'full_name' => $request->full_name,
                    'nohp' => $request->nohp,
                    'user_id' => $user_id
                ]);
          

           return Redirect::route('index_order');
        // return view('jamaah.data_jamaah', compact('order'));

       }

    //show Data User
    public function show_jamaah(Order $order)
    {
        $user = Auth::user();
     

        // $role = $user->role == 'marketing';
        //   $orders = Order::all();
        $jamaahs = Jamaah::where('user_id', $user->id)->get();
        // return view('jamaah.show_jamaah');
        return view('jamaah.show_jamaah', compact('order_id','jamaahs'));

    }

}
