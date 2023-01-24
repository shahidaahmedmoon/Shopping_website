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

             @if (session()->has('message'))

           <div class="alert alert-success">


           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

           
            {{session()->get('message')}}
               
          </div>

           @endif


                     <h1 class="title_deg">All Users</h1>


            
            <table class="table_deg">
                <tr>
                    <th class="th_deg">Name</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Role</th>
                     <th class="th_deg">Action</th>
                 </tr>   
               

             @foreach ($users as $users)   
                <tr>
                    
                    <td class="td_deg">{{$users->name}}</td>
                    <td class="td_deg">{{$users->email}}</td>
                    <td class="td_deg">{{$users->phone}}</td>
                    <td class="td_deg">
                      
                      @if ($users->usertype=='1')

                         <p class="btn btn-secondary">Admin</p>

                      @else
                      
                         <p class="btn btn-secondary">User</p>

                      @endif   
                    </td>

                    <td>
                       <a onclick="return confirm('Are You Sure to Delete this User')" class="btn btn-secondary" href="{{url('delete_user',$users->id)}}">Delete</a>
                    </td>
                   
                </tr>

                
              @endforeach













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