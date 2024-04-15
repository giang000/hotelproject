   <!DOCTYPE html>
   <html lang="en">
      <head>
      <base href="/public">
      @include ('home.css')
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
   <style>
      label{
         display: inline-block;
         width: 200px;
         margin-bottom: 0px!important;
      }
      input{
         width: 100%;
      }
      .informations{
         display: flex;
         padding: 12px;
         justify-content: space-around
         
      }
      .informations li{
         list-style-type: disc;
         
      }
      .minus-adult , .plus-adult , .minus-child, .plus-child{
         cursor: pointer;
         width: 25px;
         height: 25px;
         color: white !important;
         text-align: center;
         border-radius: 100%;
         font-size: 12px;
         padding: 3px;
         padding-left: 4px;
      }
      .guests_option{
         display: flex;
         justify-content: space-between;
         padding: 0px 5px 0px 5px;
         margin-top: 10px
      }
      
      .dropdown {
         position: relative;
         font-size: 14px;
         color: #333;

         .dropdown-list {
            padding: 12px;
            background: #fff;
            position: absolute;
            top: 30px;
            left: 2px;
            right: 2px;
            box-shadow: 0 1px 2px 1px rgba(0, 0, 0, .15);
            transform-origin: 50% 0;
            transform: scale(1, 0);
            transition: transform .15s ease-in-out .15s;
            max-height: 66vh;
            overflow-y: scroll;
         }
  
         .dropdown-option {
            display: block;
            padding: 8px 12px;
            opacity: 0;
            transition: opacity .15s ease-in-out;
         }
  
         .dropdown-label {
            display: block;
            width: auto;
            height: 35px;
            background: #fff;
            padding: 10px 12px 0px 12px;
            line-height: 1;
            cursor: pointer;
            margin-top: 9px;
    
            &:before {
               content: '▼';
               float: right;
            }
         }
  
         &.on {
         .dropdown-list {
            transform: scale(1, 1);
            transition-delay: 0s;
            
            .dropdown-option {
            opacity: 1;
            transition-delay: .2s;
            }
         }
    
            .dropdown-label:before {
               content: '▲';
            }
         }
  
         [type="checkbox"] {
            position: relative;
            top: -1px;
            margin-right: 4px;
         }
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
         <!-- end banner -->
         
         <!-- about -->
         <!-- end about -->
         
         <!-- our_room -->

         <div class="our_room">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Details Room</h2>
                     
                     </div>
                  </div>
               </div>

               <div class="row">

                  <div class="col-md-8">
                     <div id="serv_hover"  class="room">
                        <div class="room_img" style="padding: 20px;">
                           <figure><img src="/room/{{$room->image}}" alt="#" height="300" width="800px"></figure>
                        </div>
                        <div class="bed_room" style="text-align: left;">
                           <div style="display: flex; justify-content: space-around; width: 100%;">
                               <div style="text-align: center; display: block;">
                                   <i class="fa-solid fa-vector-square fa-4x" aria-hidden="true"></i>
                                   <h4>{{$room->area}}sqm</h4>
                               </div>
                               <div style="text-align: center; display: block;">
                                 <i class="fa-solid fa-couch fa-4x" aria-hidden="true"></i>
                                 <h4>{{$room->room_type}}</h4>
                               </div>
                               <div style="text-align: center; display: block;">
                                   <i class="fa fa-wifi fa-4x" aria-hidden="true"></i>
                                   <h4>{{$room->wifi}}</h4>
                               </div>
                           </div>
                       
                           <h1 style="padding: 12px;">Room Details</h1>
                           <p style="padding: 12px;">{{$room->description}}</p>

                           <div class="informations">
                              <div class="facilitiesList">
                                 <h4>Room Facilities</h4>
                                 @php
                                    $count = 0;
                                 @endphp
   
                                 @foreach(explode(',', $room->facilities) as $facility)
                                    @if($count % 6 == 0)
                                       @if($count > 0)
                                             </ul> <!-- Close the previous ul if it's not the first one -->
                                       @endif
                                       <ul>
                                    @endif
                                    <li>{{ trim($facility) }}</li>
                                    @php
                                       $count++;
                                    @endphp
                                 @endforeach
   
                                 @if($count > 0)
                                    </ul> <!-- Close the last ul if there were facilities -->
                                 @endif
                              </div>
                              <div class="bed_bath">
                                 <h4>Bed & Bath</h4>
                                 @php
                                    $count = 0;
                                 @endphp
   
                                 @foreach(explode(',', $room->bed_bath) as $bed_bath)
                                    @if($count % 6 == 0)
                                       @if($count > 0)
                                             </ul> <!-- Close the previous ul if it's not the first one -->
                                       @endif
                                       <ul>
                                    @endif
                                    <li>{{ trim($bed_bath) }}</li>
                                    @php
                                       $count++;
                                    @endphp
                                 @endforeach
   
                                 @if($count > 0)
                                    </ul> <!-- Close the last ul if there were facilities -->
                                 @endif
                              </div>
                           </div>
                     
                       </div>
                       
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-bs-dismiss="alert">X</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    
                    </div> 
                    

                     @if($errors)
                     @foreach($errors->all() as $errors)

                     <li style="color:red">{{$errors}}</li>
                     @endforeach

                     @endif
                     <h1>{{$room->room_title}}</h1>
                     <h5 style=""><strong>USD{{number_format($room->price, 2)}}</strong><span style="font-size: 14px;">/night</span></h3>
                     <form action="{{url('add_booking' , $room->id)}}" method="POST" >
                        @csrf
                        <div class="form-group">
                           <label>NAME</label>
                           <input type="text" name="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
                           @if(Auth::id())
                           value="{{Auth::user()->name}}"
                           @endif
                           >
                        </div>
                        <div class="form-group">
                           <label>EMAIL</label>
                           <input type="email" name="email" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
                           @if(Auth::id())
                           value="{{Auth::user()->email}}"
                           @endif
                           >
                        </div>
                        <div class="form-group">
                           <label>PHONE</label>
                           <input type="number" name="phone" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"
                           @if(Auth::id())
                           value="{{Auth::user()->phone}}"
                           @endif
                           >
                        </div>
                        <div style="display: flex; align-items: center;" class="form-group">
                           <div>
                              <label for="startDate" style="margin-right: 10px;">CHECK IN</label>
                              <input type="date" name="startDate" id="startDate" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" style="width: 96%;">
                           </div>

                           <div>
                              <label for="endDate" style="margin-right: 10px;">CHECK OUT</label>
                              <input type="date" name="endDate" id="endDate" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                           </div>
                        </div>
                         
                        <div class="guests_option">
                           <div>
                              <label>Adult(s)/room</label>
                           </div>
                           <div>
                              <span class="minus-adult btn btn-danger"><i class="fa-solid fa-minus"></i></span>
                              <input type="hidden" name="adult_per_room" id="adult_per_room" value="1"> <!-- Hidden input field to store the number of adults per room -->
                              <span class="num-adult">1</span>
                              <span class="plus-adult btn btn-danger"><i class="fa-solid fa-plus"></i></span>
                           </div>

                        </div>

                        <div class="guests_option">
                           <div>
                               <label>Child(ren)/room</label>
                           </div>
                           <div>
                               <span class="minus-child btn btn-danger"><i class="fa-solid fa-minus"></i></span>
                               <input type="hidden" name="child_per_room" id="child_per_room" value="0"> <!-- Hidden input field to store the number of children per room -->
                               <span class="num-child">0</span>
                               <span class="plus-child btn btn-danger"><i class="fa-solid fa-plus"></i></span>
                           </div>
                       </div>
                        
                       <div class="dropdown" data-control="checkbox-dropdown">
                        <label class="dropdown-label form-control">Select Services</label>
                        <div class="dropdown-list">
                          @foreach($service as $service)
                            <label class="dropdown-option form-check-label">
                              <input class="" type="checkbox" name="service_id[]" value="{{ $service->id }}" />
                              {{ $service->name }} ({{ $service->price }}$)
                            </label>
                          @endforeach
                        </div>
                      </div>

                        <div style="padding-top: 20px;">
                           <input type="submit" style="background-color: #ff0909; border-style: none;" class="btn btn-primary" value="Book Now">
                        </div>

                        
                     </form>
                  </div>
                  
               </div>
            </div>
         </div>

         <!-- end our_room -->

         <!-- gallery -->
         <!-- end gallery -->
         
        </div>
         <!-- blog -->
         @include ('home.blog')
         <!-- end blog -->

         <!--  contact -->
         @include ('home.contact')
         <!-- end contact -->

         <!--  footer -->
         @include ('home.footer')
         <!-- end footer -->
      <script type="text/javascript">
         $(function(){
         var dtToday = new Date();
      
         var month = dtToday.getMonth() + 1;

         var day = dtToday.getDate();

         var year = dtToday.getFullYear();

         if(month < 10)
            month = '0' + month.toString();

         if(day < 10)
         day = '0' + day.toString();

         var maxDate = year + '-' + month + '-' + day;
         $('#startDate').attr('min', maxDate);
         $('#endDate').attr('min', maxDate);

      });

      $(function() {
         const plusAdult = document.querySelector(".plus-adult");
         const minusAdult = document.querySelector(".minus-adult");
         const numAdult = document.querySelector(".num-adult");
         const hiddenInputAdult = document.getElementById("adult_per_room");
         let a = 1;

         plusAdult.addEventListener("click", () => {
            a++;
            a = (a <= 4) ? a : 4; // Ensure 'a' doesn't exceed 4
            numAdult.innerText = a;
            hiddenInputAdult.value = a; // Update the value of the hidden input field
         });

         minusAdult.addEventListener("click", () => {
            if (a > 1) {
                  a--;
                  numAdult.innerText = a;
                  hiddenInputAdult.value = a; // Update the value of the hidden input field
            }
         });

         const plusChild = document.querySelector(".plus-child");
         const minusChild = document.querySelector(".minus-child");
         const numChild = document.querySelector(".num-child"); // Select the specific element
         const hiddenInputChild = document.getElementById("child_per_room");
         let b = 0;

         plusChild.addEventListener("click", () => {
            b++;
            b = (b <= 4) ? b : 4; // Ensure 'b' doesn't exceed 4
            numChild.innerText = b;
            hiddenInputChild.value = b; // Update the value of the hidden input field for children
         });

         minusChild.addEventListener("click", () => {
            if (b > 0) {
               b--;
               numChild.innerText = b;
               hiddenInputChild.value = b; // Update the value of the hidden input field for children
            }
         });
   
      
      });

        
      (function($) {
         var CheckboxDropdown = function(el) {
            var _this = this;
            this.isOpen = false;
            this.areAllChecked = false;
            this.$el = $(el);
            this.$label = this.$el.find('.dropdown-label');
            this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
            this.$inputs = this.$el.find('[type="checkbox"]');
            
            this.onCheckBox();
            
            this.$label.on('click', function(e) {
               e.preventDefault();
               _this.toggleOpen();
            });
            
            this.$checkAll.on('click', function(e) {
               e.preventDefault();
               _this.onCheckAll();
            });
            
            this.$inputs.on('change', function(e) {
               _this.onCheckBox();
            });
         };
         
         CheckboxDropdown.prototype.onCheckBox = function() {
            this.updateStatus();
         };
         
         CheckboxDropdown.prototype.updateStatus = function() {
            var checked = this.$el.find(':checked');
            
            this.areAllChecked = false;
            this.$checkAll.html('Check All');
            
            if(checked.length <= 0) {
               this.$label.html('Services');
            }
            else if(checked.length === 1) {
               this.$label.html(checked.parent('label').text());
            }
            else if(checked.length === this.$inputs.length) {
               this.$label.html('All Selected');
               this.areAllChecked = true;
               this.$checkAll.html('Uncheck All');
            }
            else {
               this.$label.html(checked.length + ' Selected');
            }
         };
         
         CheckboxDropdown.prototype.onCheckAll = function(checkAll) {
            if(!this.areAllChecked || checkAll) {
               this.areAllChecked = true;
               this.$checkAll.html('Uncheck All');
               this.$inputs.prop('checked', true);
            }
            else {
               this.areAllChecked = false;
               this.$checkAll.html('Check All');
               this.$inputs.prop('checked', false);
            }
            
            this.updateStatus();
         };
         
         CheckboxDropdown.prototype.toggleOpen = function(forceOpen) {
            var _this = this;
            
            if(!this.isOpen || forceOpen) {
               this.isOpen = true;
               this.$el.addClass('on');
               $(document).on('click', function(e) {
               if(!$(e.target).closest('[data-control]').length) {
                  _this.toggleOpen();
               }
               });
            }
            else {
               this.isOpen = false;
               this.$el.removeClass('on');
               $(document).off('click');
            }
         };
         
         var checkboxesDropdowns = document.querySelectorAll('[data-control="checkbox-dropdown"]');
         for(var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
            new CheckboxDropdown(checkboxesDropdowns[i]);
         }
         })(jQuery);
         
      </script>


         <!-- Javascript files-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery-3.0.0.min.js"></script>      
         <script src="js/jquery.min.js"></script>

         <script src="https://kit.fontawesome.com/a821634e43.js" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>
         
      </body>
   </html>