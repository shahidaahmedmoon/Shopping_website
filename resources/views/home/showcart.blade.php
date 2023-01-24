<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Online Shopping Store </title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
         .center

         {
            margin: auto;
            width: 50%;
            padding: 30px;
            text-align: center;
         }

 table,td,th
 {
   border: 1px solid grey;
   
   padding-left: 10px;
   width: 80%;
    text-align: center;
   margin: auto;
           
            

 }

.th_deg
{
   font-size: 20px;
  text-align: center;
   background: skyblue;
}
 .title_deg
        {
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            padding-top: 10px;
          
            color: black;

      </style>
   </head>
   <body>
      <div class="hero_area">
         

         <!-- header section strats -->
         @include ('home.header')

          @if (session()->has('message'))

           <div class="alert alert-success">


           <button style="color: skyblue" type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

           
            {{session()->get('message')}}
               
          </div>
          @endif 
     <h1 class="title_deg">Cart Table</h1>
        <table>
           <tr>
            <th class= "th_deg">Product title</th>
            <th class= "th_deg">Product quantity</th>
            <th class= "th_deg">Product price</th>
            <th class= "th_deg">Product image</th>
            <th class= "th_deg">Action</th>

           </tr>
           <?php $totalprice=0; ?>

         @foreach($cart as $cart)
           <tr>
              <td>{{$cart->product_title}}</td>


              <td>{{$cart->quantity}}</td>


              <td>BDT{{$cart->price}}</td>



              <td><img style="height: 100px; width: 120px;" src="/Product/{{$cart->image}}"></td>


              <td>
               


               <a class="btn btn-primary" onclick="return confirm('Are You Sure to Delete This')"  href="{{url('remove_cart',$cart->id)}}">Remove</a></td>
           </tr>

           <?php $totalprice=$totalprice + $cart->price ?>
           @endforeach

        </table>
    
        <div>
           <h2 style="text-align: center; padding-bottom:30px;">Total Price : BDT{{$totalprice}}</h2>
        </div>


      <div style="text-align: center;font-size: 20px; padding-top: 20px;">

         <h1 style="padding-bottom: 20px;">Payment Method</h1>

         <a href="{{url('cash_order')}}"  class="btn btn-primary">Cash On Delivery</a>

         <a href="{{url('stripe',$totalprice)}}" class="btn btn-primary">Card Payment</a>
      </div>

       <br>
       <br>  
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>