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
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  @include ('admin.header')
  @include ('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="font-size:40px" class="p-3">Mail send to {{$data->name}}</h1>

          <form action="{{url('mail' , $data->id)}}" method="Post">

            @csrf

              <div class="div_deg"> 
                <label>Greeting</label>
                <input class="form-control" type="text" name="greeting">
              </div>

              <div class="div_deg">
                <label>Mail Body</label>

                <textarea class="form-control" name="body"></textarea>
              </div>
              
              <div class="div_deg">
                <label>Action Text</label>
                <input class="form-control" type="text" name = "action_text">
              </div>

              <div class="div_deg">
                <label>Action Url</label>
                <input class="form-control" type="text" name = "action_url">
              </div>

              <div class="div_deg">
                <label>End Line</label>
                <input class="form-control" type="text" name = "endline">
              </div>
             <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Send Mail">
              </div>          
          </form>
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