<!DOCTYPE html>
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
        .title_deg
        {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 40px;
            color: black;
          
        }
        .table_deg
        {
          border: 2px solid grey;
          width: 80%;
          margin:auto;
          text-align: center;
        }
        .th_deg
        {
            background: skyblue;
            color: black;
            padding: 10px;
            font-weight: bold;
        }
        .td_deg
        {
            padding: 10px;
           
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include ('home.header') 
         <!-- end header section -->
        

        <div>
        	<h1 class="title_deg">All Orders</h1>

        	</div>

        
        	<div>
        		 <table class="table_deg">
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    
                    <th class="th_deg">image</th>
                    <th class="th_deg">Cancel Order</th>
                   </tr>

                  @foreach($order_show as $order_show)
                
                <tr>
                    <td class="td_deg">{{$order_show->product_title}}</td>
                    <td class="td_deg">{{$order_show->quantity}}</td>
                    <td class="td_deg">BDT {{$order_show->price}}</td>
                    <td class="td_deg">{{$order_show->payment_status}}</td>
                    <td class="td_deg">{{$order_show->delivery_status}}</td>
                    
                     <td class="td_deg">
                     <img style="height: 80px; width: 80px;" src="/product/{{$order_show->image}}">	
                     	
                     </td>

                      <td>
                     @if ($order_show->delivery_status=='processing')

                          @if ($order_show->payment_status=='Cash on delivery')
                    
                     	<a onclick="return confirm('Are You Sure to cancel this order')" class="btn btn-primary" href="{{url('cancel_order',$order_show->id)}}">Cancel Order</a>

                     	@else

                     	<p style="color:red">Cancel</p>
                        
                     	@endif
                        @endif

                     </td>
                     </tr>

                   @endforeach
                   

            </table>
        	</div>
 

        
      
     
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