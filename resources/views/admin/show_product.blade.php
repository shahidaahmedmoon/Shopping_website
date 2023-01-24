<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Famms- Admin</title>
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
        .center
        {
          margin: auto;
          width: 50%;
          text-align: center;
          border: 1px solid white;
          margin-top: 40px;
        }
        .font_size
        {
            text-align: center;

            padding-top: 20px;

            font-size: 40px;
        }
        .img_size
        {
            height: 100px;
            width: 100px;
        }
        .deg
        {
            padding: 40px;
            color: black;
        }
        .col
        {
            background:skyblue;
            width: 100%;
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

            <h2 class="font_size">All Products</h2>

          <table class="center">
              
              <tr class="col">
                  <th class="deg">Product Title</th>
                  <th class="deg">Description</th>
                  <th class="deg">Quantity</th>
                  <th class="deg">Product Price</th>
                  <th class="deg">Discount Price</th>
                  <th class="deg">Catagory</th>
                  <th class="deg">Product Image</th>
                  <th class="deg">Edit</th>
                  <th class="deg">Delete</th>
              </tr>

                  @foreach ($product as $product)

              <tr>
               <td>{{$product->title}}</td>
               <td>{{$product->description}}</td>
               <td>{{$product->quantity}}</td>
               <td>{{$product->price}}</td>
               <td>{{$product->discount_price}}</td>
               <td>{{$product->catagory}}</td>
               <td>
                <img class="img_size" src="/product/{{$product->image}}">
               </td>
               <td>
                   <a class="btn btn-primary" href="{{url('update_product',$product->id)}}">Edit</a>
               </td>
               <td>
                   <a onclick="return confirm('Are You Sure to Delete This')" class="btn btn-primary" href="{{url('delete_product',$product->id)}}">Delete</a>
               </td>
              </tr>
              @endforeach

          </table>

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