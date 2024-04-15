<!DOCTYPE html>
<html>
  <head> 
 @include ('admin.css')
 <style>
    label {
      display: inline-block;
      width: 200px;
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
            <h1 style="font-size: 40px;" class="p-3">Gallery</h1>
          <div class="row">
            @foreach($gallery as $gallery)
            <div class="col-md-4 card"style="width: 18rem;">
               <img class="card-img-top" style="height: 200px!important; width : 300px!important;" src="/gallery/{{$gallery->image}}">
               <a href="{{url('delete_gallery' , $gallery->id)}}" class=" btn btn-danger mt-1">Delete Image</a>
            </div>
            @endforeach
          </div>
            <form action="{{url('upload_gallery')}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div>
                <label class="text-white">Upload Image</label>
                <input class="form-control" type="file" name="image[]" multiple>
              </div>
              <div>
                <input type="submit" value="Add image" class="m-3 btn btn-primary">
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