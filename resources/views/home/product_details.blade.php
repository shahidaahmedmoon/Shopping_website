<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
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
   </head>
   <body>
      <div class="hero_area">
        
         @include ('home.header') 
        
         

       <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; padding:30px;width: 50%; padding-bottom: 50px; ">
                  
       <div class="img-box"style="padding-bottom: 30px;width: 50%">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5 style="background-color: skyblue">
                          {{$product->title}}
                        </h5>

                      @if($product->discount_price!=null)

                        <h6 style="color: blue">
                           <br>
                           Discount Price:  ${{$product->discount_price}}
                        </h6>

                         <h6 style="text-decoration: line-through;color: black">
                           <br>
                          Price: ${{$product->price}}
                        </h6>

                        @else

                         <h6 style="color: black">
                           <br>
                           Price:${{$product->price}}
                        </h6>
<br>
                        @endif
                        <br>
                         <h6 style="background-color: skyblue">Product Catagory:{{$product->catagory}}</h6>
                         <br>
                         <h6>Product Description:{{$product->description}}</h6>
                       <br>
                        <h6 style="background-color: skyblue">Available Product:{{$product->quantity}}</h6>
<br>
                       
                        <br>
                        <form action="{{url('add_cart',$product->id)}}" method="Post">
                            @csrf

                          
                            <div class="row">

                          @if($product->quantity > 0)

                           <input type="number" name="quantity" value="1" min="1" max="5" style="width: 100px">
                         

                         <div class="col-md-4">
                               <input style="background: skyblue; color:black; size: 50%; border: 50%;" type="submit" value="Add Cart">

                               @endif
                         </div>
                         <div class="col-md-9">
                           @if($product->quantity > 0)
                               <label class="badge bg-success">In Stock</label>
                              @else
                               <label class="badge bg-danger">Out of Stock</label>
                               @endif
                        </div>
                            </div>
                           </form>
                     </div>
                  </div>
               </div>
  <h5>{{$product->description}}</h5>

  <br>
      <!-- footer start -->
      @include ('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto"><a href="https://html.design/"></a><br>
         
            <a href="https://themewagon.com/" target="_blank"></a>
         
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