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
            <th class="th_deg">Name</th>
            <th class="th_deg">Email</th>
            <th class="th_deg">Phone</th>
            <th class="th_deg">Messages</th>
            <th class="th_deg">Options</th>


          </tr>

          @foreach($data as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>       
            <td>{{ Str::limit($data->message, 50) }}</td>
            <td>
              <a href="{{url('send_email' , $data->id)}}" class="btn btn-success" >Send email</a>
              <a href="{{url('delete_email' , $data->id)}}" class="btn btn-danger" >Delete email</a>
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