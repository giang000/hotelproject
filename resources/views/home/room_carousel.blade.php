      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    

      <div class="our_room">
         <div class="row">
            <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel" data-interval="1000">
                  <div class="MultiCarousel-inner">
                     @foreach ($room as $rooms)
                     <div class="item">
                        <div>
                              <div id="serv_hover" class="room">
                                 <div class="room_img">
                                    <figure><img src="room/{{$rooms->image}}" alt="#" width="150" height="100" style="height: 250px!important"></figure>
                                 </div>
                                 <div class="bed_room">
                                    <h3 class="lead">{{$rooms->room_title}}</h3>
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
                                    <p><i class="fa-solid fa-smoking"></i>&nbsp;&nbsp; Non-smoking</p><br>
                                    <a class="btn btn-danger" href="{{url('details_room' , $rooms->id)}}">Book Now</a>
                                 </div>
                              </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <button class="btn btn-danger leftLst"><</button>
                  <button class="btn btn-danger rightLst">></button>
            </div>
         </div>
      </div>