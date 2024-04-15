<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Link Owl Carousel CSS -->
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
         
         /* .blog {
            background: url(../images/blog_bg.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            padding: 60px 0 30px 0;
            margin-top: 60px;
          
            
         }
    
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


         .blog .titlepage {
        
         }
         
         .blog .titlepage h2 {
            color: #fff;
         }
         
         .blog .titlepage p {
            color: #fff;
            font-size: 17px;
            margin-top: 20px;
         }
         
         .blog .blog_box {
            background-color: #fff;
            margin-bottom: 30px;
            transition: ease-in all 0.5s;
      
         }
         
         .blog .blog_box .blog_img {
            overflow: hidden;
         }
         
         .blog .blog_box .blog_img figure {
            margin: 0;
         }
         
         .blog .blog_box .blog_img figure img {
            width: 100%;
            transition: all .5s;
         }
         
         .blog .blog_box .blog_img figure img:hover {
            transform: scale(1.2);
         }
         
         .blog .blog_box .blog_room {
            padding: 33px 30px;
            text-align: left;
            width: auto;
         }
         
         .blog .blog_box .blog_room h3 {
            color: #121212;
            font-size: 25px;
            line-height: 20px;
            font-weight: 500;
            padding-bottom: 5px;
            transition: ease-in all 0.5s;
            margin: auto;
         }
         
         .blog .blog_box .blog_room span {
            font-size: 15px;
            color: #ff0909;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
         }
         
         .blog .blog_box .blog_room p {
            font-size: 14px;
            line-height: 20px;
         } */
      </style>
</head>
<body>
   
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
                     {{-- <div class="blog_img">
                           <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     </div> --}}
                     <div class="blog_room">
                           <h5>September 2023</h5>
                           <p>The room condition is wonderful, staffs are friendly, and the breakfast is clean. The night view of West Lake from the rooftop bar is amazing. Highly recommended!</p>
                     </div>
                  </div>
               </div>
   
               <div class="item">
                  <div class="blog_box">
                     {{-- <div class="blog_img">
                           <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     </div> --}}
                     <div class="blog_room">
                           <h5>August 2023</h5>
                           <p>Rooms are clean and stocked with any essential that you might need. Big thanks to all staff as they were helpful in any questions that asked and always did so with a smile.</p>
                     </div>
                  </div>
               </div>
   
               <div class="item">
                  <div class="blog_box">
                     {{-- <div class="blog_img">
                           <figure><img src="images/blog3.jpg" alt="#"/></figure>
                     </div> --}}
                     <div class="blog_room">
                           <h5>October 2023</h5>
                           <p>The rooms were clean & spacious. The staffs were all really helpful. We got the city view room, the noise was kept to a minimum due to good sound proofing.</p>
                     </div>
                  </div>
               </div>
   
               <!-- Add more items as needed -->
            </div>

        </div>
   </div>

<!-- Link Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
      });
</script>

</body>
</html>
      