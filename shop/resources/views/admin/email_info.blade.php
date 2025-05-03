<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
  @include('admin.css')
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
    <style>
      #title{
        font-size: 25px;
        padding-bottom:  30px;
        font-weight: bold;
        color: black;
        text-align: center;
        padding-bottom: 50px;
        padding-top: 30px;
        
      }

      .email{
        padding: 10px 142px 20px 0px;
      }
      input.width{
        width: 500px;
        color: black;
      }
   

      label{
        display: inline-block;
        width: 30%;
       
      }

      .title_deg, .document, table {
        
        font-family: Arial, "DejaVu Sans","Times New Roman", sans-serif;
    }

    

    .content-wrapper {
        color: black;
        
    }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        @if(session()->has('message'))
                <div class="alert alert-success">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                    {{session()->get('message')}}

                </div>
          @endif
        <div class="main-panel">
            <div class="content-wrapper">
          

                <h1 id="title">Gửi Email đến {{$order->email}}</h1>

                <!-- gửi tát cả dữ liệu vào url send_user_email sau dó chuyển đến web.php rồi gọi đên AdminController -->

                <form action="{{url('send_user_email', $order->id)}}" method="POST">
                  
                  @csrf

                  <div class="center">
                    <label class="email" for="">Lời chào: </label>
                    <input class="width" type="text" name="greeting" value="">
                  </div>

                  <div class="center">
                    <label class="email" for="">Email FirstLine:  </label>
                    <input class="width" type="text" name="firstline" value="">
                  </div>

                  <div class="center">
                    <label class="email" for="">Nội dung: </label>
                    <input class="width" type="text" name="body" value="">
                  </div>

                  <div class="center">
                    <label class="email" for="">Thông tin liên hệ:</label>
                    <input class="width" type="text" name="button" value="">
                  </div>

                  <div class="center">
                    <label class="email" for=""> Đường dẫn: </label>
                    <input class="width" type="text" name="url" value="">
                  </div>

                  <div class="center">
                    <label class="email" for="">Câu kết: </label>
                    <input class="width" type="text" name="lastline" value="">
                  </div>

                  <div class="center center-submit">
                    <input type="submit" style="margin-left:550px;" value="Send Email" class="btn btn-primary">

                  </div>


                </form>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>