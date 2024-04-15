<!DOCTYPE html>
<html>
  <head> 
 @include ('admin.css')
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style>
    .table_deg{
      border: 2px solid white;
      margin: auto;
      width: 80%;
      text-align: center;
      margin-top: 40px;
    }
    .th_deg{
      background-color: white;
      padding: 15px;

    }
    tr{
      border: 3px solid white;
    }
    td{
      padding: 10px;
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

        <table class="table_deg">
          <tr>
            <th class="th_deg">Room Title</th>
            <th class="th_deg">Description</th>
            <th class="th_deg">Room type</th>
            <th class="th_deg">Room area</th>
            <th class="th_deg">Wifi</th>
            <th class="th_deg">Facilities</th>
            <th class="th_deg">Bed & Bath</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Option</th>
          
          </tr>

          @foreach($data as $data)
          <tr>
            <td>{{$data->room_title}}</td>
            <td>{!! Str::limit($data->description,100) !!}</td>
            <td>{{$data->room_type}}</td>
            <td>{{$data->area}}sqm</td>
            <td>{{$data->wifi}}</td>
            <td>{{$data->facilities}}</td>
            <td>{{$data->bed_bath}}</td>
            <td>{{$data->price}}$</td>
            
            
            <td><img src="room/{{$data->image}}" alt="" width="150" height="100"></td>    
            <td>
              <a href="{{url('update_room' , $data->id)}}" class="btn btn-warning">Update</a>
              <a href="{{url('delete_room' , $data->id)}}" class="btn btn-danger" onclick="return confirm ('Are you sure to delete this');"  >Delete</a>
            </td>   
                
          </tr>
          @endforeach
        </table>
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