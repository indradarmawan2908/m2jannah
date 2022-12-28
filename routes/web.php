<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kontak', function(){
    return view('contact');
})->name('kontak');

// Route::get('/formJamaah', function(){
//     return view('form_jamaah');
// })->name('form_jamaah');


// Route::get('/', [ServiceController::class, 'index_service'])->name('index_service');


Auth::routes();

Route::get('/admin/login',[LoginController::class,'showAdminLoginForm'])->name('admin.beranda');
Route::post('/admin/login',[LoginController::class,'adminLogin'])->name('admin.login');

// Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
// Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',function(){
    return view('admin.beranda');
})->middleware('auth:admin');


Route::get('/admin/service/create', [ServiceController::class, 'create_service'])->name('create_service');
Route::post('/admin/service/create', [ServiceController::class, 'store_service'])->name('store_service');
Route::get('/service/{service}/edit', [ServiceController::class, 'edit_service'])->name('edit_service');
Route::patch('/service/{service}/update', [ServiceController::class, 'update_service'])->name('update_service');
// Route::delete('/service/{service}', [ServiceController::class, 'delete_service'])->name('delete_service');
Route::get('/service/umroh', [ServiceController::class, 'umroh_service'])->name('umroh_service');
Route::get('/service/haji', [ServiceController::class, 'haji_service'])->name('haji_service');
Route::get('/service/paket', [ServiceController::class, 'paket_service'])->name('paket_service');
Route::get('/admin/service', [ServiceController::class, 'index_service'])->name('index_service');
Route::get('/service/{service}', [ServiceController::class, 'show_service'])->name('show_service');

Route::get('/order', [OrderController::class, 'index_order_user'])->name('index_order');
Route::post('/order/{service}', [OrderController::class, 'store_order'])->name('store_order');
Route::get('/order/{order}/edit', [OrderController::class, 'dp_receipt'])->name('dp_receipt');
Route::patch('/order/{order}/update', [OrderController::class, 'submit_dp_receipt'])->name('submit_dp_receipt');
Route::get('/order/{order}/edita', [OrderController::class, 'payment_receipt'])->name('payment_receipt');
Route::patch('/order/{order}/updatea', [OrderController::class, 'submit_payment_receipt'])->name('submit_payment_receipt');


Route::get('/admin/order', [OrderController::class, 'index_order'])->name('index_orderALL');
Route::patch('/order/{order}/confirm', [OrderController::class, 'confirm_payment'])->name('confirm_payment');

Route::get('/jamaah/create', [JamaahController::class, 'create_jamaah'])->name('buat_jamaah');
Route::post('/jamaah/create', [JamaahController::class, 'Tambah_Jamaah'])->name('Tambah_Jamaah');

Route::get('detail-{id}', [OrderController::class, 'detail'])->name('order.detail.order');


// Route::get('/index/jamaah/create', [JamaahController::class, 'create_jamaah'])->name('buat.jamaah');
// Route::post('index/jamaah/create', [JamaahController::class, 'store_jamaah'])->name('tambah.jamaah');

Route::get('/admin/user', [JamaahController::class, 'show_jamaah'])->name('show_jamaah');




Route::delete('/service/{service}', [ServiceController::class, 'delete_service'])->name('delete_service');


// Route::get('/order/create', [OrderController::class, 'create_order'])->name('create_service');
// Route::post('/order/create', [OrderController::class, 'store_order'])->name('store_service');

// Route::get('/', [ServiceController::class, 'our_service'])->name('our_service');
