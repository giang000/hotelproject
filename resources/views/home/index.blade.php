<!DOCTYPE html>
<html lang="en">
   <head>
   @include ('home.css')
   <style>
      .MultiCarousel { float: left; overflow: hidden; width: 100%; position:relative; }
      .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
      .MultiCarousel .MultiCarousel-inner .item { float: left;}
      .MultiCarousel .MultiCarousel-inner .item > div { margin:10px;}
      .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
      .MultiCarousel .leftLst { left:0; }
      .MultiCarousel .rightLst { right:0; }
      .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#DB6574;}
      .our_room .room .bed_room {
         padding: 20px 10px!important;
      }
      p {
         margin: 0 0 7px!important;
      }
      .our_room .room .bed_room h3 {
         margin: 0px 0px 15px!important;
      }
      .our_room{
         background: url(../images/blog_bg.jpg);
         background-repeat: no-repeat;
         background-size: 100% 100%;
         padding: 30px 60px 30px 60px;
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
       @include ('home.slider')
      <!-- end banner -->
      
      <!-- about -->
        @include ('home.about')
      <!-- end about -->

      <!-- gallery -->
      {{-- @include ('home.gallary'); --}}
      <!-- end gallery -->

      <!-- blog -->
      {{-- @include ('home.blog'); --}}
      <!-- end blog -->

      <!-- our_room -->
      {{-- @include ('home.room'); --}}

      @include('home.room_carousel')
  
      
      <!-- end our_room -->
      
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
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <script>
        $(document).ready(function () {
            var itemsMainDiv = '.MultiCarousel';
            var itemsDiv = '.MultiCarousel-inner';
            var itemWidth = "";
    
            $('.leftLst, .rightLst').click(function () {
                var condition = $(this).hasClass("leftLst");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });
    
            ResCarouselSize();
    
            $(window).resize(function () {
                ResCarouselSize();
            });
    
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = "data-items";
                var itemClass = '.item';
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function () {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel" + id);
    
                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[3];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 992) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    }
                    else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    }
                    else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
                    $(this).find(itemClass).each(function () {
                        $(this).outerWidth(itemWidth);
                    });
    
                    $(".leftLst").addClass("over");
                    $(".rightLst").removeClass("over");
                });
            }
    
            function ResCarousel(e, el, s) {
                var leftBtn = '.leftLst';
                var rightBtn = '.rightLst';
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");
    
                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                }
                else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");
    
                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }
    
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }
        });
        </script>>
      <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>  
        
   </body>
</html>