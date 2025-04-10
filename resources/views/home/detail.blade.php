<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
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
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="about_taital">{{$destination->title}}</h1>
                     <p class="about_text">{{$destination->description}}</p>
                     
                  </div>
               </div>
               <div class="col-md-6 padding_right_0">
                  <div><img src="destinationimage/{{$destination->image}}" class="about_img"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- footer section start -->
      @include('home.footer')
   </body>
</html>