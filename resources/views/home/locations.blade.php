<div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Locations</h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  @foreach($destination as $destination)
                     <div class="col-md-4">
                        <div><img style="margin-bottom:20px; height:200px" width="350px" src="/destinationimage/{{$destination->image}}" class="services_img"></div>
                        <div style="margin: 0 auto; display:block; text-align: center"><p class="services_text">{{$destination->title}}</p></div>
                        <div class="btn_main"><a href="{{url('detail',$destination->id)}}">Read More</a></div>
                     </div>
                  @endforeach

                  
                 
               </div>
            </div>
         </div>
      </div>