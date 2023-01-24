<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\Admincontroller;



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
route::get('/', [Homecontroller::class,'index']);

Route::middleware(['auth::sanctum','verified'])->get('/dashboard', function () {
        return view('dashboard');

 	})->name('dashboard');



   
    
    route::get('/view_catagory', [Admincontroller::class,'view_catagory']);

    route::post('/add_catagory', [Admincontroller::class,'add_catagory']);

    route::get('/delete_catagory/{id}', [Admincontroller::class,'delete_catagory']);

    route::get('/view_product', [Admincontroller::class,'view_product']);

    route::POST('/add_product', [Admincontroller::class,'add_product']);

    route::get('/show_product', [Admincontroller::class,'show_product']);

    route::get('/delete_product/{id}', [Admincontroller::class,'delete_product']);
    
    route::get('/update_product/{id}', [Admincontroller::class,'update_product']);

    route::POST('/update_product_confirm/{id}', [Admincontroller::class,'update_product_confirm']);
    
    route::get('/order', [Admincontroller::class,'order']);

    route::get('/delivery/{id}', [Admincontroller::class,'delivery']);

    route::get('/print_pdf/{id}', [Admincontroller::class,'Print_pdf']);
     
    route::get('/search', [Admincontroller::class,'search']);

   
    route::get('/view_user', [Admincontroller::class,'view_user']);

    route::get('/delete_user/{id}', [Admincontroller::class,'delete_user']);
    

    














    route::get('/redirect',[Homecontroller::class,'redirect']);

    route::get('/product_details/{id}', [Homecontroller::class,'product_details']);

    route::post('/add_cart/{id}', [Homecontroller::class,'add_cart']);

    route::get('/show_cart', [Homecontroller::class,'show_cart']);

    route::get('/remove_cart/{id}', [Homecontroller::class,'remove_cart']);

    route::get('/cash_order', [Homecontroller::class,'cash_order']);

    route::get('/stripe/{totalprice}', [Homecontroller::class,'stripe']);

    Route::post('stripe_post/{totalprice}', [Homecontroller::class,'stripe_post']);

    route::get('/about', [Homecontroller::class,'about']);

    route::get('/contact', [Homecontroller::class,'contact']);

    route::get('/show_order', [Homecontroller::class,'show_order']);

    route::get('/cancel_order/{id}', [Homecontroller::class,'cancel_order']);

     route::get('/products', [Homecontroller::class,'products']);

      route::get('/product_search', [Homecontroller::class,'product_search']);



































    
   ;

 