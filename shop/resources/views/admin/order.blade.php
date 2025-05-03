<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css')
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

    <style>
        .title_deg
        {
            text-align: center;
            font-size:60px;
            font-weight:bold;
            padding-bottom:20px;
        }

        .table_deg
        {
            border:2px solid #828282;
            width: 100%;
            margin: auto;
            text-align:center;
            color: black;
            
        }

        .th_deg
        {
            background:#f5f5f5;
        }

        .img_size
        {
            height: 150px;
            width: 150px;
            
        }

        .th_deg{
            font-family: Arial, "DejaVu Sans","Times New Roman", sans-serif;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin/header')

        <div class="main-panel">

            <div class="content-wrapper">

                <h1 class="title_deg">Tổng Đơn hàng</h1>
                
                <div style="padding-left: 500px; padding-bottom: 30px;" > 
                
                    <form action="{{url('search')}}" method="get">
                     @csrf

                        <input type="text" style="color:black;" name="search" placeholder="Search for something">

                        <input type="submit" value="Search" class="btn btn-outline-primary">

                    </form>
                </div>

                <table class="table_deg">

                    <tr class="th_deg">

                        <th style="padding: 5px;">Tên khách hàng</th>
                        <th style="padding: 5px;">Email</th>
                        <th style="padding: 5px;">Địa chỉ</th>
                        <th style="padding: 5px;">Số điện thoại</th>
                        <th style="padding: 5px;">Tên sản phẩm</th>
                        <th style="padding: 5px;">Số lượng</th>
                        <th style="padding: 5px;">Đơn giá</th>
                        <th style="padding: 5px;">Trạng thái thanh toán</th>
                        <th style="padding: 5px;">Trạng thái giao hàng</th>
                        <th style="padding: 5px;">Hình ảnh</th>
                        <th style="padding: 5px;">Trạng thái</th>
                        <th style="padding: 5px;">In hoá đơn</th>
                        <th style="padding: 5px;">Gửi thư</th>

                    </tr>

                    @forelse($order as $order)
                    <tr class="th_deg">

                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>

                        <td>@if($order->payment_status == 'Paid')
                                Đã thanh toán
                            @else
                                Chưa thanh toán
                            @endif
                        </td>

                        <td>
                            @if($order->delivery_status == 'Processing')
                                Đang xử lý
                            @elseif($order->delivery_status == 'delivered')
                                Đã giao hàng
                            @else
                                Chưa giao hàng
                            @endif
                        </td>

                        <td class="img_size">
                            <img src="/product/{{$order->image}}" >
                        </td>

                    <td>

                    @if($order->delivery_status=='Processing')
                     <a href="{{url('delivered',$order->id)}}" class="btn btn-primary" >Giao hàng</a>
                    @else
                     <p style="color:green;" >Đã giao</p>
                     @endif

                        </td>  

                        <td>

                            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Hoá đơn</a>

                        </td>

                        <td>
                            <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Gửi thư</a>

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
        </div>
   
   
      </div>
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
      @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>