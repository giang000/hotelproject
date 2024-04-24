<!DOCTYPE html>
<html>
  <head> 
    @include ('admin.css')
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
          <div class="container">
            <div>   
              <h1 style="font-size : 30px" class="pl-5">Add Room</h1>
              <form action="{{url('add_room')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="div_deg ">
                <label>Room Title</label>
                <select class="form-select" name="type">
                  <option value="single room">Single room</option>
                  <option value="standard">Standard Room</option>
                  <option value="twin Room">Twin Room</option>
                  <option value="double Room">Double Room</option>
                  <option value="family Room">Family Room</option>
                </select>
              </div>
          
              <div class="div_deg">
                <label> Description </label>
                <textarea class="form-control" name="description"></textarea>
              </div>
              
              <div class="div_deg">
                <label>Price($)</label>
                <input class="form-control" type="float" name = "price">
              </div>

              <div class="div_deg">
                <label>Room type</label>
                <select class="form-select" name="type">
                  <option value="Regular Room">Regular Room</option>
                  <option value="Premium Room">Premium Room</option>
                  <option value="Deluxe Room">Deluxe Room</option>
                </select>
              </div>

              <div class="div_deg">
                <label>Wifi</label>
                <select class="form-select" name="wifi">
                  <option selected value="Wireless Wi-Fi">Wireless Wi-Fi</option>
                  <option value="no">No</option>
                </select>
              </div>

              <div class="div_deg"> 
                <label>Area(sqm)</label>
                <input class="form-control" type="number" name="area">
              </div>
 
              <div class="div_deg">
                <label>Facilities</label>
                <textarea class="form-control" name="facilities"></textarea>
              </div>

              <div class="div_deg">
                <label>Bed and Bath</label>
                <textarea class="form-control" name="bed_bath"></textarea>
              </div>

              <div class="div_deg">
                <label>Upload Image</label>
                <input class="form-control" type="file" name="image">
              </div>

              <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Add Room">
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