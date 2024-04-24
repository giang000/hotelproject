<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Rooms</h2>
                  
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($room as $key => $rooms)
                   <div class="col-lg-{{ $key < 2 ? '6' : '4' }} col-md-{{ $key < 2 ? '6' : '4' }} col-sm-6">
                       <div id="serv_hover" class="room">
                           <div class="room_img">
                              <figure><a href="{{url('details_room' , $rooms->id)}}"><img src="room/{{$rooms->image}}" alt="#" width="150" height="100" style="height: 250px!important"></a></figure>
                           </div>
                           <div class="bed_room">
                              <h3>{{$rooms->room_title}}</h3>
                              <p>{!! Str::limit($rooms->description,120) !!}</p> <br>
                              <p><i class="fa-solid fa-couch"></i>&nbsp;&nbsp;{{$rooms->room_type}}</p>
                              <p><i class="fa-solid fa-shower"></i>&nbsp;&nbsp;
                                 @if (Str::contains($rooms->bed_bath, 'Standing shower') && Str::contains($rooms->bed_bath, 'Bathtub'))
                                 Standing shower AND Bathtub
                                 @elseif (Str::contains($rooms->bed_bath, 'Standing shower'))
                                 Standing shower
                                 @elseif (Str::contains($rooms->bed_bath, 'Bathtub'))
                                 Bathtub
                                 @else
                                 No value
                                 @endif    
                              </p>
                               <p><i class="fa-solid fa-smoking"></i>&nbsp;&nbsp; Non-smoking</p><br><br>
                               <a class="btn btn-danger" href="{{url('details_room' , $rooms->id)}}">Book Now</a>
                           </div>
                       </div>
                   </div>
               @endforeach
           </div>
           
      </div>