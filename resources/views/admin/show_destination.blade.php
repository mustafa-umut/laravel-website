<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        .post_title{
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
        }
        .table_deg{
            border:1px solid white;
            width:80%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .tr_deg{
            border-bottom:1px solid white;
        }
        .img_deg{
            height: 100px;
            weight: 150px;
            padding: 10px;
        }

        
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        @if(session()->has('message'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

        </div>
        @endif
        <h1 class="post_title">All Destinations</h1>
        <div>
            <table class="table_deg">
                <tr class="tr_deg">
                    <th>Destination Title</th>
                    <th>Destination Description</th>
                    <th>Destination Image</th>
                    <th>Delete</th>
                    <th>Edit</th>

                </tr>
                @foreach($destination as $destination)
                <tr>
                    <th>{{$destination->title}}</th>
                    <th>{{$destination->description}}</th>
                    <th><img class="img_deg" src="destinationimage/{{$destination->image}}"></th>
                    <th><a href="{{url('delete_destination', $destination->id)}}" class="btn btn-danger">Delete</a></th>
                    <th><a href="{{url('edit_destination', $destination->id)}}" class="btn btn-success">Edit</a></th>
                @endforeach
                </tr>

            </table>
        </div>
        @include('admin.footer')
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="admincss/vendor/jquery/jquery.min.js"></script>
    <script src="admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admincss/js/charts-home.js"></script>
    <script src="jadmincss/s/front.js"></script>
  </body>
</html>