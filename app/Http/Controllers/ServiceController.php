<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Models\Service;

class ServiceController extends Controller
{
     //show form create service
     public function create_service()
     {
         return view('service.create_service');
     }

     //insert data to db
     public function store_service(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'price' => 'required',
             'stock' => 'required',
             'short_description' => 'required',
             'description' => 'required',
             'image' => 'required',
             'kategori' => 'required',
             'durasi' => 'required',
             'penerbangan' => 'required',
             'maskapai' => 'required',
             'termasuk' => 'required',
             'tidak_termasuk' => 'required'
         ]);

         $file = $request->file('image');
         $path = time().'_'.$request->name.'.'.$file->getClientOriginalExtension();

         if($request->kategori == 'umroh'){
            Storage::disk('local')->put('public/umroh/'.$path, file_get_contents($file));
         }
         elseif($request->kategori == 'private_umroh')
         {
            Storage::disk('local')->put('public/private_umroh/'.$path, file_get_contents($file));
         }
         else{
            Storage::disk('local')->put('public/haji/'.$path, file_get_contents($file));
         }

         Service::create([
             'name' => $request->name,
             'price' => $request->price,
             'stock' => $request->stock,
             'short_description' => $request->short_description,
             'description' => $request->description,
             'image' => $path,
             'kategori' => $request->kategori,
             'durasi' => $request->durasi,
             'penerbangan' => $request->penerbangan,
             'maskapai' => $request->maskapai,
             'termasuk' => $request->termasuk,
             'tidak_termasuk' => $request->tidak_termasuk
         ]);
         return Redirect::route('index_service');
     }

     //show all service
      public function index_service()
      {
          $services = Service::all();
          return view('service.index_service', compact('services'));
      }

      public function our_service()
      {
          $services = Service::all();
          return view('our_service', compact('services'));
      }

      //filtering by atribute (method where)
     public function umroh_service() {
         $services = Service::where('kategori', 'LIKE', 'umroh')
         ->get();
         return view('service.umroh_service', compact('services'));
      }

     public function haji_service() {
         $services = Service::where('kategori', 'LIKE', 'haji')->get();
         return view('service.haji_service', compact('services'));
      }

      public function paket_service() {
         $services = Service::where('kategori', 'LIKE', 'paket')->get();
         return view('service.haji_service', compact('services'));
      }


     //show detail service
     public function show_service(Service $service)
     {
         $layanans = Service::all();
         return view('service.show_service', compact('service','layanans'));
     }

     //form edit
     public function edit_service(Service $service)
     {
         return view('service.edit_service', compact('service'));
     }

     //update data service to db
     public function update_service(Request $request, Service $service)
     {
         $request->validate([
             'name' => 'required',
             'price' => 'required',
             'stock' => 'required',
             'short_description' => 'required',
             'description' => 'required',
             'image' => 'required',
             'kategori' => 'required',
             'durasi' => 'required',
             'penerbangan' => 'required',
             'maskapai' => 'required',
             'termasuk' => 'required',
             'tidak_termasuk' => 'required'
         ]);
         $file = $request->file('image');
         $path = time().'_'.$request->name.'.'.$file->getClientOriginalExtension();
         if($request->kategori == 'umroh'){
            Storage::disk('local')->put('public/umroh/'.$path, file_get_contents($file));
         }
         elseif($request->kategori == 'private_umroh')
         {
            Storage::disk('local')->put('public/private_umroh/'.$path, file_get_contents($file));
         }
         else{
            Storage::disk('local')->put('public/haji/'.$path, file_get_contents($file));
         }

         $service->update([
             'name' => $request->name,
             'price' => $request->price,
             'stock' => $request->stock,
             'short_description' => $request->short_description,
             'description' => $request->description,
             'image' => $path,
             'kategori' => $request->kategori,
             'durasi' => $request->durasi,
             'penerbangan' => $request->penerbangan,
             'maskapai' => $request->maskapai,
             'termasuk' => $request->termasuk,
             'tidak_termasuk' => $request->tidak_termasuk
         ]);
         return Redirect::route('index_service', $service);
     }



     //delete service
     public function delete_service(Service $service)
     {

        //delete image
        if($service->kategori == "umroh"){
            Storage::delete('public/umroh/'. $service->image);
        }
        elseif($service->kategori == "haji")
        {
            Storage::delete('public/haji'. $service->image);
        }
        else
        {
            Storage::delete('public/private_umroh'. $service->image);

        }

        //delete service
        $service->delete();

         return Redirect::route('index_service'); //->with(['success' => 'Data Berhasil Dihapus!']);
     }


    // public function delete_service(Request $request, Service $service)
    //  {

    //      $file = $request->file('image');
    //      $path = time().'_'.$request->name.'.'.$file->getClientOriginalExtension();
    //      if($request->kategori == 'umroh'){
    //         Storage::disk('local')->put('public/umroh/'.$path, file_get_contents($file));
    //      }
    //      elseif($request->kategori == 'private_umroh')
    //      {
    //         Storage::disk('local')->put('public/private_umroh/'.$path, file_get_contents($file));
    //      }
    //      else{
    //         Storage::disk('local')->put('public/haji/'.$path, file_get_contents($file));
    //      }

    //      $service->delete();
    //      return Redirect::route('index_service', $service);
    //  }

}
