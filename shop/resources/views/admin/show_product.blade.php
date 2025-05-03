<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin/css')

    <style>

        .center
        {
            margin:auto;
            width: 100%;
            border: 2px solid #4F4F4F;
            margin-top: 20px;
            padding-top: 20px;
            color: black;
        }

        .font_size
        {
            text-align: center;
            font-size: 55px;
        }

        .img_size
        {
          width: 300px;
          height: 150px;
        }

        .th_color
        {
          background: #ce8c7c;
        }
        
        .th_deg
        {
          padding: 30px;
          text-align: center;
        }

        .tr_deg
        {
          text-align: center;
        }
    </style>
     <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />

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

              @if(session()->has('message'))
                  <div class="alert alert-success">
                      
                      <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                      {{session()->get('message')}}

                  </div>
              @endif
            <h1 class="font_size text-center"> Tất cả sản phẩm </h1>
            
            <table class="center">

                <tr class="th_color">
                    <th class="th_deg">Tên sản phẩm</th>
                    <th class="th_deg">Mô tả về sản phẩm</th>
                    <th class="th_deg">Số lượng</th>
                    <th class="th_deg">Danh mục sản phẩm</th>
                    <th class="th_deg">Giá của sản phẩm</th>
                    <th class="th_deg">Khuyến mãi</th>
                    <th class="th_deg">Ảnh sản phẩm</th>
                    <th class="th_deg">Chỉnh sửa</th>
                    <th class="th_deg">Xoá</th>

                </tr>

                @foreach($product as $product)

                <tr >
                    <td class="tr_deg">{{$product->title}}</td>
                    <td class="tr_deg">{{$product->description}}</td>
                    <td class="tr_deg">{{$product->quantity}}</td>
                    <td class="tr_deg">{{$product->catagory}}</td>
                    <td class="tr_deg">{{$product->price}}</td>
                    <td class="tr_deg">{{$product->discount_price}}</td>
                    
                    <td>
                        <img class="img_size" src="/product/{{$product->image}}" >
                    </td>

                    <td> <a class="btn btn-success" style="margin: 15px;" href="{{url('update_product',$product->id)}}">Chỉnh sửa</a></td>

                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá nó ?')" href="{{url('delete_product',$product->id)}}">Xoá</a>
                    </td>


                </tr>
                
                @endforeach

            </table>


      </div>
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
      @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>