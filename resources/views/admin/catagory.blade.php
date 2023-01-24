<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            padding: 40px;
        }

        .h2_font
        {
        font-size: 40px;
        padding-bottom: 40px;
        
        }
        .input_colour
        {
            color: black;
        }
    
        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 2px solid white;
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
            
            <h2 class="h2_font"> Add Catagory</h2>
            
            <form action="{{url('/add_catagory')}}" method="POST">

                @csrf

                <input class="input_colour" type="text" name="catagory" placeholder= "Write catagory name">
                <input type="submit" name="Submit"class= "btn btn-primary" value="Add Catagory">

            </form>

            </div>

            <table class="center">
                <tr>
                    <th style="padding: 10px; background: skyblue;color: black">Catagory Name</th>

                    <th style="padding: 10px;background: skyblue;color: black">Action</th>
                </tr>
                
               <!-- @foreach ($data as $data)-->

                <tr>
                    <td style="padding: 10px;">{{$data->catagori_name}}</td>

                    <td style="padding: 10px;">
                        <a onclick="return confirm('Are You Sure to Delete This')" class="btn btn-primary" href="{{url('delete_catagory',$data->id)}}">Delete</a>
                    </td>
                </tr>
                <!--@endforeach-->
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