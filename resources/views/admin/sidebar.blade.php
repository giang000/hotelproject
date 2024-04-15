<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Vuongbui</h1>
          
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
        <ul class="list-unstyled">
          <li>
            <a href="#exampleRoomDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i> Hotel Room
            </a>
            <ul id="exampleRoomDropdown" class="collapse list-unstyled">
                <li><a href="{{url('view_room')}}">View Room</a></li>
                <li><a href="{{url('create_room')}}">Add Room</a></li>
            </ul>
          </li>
          <li>
            <a href="#exampleServicesDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i> Services
            </a>
            <ul id="exampleServicesDropdown" class="collapse list-unstyled">
                <li><a href="{{url('view_service')}}">View Services</a></li>
                <li><a href="{{url('create_service')}}">Add services</a></li>
            </ul>
          </li>
      
          <li><a href="{{url('bookings')}}"> <i class="icon-home"></i>Bookings</a></li>
          <li><a href="{{url('view_gallery')}}"> <i class="icon-home"></i>Gallary</a></li>
          <li><a href="{{url('all_message')}}"> <i class="icon-home"></i>Messages</a></li>
        </ul>
 
      </nav>