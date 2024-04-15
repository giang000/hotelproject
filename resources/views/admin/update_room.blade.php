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
      text-align: center;
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
          <h1 style="font-size : 30px" class="pl-5">Update Room</h1>
          <form action="{{url('edit_room' , $data->id)}}" method="POST" enctype="multipart/form-data">

          @csrf

          <div  class="div_deg">
            <label>Room Title</label>
            <select name="title">
              <option selected value="{{$data->room_title}}">{{$data->room_title}}</option>
              <option value="Single Room">Single Room</option>
              <option value="Standard Room">Standard Room</option>
              <option value="Twin Room">Twin Room</option>
              <option value="Double Room">Double Room</option>
              <option value="Family Room">Family Room</option>
            </select>
          </div>
         
            <div  class="div_deg">
              <label>Description</label>

              <textarea name="description">{{$data->description}}</textarea>
            </div>
            
            <div  class="div_deg">
              <label>Price($)</label>
              <input type="number" name = "price" value="{{$data->price}}">
            </div>

            <div  class="div_deg">
              <label>Room type</label>
              <select name="type">
                <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                <option value="Regular Room">Regular Room</option>
                <option value="Premium Room">Premium Room</option>
                <option value="Deluxe Room">Deluxe Room</option>
              </select>
            </div>

            <div  class="div_deg">
              <label>Internet</label>
              <select name="wifi">
                <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                <option value="Wireless Wi-Fi">Wireless Wi-Fi</option>
                <option value="no">No</option>
              </select>
            </div>

            <div  class="div_deg">
              <label>Area(sqm)</label>
              <input type="number" name="area" value="{{$data->area}}"></input>
            </div>

            <div  class="div_deg">
              <label>Facilities</label>
              <textarea name="facilities" >{{$data->facilities}}</textarea>
            </div>

            <div  class="div_deg">
              <label>Bed and Bath</label>
              <textarea name="bed_bath">{{$data->bed_bath}}</textarea>
            </div>

            <div  class="div_deg">
              <label>Current Image</label>
              <img src="/room/{{$data->image}}" alt="" width="300" >
            </div>
            <div  class="div_deg">
              <label>Upload Image</label>
              <input type="file" name="image">
            </div>

            <div  class="div_deg">
              <input class="btn btn-primary" type="submit" value="Update Room">
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