<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
       
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      
      <title>Moon shop</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

      <style>
           .center {
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;
        }
        table,th,td{
        border: 2px solid green;
        border-collapse: collapse;
        padding: 5px 20px;
        }
        .th_deg{
            background-color: rgb(230, 242, 253);
        }
    
        .img_deg{
            width: 120px;
            height: 70px;
        }  
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48,;
            background-color: #ffd1d1;
            border-radius: 21px;
        } 
        .material-symbols-outlined:hover{
            background-color: #ff3737; 
        }

        .tr_deg{
            font-family: Arial, "DejaVu Sans","Times New Roman", sans-serif;
        }

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header');
         <!-- end header section -->
     
        <div>
            <table class="center">
                <tr>
                    <th class="th_deg">Tên sản phẩm</th>
                    <th class="th_deg">Số lượng</th>
                    <th class="th_deg">Đơn giá</th>
                    <th class="th_deg">Trạng thái thanh toán</th>
                    <th class="th_deg">Trạng thái đơn hàng</th>
                    <th class="th_deg">Hình ảnh</th>
                    <th class="th_deg">Huỷ đặt hàng</th>
                </tr>

                @forelse ($order as $order)
                    <tr>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                            <img class="img_deg" src="product/{{$order->image}}">
                        </td>
                        <td>
                            @if($order->delivery_status=='Processing')

                            <a onclick="return confirm('Are you sure to Cancel this Order!!!')" href="{{url('cancel_order', $order->id)}}"><span class="material-symbols-outlined">cancel</span>
                            </a>

                            @else

                                <p style="">Not Alowed</p>
                                
                            @endif
                        </td>
                    </tr>
                    
                @empty
                <tr>
                    <td colspan="16">
                        No Data Found
                    </td>
                </tr>
                @endforelse
                

            </table>
        </div>
        @include('home.footer')

      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
