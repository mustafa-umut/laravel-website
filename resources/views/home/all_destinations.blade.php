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
         <!-- banner section start -->
         <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">All Destinations </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
                @foreach($destination as $destination)
               <div class="row">
                  <div style= "padding:10px" class="col-md-12">
                     <div class="col-md-3"><img src="destinationimage/{{$destination->image}}" class="services_img"></div>
                     <p style="font-weight: bold" class="services_text col-md-9">{{$destination->title}}</p>
                     <p class="services_text col-md-9">{{$destination->description}}</p>
                     <div style="text-align: center"class="btn_main col-md-9"><a href="{{url('detail',$destination->id)}}">Read More</a></div>
                  </div>
                  
               </div>
               @endforeach
            </div>
         </div>
      </div>

     
 
      <!-- about section end -->
      <!-- footer section start -->
      @include('home.footer')
      <!-- footer section end -->
      
   </body>
</html>