<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               

             <div>
                
                <form action="{{url('product_search')}}" method="get">

                  @csrf
                     @if (session()->has('message'))

           <div class="alert alert-success">


           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

           
            {{session()->get('message')}}
               
          </div>

           @endif
                       
                     
                        

                      <input  style="width:500px" placeholder="Search by Name/Caragory" type="text" name="search" >



                    <input type="submit" value="search" >                    

                </form>

             </div>






            </div>
            <div class="row">

 

                
                @foreach ($product as $product)

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$product->id)}}" class="option1">
                           Details             
                           </a>
                          
                           <form action="{{url('add_cart',$product->id)}}" method="Post">
                            @csrf
                            <div class="row">


                         <div class="col-md-4">
                            @if($product->quantity > 0)
                           <input type="number" name="quantity" value="1" min="1" max="5" style="width: 100px">
                         </div>


                        <div class="col-md-4">
                               <input style="border: 50%"type="submit" value="Add Cart">
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
                     <div class="img-box">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                          {{$product->title}}
                        </h5>

                      @if($product->discount_price!=null)

                        <h6 style="color: blue">
                           BDT{{$product->discount_price}}
                        </h6>

                         <h6 style="text-decoration: line-through;color: black">
                           BDT{{$product->price}}
                        </h6>

                        @else

                         <h6 style="color: black">
                           BDT{{$product->price}}
                        </h6>

                        @endif
                       
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
      </section>