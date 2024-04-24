<!DOCTYPE html>
<html lang="en">
   <head>
    @include ('home.css')
    <style>
      .center-message {
            text-align: center;
            margin-top: 40px;
      }
    
    </style> 


   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
        @include ('home.header')

      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <div class="page-content mt-4">
        <div class="container"> 
          @if($data->isEmpty())
          <div class="center-message">
            <h2 style="margin-bottom: 250px">You haven't booked a room yet.</h2>
          </div>
          @else
          @foreach ($data as $rooms)
          <div class="card w-100 mt-2">
            <div class="card-body">
              <h3 class="card-title"><strong>{{ $rooms->room->room_title }}</strong></h3>  
              <div class="">
                <p><strong>Check In:</strong> {{ date('m/d/y', strtotime($rooms->start_date)) }}</p>
                <p><strong>Check Out:</strong> {{ date('m/d/y', strtotime($rooms->end_date)) }}</p>
                <p><strong>Status:</strong> {{ ucwords(strtolower($rooms->status)) }}</p>
                <p><strong>Total Price:</strong> {{ $rooms-> price}}$</p>
              </div>

              <div style="display: flex; justify-content: flex-end">
            
                <button class="btn btn-secondary mr-1" data-toggle="modal" data-target="#modal{{ $rooms->id }}">
                  Details
                </button>

                <form action="{{ route('checkout', ['id' => $rooms->id]) }}" method="POST">
                  @csrf
                  @if($rooms->status == 'approve')
                  <button class="btn btn-primary mr-1" disabled>Checkout</button>
                  @else
                  <button class="btn btn-primary mr-1">Checkout</button>
                  @endif
                </form>
  
                <form action="{{ url('cancel_booking', $rooms->id) }}" method="GET">
                  @csrf
                  @if($rooms->status == 'approve')
                  <button class="btn btn-danger mr-1" disabled onclick="return confirm('Are you sure to cancel this room?');">Cancel</button>
                  @else
                  <button class="btn btn-danger mr-1" onclick="return confirm('Are you sure to cancel this room?');">Cancel</button>
                  @endif
                </form>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
   
      @foreach ($data as $rooms)

      <!-- Modal -->
      <div class="modal" id="modal{{ $rooms->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="border-bottom: none">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Room Details</h1>
             
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Room Name</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Guest</th>
                    <th scope="col">Services</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr scope="row">
                    <td>{{ $rooms->name }}</td>
                    <td>{{ $rooms->room->room_title }}</td>
                    <td>{{ $rooms->room->room_type }}</td>
                    <td>{{ date('m/d/y', strtotime($rooms->start_date)) }}</td>
                    <td>{{ date('m/d/y', strtotime($rooms->end_date)) }}</td>
                    <td>
                        @if($rooms->adult_per_room == 1)
                            {{ $rooms->adult_per_room }} Adult
                        @else
                            {{ $rooms->adult_per_room }} Adults
                        @endif
                        @if($rooms->child_per_room > 0)
                            ,
                            @if($rooms->child_per_room == 1)
                                {{ $rooms->child_per_room }} Child
                            @else
                                {{ $rooms->child_per_room }} Children
                            @endif
                        @endif
                    </td>
                    <td>
                        @if(empty($rooms->service_id))
                            None
                        @else
                            @foreach (explode(',', $rooms->service_id) as $serviceId)
                                {{ \App\Models\Service::find($serviceId)->name }}
                                @if (!$loop->last)
                                    <br>
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td>{{ $rooms->price }}$</td>
                    <td>{{ ucwords(strtolower($rooms->status)) }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    

      <!--  footer -->
      @include ('home.footer')
      
      <!-- end footer -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>