<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Famms-Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="Admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="Admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/images/favicon.png" />

<style type="text/css">
	.div_center
	{
		text-align: center;
		padding-top: 40px;
	}

	.font_size
	{
		font-size: 40px;
		padding-bottom: 40px;
	}
	
	.text_colour
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
         display:inline-block; 
         width: 200px;
        }

        .div_design
        {
        	padding-bottom:10px; 
        }

</style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.sidebar')
      <!-- partial -->
      @include('Admin.navbar')
        <!-- partial -->
      <div class="main-panel">
         <div class="content-wrapper">
         
          @if (session()->has('message'))

           <div class="alert alert-success">


           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

           
            {{session()->get('message')}}
               
          </div>

           @endif


           <div class="div_center">

       	     <h1 class="font_size"> Update Product</h1>
            
            <form action="{{url('/update_product_confirm',$product->id)}}" method="POST"enctype="multipart/form-data">

            	@csrf

              <div class ="div_design">
                <label> Product Title:</label>

       	        <input class="text_colour" type="text" name="title" placeholder= "title here" required="" value="{{$product->title}}">
       	   </div>

       	    <div class="div_design">
                <label> Product Description:</label>

       	        <input class="text_colour" type="text" name="description" placeholder= "Write description" required=""value="{{$product->description}}">
       	   </div>
          
          
           <div class="div_design">
                <label> Product Quantity:</label>

       	        <input class="text_colour" type="number" min="0" name="quantity" placeholder= " Select quantity" required=""value="{{$product->quantity}}">
       	   </div>
           <div class="div_design">
                <label> Product Price:</label>

       	        <input class="text_colour" type="number" name="price" placeholder= "Add price" required=""value="{{$product->price}}">
       	   </div>
           <div class="div_design">
                <label> Product Discount Price:</label>

       	        <input class="text_colour" type="number" name="discount_price" placeholder= " Add discount price"value="{{$product->discount_price}}">
       	   </div>

       	    <div class="div_design">

                <label> Product Catagory:</label>

                <select class="text_colour" required=""name="catagory">

                	<option value="{{$product->catagory}}" selected="">{{$product->catagory}} </option>
                  
                  @foreach ($catagory as $catagory)

                <option value="{{$catagory->catagori_name}}">{{$catagory->catagori_name}}</option>

                @endforeach
                	
       	       </select>
       	   </div>

            <div class="div_design">

                <label> Current Image:</label>

                <img style="margin: auto;" hight="100px" width="100px" src="/product/{{$product->image}}">

           </div>

            <div class="div_design">

                <label> Change Image:</label>

       	        <input type="file" name="image" >

       	   </div>

       	    <div class="div_design">

       	        <input type="submit" name="Submit"class= "btn btn-primary" value="Update Product" >

       	   </div>

</form >

         </div>

      </div>

    </div>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="Admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="Admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="Admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="Admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="Admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="Admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Admin/assets/js/off-canvas.js"></script>
    <script src="Admin/assets/js/hoverable-collapse.js"></script>
    <script src="Admin/assets/js/misc.js"></script>
    <script src="Admin/assets/js/settings.js"></script>
    <script src="Admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="Admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
