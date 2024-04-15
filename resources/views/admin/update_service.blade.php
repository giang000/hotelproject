<!DOCTYPE html>
<html>
  <head> 
  <base href="/public">
 @include ('admin.css')

  <style>
    label {
      display: inline-block;
      width: 200px;
    }
    .div_deg{
      padding-top: 30px;
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
          <h1 style="font-size : 30px" class="pl-5">Update Service</h1>
          <form action="{{url('edit_service' , $data->id)}}" method="POST" enctype="multipart/form-data">

          @csrf

          <div  class="div_deg">
            <label>Service's name</label>
            <input type="text" name="name" value="{{$data->name}}">
          </div>
         
            <div  class="div_deg">
              <label>Description</label>
              <textarea name="description">{{$data->description}}</textarea>
            </div>
            
            <div  class="div_deg">
              <label>Price($)</label>
              <input type="float" name = "price" value="{{$data->price}}">
            </div>

            <div  class="div_deg">
              <input class="btn btn-primary" type="submit" value="Update Service">
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