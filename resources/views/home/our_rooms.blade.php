<!DOCTYPE html>
<html lang="en">
   <head>
    @include ('home.css')



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

      <!-- about -->
      <!-- end about -->
      
      <!-- our_room -->
       @include ('home.room')
      <!-- end our_room -->

      <!-- gallery -->
  
      <!-- end gallery -->

      <!-- blog -->
      <!-- end blog -->

      <!--  contact -->
      @include ('home.contact')
      <!-- end contact -->

      <!--  footer -->
      @include ('home.footer')
      <!-- end footer -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="https://kit.fontawesome.com/a821634e43.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>