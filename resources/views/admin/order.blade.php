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
        .title_deg
        {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            padding-top: 20px;
            padding-bottom: 40px;
          
        }
        .table_deg
        {
          border: 2px solid white;
          width: 100%;
          margin:auto;
          text-align: center;
        }
        .th_deg
        {
            background: skyblue;
            color: black;
            padding: 10px;
        }
        .td_deg
        {
            padding: 10px;
           
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

            
            <h1 class="title_deg">All Orders</h1>
            <div style=" text-align: center; padding-bottom: 30px;">
                <form action="{{url('search')}}" method="get">
                    
                    <input style="color:black;" placeholder="Search Here" type="text" name="search">
                    <input type="submit" value="search" class="btn btn-primary">
                </form>
            </div>
            <table class="table_deg">
                <tr>
                     <th class="th_deg">order id</th>
                    <th class="th_deg">Name</th>

                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    <th class="th_deg">image</th>
                     <th class="th_deg">Delivery</th>
                     <th class="th_deg">Print PDF</th>
                     

                   
                </tr>
                @forelse($order as $order)
                <tr>
                    <td class="td_deg">{{$order->id}}</td>
                    <td class="td_deg">{{$order->name}}</td>
                    <td class="td_deg">{{$order->email}}</td>
                    <td class="td_deg">{{$order->phone}}</td>
                    <td class="td_deg">{{$order->product_title}}</td>
                    <td class="td_deg">{{$order->quantity}}</td>
                    <td class="td_deg">{{$order->price}}</td>
                    <td class="td_deg">{{$order->payment_status}}</td>
                    <td class="td_deg">{{$order->delivery_status}}</td>
                    <td class="td_deg">
                        <img style="height: 80px; width: 80px;" src="/product/{{$order->image}}">
                    </td>

                    <td>
                         @if($order->delivery_status=='processing')

                        <a onclick="return confirm('Are You Sure this product Delivered')" href="{{url('delivery',$order->id)}}" class="btn btn-primary">Delivered</a>

                        @else

                        <p style="color: skyblue">Delivered</p>

                        @endif
                    </td>
                    <td>
                        <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondery">Print PDF</a>
                    </td>

                   
                </tr>

                @empty

                <tr>
                    <td colspan="16">

                        No Data Found
                        
                    </td>
                </tr>
                @endforelse

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