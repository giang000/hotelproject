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
      padding: 20px;
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
              <th class="th_deg">Room ID</th>
              <th class="th_deg">Room Title</th>
              <th class="th_deg">Name</th>
              <th class="th_deg">Email</th>
              <th class="th_deg">Phone</th>
              <th class="th_deg">Check In</th>
              <th class="th_deg">Check Out</th> 
              <th class="th_deg">Total Price</th>
              {{-- <th class="th_deg">Image</th> --}}
              <th class="th_deg">Status</th>
              <th class="th_deg">Delete</th>
              <th class="th_deg">Status Update</th> 
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data->room_id}}</td>
              <td>{{$data->room->room_title}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->start_date}}</td>
              <td>{{$data->end_date}}</td> 
              <?php
                  $totalServicePrice = 0;
                  if (!empty($data->service_id)) {
                      foreach (explode(',', $data->service_id) as $serviceId) {
                          $service = \App\Models\Service::find($serviceId);
                          if ($service) {
                              $totalServicePrice += $service->price;
                          }
                      }
                  }
                  // echo $totalServicePrice . '$';
              ?>
              
              <td>{{ $data->room->price + $totalServicePrice }}$</td>
              {{-- <td>{{$data->room->price}}</td> --}}
              {{-- <td><img src="/room/{{$data->room->image}}" alt=""></td>   --}}
              <td>
                @if($data->status == 'approve')
                <span style="color: skyblue;">Approved</span>
                @endif 
                
                @if($data->status == 'rejected')
                <span style="color: red;">Rejected</span>
                @endif 

                @if($data->status == 'waiting')
                <span style="color: yellow;">Waiting</span>
                @endif 

              </td>
              <td>
                <a href="{{url('delete_booking' , $data->id)}}" class="btn btn-danger" onclick="return confirm ('Are you sure to delete this');"  >Delete</a>
              </td>   
              <td>
                <span style="padding-bottom: 10px;"><a class="btn btn-success" href="{{url('approve_book' , $data->id)}}">Approve</a></span>
                <a class="btn btn-warning" href="{{url('rejected_book' , $data->id)}}">Rejected</a>
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