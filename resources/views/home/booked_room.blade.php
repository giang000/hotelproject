<!DOCTYPE html>
<html lang="en">
   <head>
    @include ('home.css')
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
      img{
        width:15em;
        height: auto;
      }
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
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid"> 
            
            @if($data->isEmpty())
            <div class="center-message">
              <h2 style="margin-bottom: 250px">You haven't booked a room yet.</h2>
            </div>
            @else
                <table class="table_deg">
                    <tr>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Room Name</th>
                        <th class="th_deg">Room Type</th>
                        <th class="th_deg">Check In</th>
                        <th class="th_deg">Check Out</th>
                        <th>Guest</th>
                        <th>Services</th>
                        {{-- <th class="th_deg">Price (Room)</th>
                        <th class="th_deg">Price (Services)</th> --}}
                        <th class="th_deg">Total Price</th>
                        <th class="th_deg">Status</th>
                        {{-- <th class="th_deg">Image</th> --}}
                    </tr>
                    @foreach ($data as $rooms)
                      <tr>
                          <td>{{ $rooms->name }}</td>
                          <td>{{ $rooms->room->room_title }}</td>
                          <td>{{ $rooms->room->room_type }}</td>
                          <td>{{ $rooms->start_date }}</td>
                          <td>{{ $rooms->end_date }}</td>
                          @if( $rooms->adult_per_room == 1)
                            <td>{{ $rooms->adult_per_room }} Adult
                          @else 
                            <td>{{ $rooms->adult_per_room }} Adults
                          @endif
                          @if( $rooms->child_per_room == 1)
                            {{ $rooms->child_per_room }} Child</td>
                          @elseif($rooms->child_per_room ==0)
                            </td>
                          @else 
                            {{ $rooms->child_per_room }} Children</td>
                          @endif

                          @if(empty($rooms->service_id))
                            <td>None</td>
                          @else
                          <td>
                            @foreach (explode(',', $rooms->service_id) as $serviceId)
                                {{ \App\Models\Service::find($serviceId)->name }}
                                @if (!$loop->last)
                                    <br> <!-- Add comma if it's not the last service -->
                                @endif
                            @endforeach
                          </td>
                          @endif

                          {{-- <td>{{ $rooms->room->price }}$</td> --}}

                          <td>{{ $rooms->price }}$</td>
                          <td>{{ $rooms->status }} </td>
                          {{-- <td><img src="/room/{{ $rooms->room->image }}" alt=""></td> --}}
                          <td>
                            <form action="{{ route('checkout', ['id' => $rooms->id]) }}" method="POST">
                              @csrf
                              @if($rooms->status == 'approve')
                              <button class="btn btn-primary" disabled>Checkout</button>
                              @else
                                <button class="btn btn-primary">Checkout</button>
                              @endif
                            </form>
                          </td>
                          <td>
                            <a href="{{url('cancel_booking' , $rooms->id)}}" class="btn btn-danger" onclick="return confirm ('Are you sure to cancel this room');">Cancel</a></td>
                            
                          </td>   
                        
                      </tr>
                    @endforeach
                </table>
            @endif
          </div>
        </div>
      </div>
      
      
      <!-- end contact -->

      <!--  footer -->
      @include ('home.footer')

      <!-- end footer -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>