{{-- 

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <style>

         .owl-carousel .owl-stage{
            display: flex!important;
            justify-content: space-between!important;
            width: 100%!important;
            margin: auto!important;

         }

         .owl-carousel .owl-item {
            width: 100%!important;
            max-height: 100%!important;
            margin: 15px!important;
         }
      </style>

   
   <div class="blog">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Review</h2>
                  </div>
               </div>
            </div>
            <div class="row owl-carousel">
               <div class="item">
                  <div class="blog_box">
              
                     <div class="blog_room">
                           <h5>September 2023</h5>
                           <p>The room condition is wonderful, staffs are friendly, and the breakfast is clean. The night view of West Lake from the rooftop bar is amazing. Highly recommended!</p>
                     </div>
                  </div>
               </div>
   
               <div class="item">
                  <div class="blog_box">
         
                     <div class="blog_room">
                           <h5>August 2023</h5>
                           <p>Rooms are clean and stocked with any essential that you might need. Big thanks to all staff as they were helpful in any questions that asked and always did so with a smile.</p>
                     </div>
                  </div>
               </div>
   
               <div class="item">
                  <div class="blog_box">
         
                     <div class="blog_room">
                           <h5>October 2023</h5>
                           <p>The rooms were clean & spacious. The staffs were all really helpful. We got the city view room, the noise was kept to a minimum due to good sound proofing.</p>
                     </div>
                  </div>
               </div>
   
           
            </div>

        </div>
   </div> --}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
   $(document).ready(function(){
       $('.owl-carousel').owlCarousel({
           loop:true,
           margin:10,
           responsiveClass:true,
           responsive:{
               0:{
                   items:1,
                   nav:true
               },
               600:{
                   items:2,
                   nav:false
               },
               1000:{
                   items:3,
                   nav:true,
                   loop:false
               },
               1200:{
                   items:4,
                   nav:true,
                   loop:false
               }
           }
       });
   });
</script>
      