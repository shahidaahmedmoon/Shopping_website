<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\product;

use App\Models\cart;

use App\Models\order;

use Session;
use Stripe;


class Homecontroller extends Controller
{

    public function index()
    {
        $product=product::all();
        return view ('home.userpage',compact('product'));
    }






    public function redirect()
    {
    	$usertype=Auth::user()->usertype;

    	if($usertype=='1')
    	{

        $product=product::all()->count();
        $order=order::all()->count();
        $user=user::all()->count();
        $total_order=order::all();
        $total_revenue=0;

        foreach ($total_order as $total_order)
        {
          $total_revenue=$total_revenue + $total_order->price;
        }
        
        $total_delivery=order::where('delivery_status','=','delivered')->get()->count();

        $total_processing=order::where('delivery_status','=','processing')->get()->count();


    		return view ('admin.home',compact('product','order','user','total_revenue','total_delivery','total_processing'));
    	}

        else 
         {
	        $product=product::all();
          
        return view ('home.userpage',compact('product'));
          }
    }








    public function about()

    {
     return view ('home.about');

    }







     public function contact()

    {
     return view ('home.contact');

    }



 public function product_details($id)

 {
     $product=product::find($id);
     
    return view ('home.product_details',compact('product'));
 }



public function add_cart(request $request,$id){
            
            if (Auth::id())


               {
      
                  $user=Auth::user();
      
                  $userid=$user->id;
      
                  $product=product::find($id);
      
                  $product_exit_id=cart::where('product_id','=',$id)->where('user_id','=',$userid)->get('id')->first();

                 

              if($product_exit_id){

                  
                  $cart=cart::find($product_exit_id)->first();
                  
                  $quantity=$cart->quantity;
                  
                  $cart->quantity=$cart->quantity + $request->quantity;



              if ($product->discount_price!=null){

                    $cart->price=$product->discount_price * $cart->quantity; 
                  } 

                  else{

                  $cart->price=$product->price * $cart->quantity; 

                  }
       
                  $cart->save();

                  return redirect()->back()->with('message','Product Added Successfully');
            }

               else{

                  $cart=new cart();


                  $cart->name=$user->name;  
                  $cart->email=$user->email; 
                  $cart->phone=$user->phone; 
                  $cart->user_id=$user->id;
                  $cart->product_title=$product->title;

                  if ($product->discount_price!=null)

                  {
                    $cart->price=$product->discount_price * $request->quantity; 
                  } 
                  else
                  {
                  $cart->price=$product->price * $request->quantity; 
                  }
                  $cart->quantity=$request->quantity; 
                  $cart->image=$product->image;
                  $cart->product_id=$product->id;
                  $cart->save();

                    return redirect()->back()->with('message','Product Added Successfully');
                }

              }

             else
  
                  {
                     return redirect('login');

                  }
              }





              

 public function show_cart()
   {
     if (Auth::id())

        {
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view ('home.showcart',compact('cart'));
        }

 else

    {
return redirect('login');

    }
}

public function remove_cart($id)
{
    $cart=cart::find($id);
    $cart->delete();
     return redirect()->back()->with('message','Product Deleted Successfully');
}


public function cash_order()
{
     $user=Auth::user();
     $userid=$user->id;
    
     $data=cart::where('user_id','=',$userid)->get();

     foreach ($data as $data)
       {

      $order=new order();
      $order->name=$data->name;  
      $order->email=$data->email; 
      $order->phone=$data->phone; 
      $order->user_id=$data->user_id;
      $order->product_title=$data->product_title;
      $order->price=$data->price; 
      $order->quantity=$data->quantity; 
      $order->image=$data->image;
      $order->product_id=$data->product_id;
      $order->payment_status='Cash on delivery';
      $order->delivery_status='processing';
      $order->save();


     if($data->quantity!=null)
     {
         product::find($data->product_id)->decrement('quantity',$data->quantity);
     }
     else
     {

     }
      $cart_id=$data->id;
      $cart=cart::find($cart_id);
      $cart->delete();

      }
      
       return redirect()->back()->with('message','Your Order Recived Successfully');
      
}


     public function stripe($totalprice)

     {
        return view ('home.stripe',compact('totalprice'));
     }



   




public function show_order()

    {
      if (Auth::id())

        {
           $user=Auth::user();
           $userid=$user->id;
    
           $order_show=order::where('user_id','=',$userid)->get();
            return view ('home.order',compact('order_show'));
        }

       else

    {
    return redirect('login');
    }

  }


public function cancel_order($id)
      
      {

         $order_cancel=order::find($id);
         $order_cancel->delivery_status="Canceled";
         $order_cancel->save();

        return redirect()->back();

       }





  public function products()

  {
     
     $product=product::all();

      return view ('home.all_product',compact('product'));

  }



  


public function product_search(request $request)

{

$search_text=$request->search;

$product=product::where('catagory','LIKE',"$search_text")->orwhere ('title','LIKE',"%$search_text%")->get();

return view ('home.all_product',compact('product'));

}




  public function stripe_post(Request $request,$totalprice)
    {


        Stripe\Stripe::setApiKey('sk_test_51MGlKBDspWeYaSAU985J6aTrbluuQ7eW7d2PLtz054uV5PWF44iwPZBIdzax7T7KsN2FT3xalci2o9z1hUu48KAo00xziQFMev');
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for Payment" 
        ]);

     $user=Auth::user();
     $userid=$user->id;
    
     $data=cart::where('user_id','=',$userid)->get();

     foreach ($data as $data)
       {

      $order=new order();
      $order->name=$data->name;  
      $order->email=$data->email; 
      $order->phone=$data->phone; 
      $order->user_id=$data->user_id;
      $order->product_title=$data->product_title;
      $order->price=$data->price; 
      $order->quantity=$data->quantity; 
      $order->image=$data->image;
      $order->product_id=$data->product_id;
      $order->payment_status='Paid';
      $order->delivery_status='processing';
      $order->save();

       if($data->quantity!=null)
     {
         product::find($data->product_id)->decrement('quantity',$data->quantity);
     }
     else
     {

     }

      $cart_id=$data->id;
      $cart=cart::find($cart_id);
      $cart->delete();

      }
      
        Session::flash('success', 'Payment successful!');
              
        return back();
    }




}




