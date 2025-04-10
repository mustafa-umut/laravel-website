<!DOCTYPE html>
<html lang="en">
    <head>
        @include('home.homecss')
    </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         @include('home.header')
      </div>
      <!-- header section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="about_taital_main">
                     <h1 class="about_taital">About Us</h1>
                     <p class="about_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>