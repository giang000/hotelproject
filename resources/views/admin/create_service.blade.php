<!DOCTYPE html>
<html>
  <head> 
 @include ('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
    label {
      display: inline-block;
      width: 200px;
    }
    .div_deg{
      padding-top: 15px;
    }
  </style>
   </head>
  <body>
  @include ('admin.header')
  @include ('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
         <div>   
          <h1 style="font-size : 30px" class="pl-5">Add Service</h1>
          <form action="{{url('add_service')}}" method="POST" enctype="multipart/form-data">

          @csrf

            <div class="div_deg">
              <label>Service's name</label>
              <input class="form-control" type="text" name = "name">
            </div>
         
            <div class="div_deg">
              <label> Description </label>
              <textarea class="form-control" name="description"></textarea>
            </div>
            
            <div class="div_deg">
              <label>Price($)</label>
              <input class="form-control" type="float" name = "price">
            </div>


            <div  class="div_deg">
              <input class="btn btn-primary" type="submit" value="Add Service">
            </div>          
          </form>
         </div>
        </div>
        </div>
      </div>
   @include ('admin.footer')
    <!-- JavaScript files-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>