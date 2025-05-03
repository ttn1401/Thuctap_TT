<!DOCTYPE html>
<html lang="vi">
  <head>

    <!-- Required meta tags -->
    @include('admin/css')

    <style type="text/css">

        .div_center
        {
            color: black;
            text-align:center;
            padding-top: 40px;
        } 

        .font_size
        {
            font-size:40px;
            padding-bottom: 40px;
        }

        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
            display: inline-block;
            width: 200px;

        }

        .div_design
        {
            padding-bottom: 15px;
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

        <!-- product -->
        <div class="main-panel">
            <div class="content-wrapper">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-hidden>x</button>
                    {{session()->get('message')}}

                </div>
            @endif


            <div class="div_center">

                <h1 class="font_size">Cập nhật sản phẩm</h1>

                <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="div_design">
                    <label>Tên sản phẩm:</label>
                    <input class="text_color" type="text" name="title" required="" value="{{$product->title}}">
                </div>

                <div class="div_design">
                    <label>Mô tả về sản phẩm:</label>
                    <input class="text_color" type="text" name="description"  required="" value="{{$product->description}}">
                </div>

                <div class="div_design">
                    <label>Giá của sản phẩm:</label>
                    <input class="text_color" type="number" name="price" required="" value="{{$product->price}}">
                </div>

                <div class="div_design">
                    <label>Khuyến mãi:</label>
                    <input class="text_color" type="number" name="dis_price" value="{{$product->discount_price}}">
                </div>

                <div class="div_design">
                    <label>Số lượng:</label>
                    <input class="text_color" type="number" min="0" name="quantity" required="" value="{{$product->quantity}}">
                </div>

                <div class="div_design">
                   <label>Danh mục sản phẩm:</label>
                    <select class="text_color" name="catagory" required="">

                        <option value="{{$product->catagory}}" value="" selected="">{{$product->catagory}}</option> 

                         @foreach($catagory as $catagory)

                            <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

                        @endforeach

                </select>   
                </div>

                <div class="div_design">
                    <label>Hình ảnh sản phẩm hiện tại:</label>
                    <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
                </div>


                <div class="div_design">
                    <label>Chọn ảnh sản phẩm:</label>
                    <input type="file" name="image" >
                </div>

                <div class="div_design" >
                    <input type="submit" value="Cập nhật" class="btn btn-primary">
                </div>
                </from> 
            </div>
      
      <!-- page-body-wrapper ends -->
    </div>
     <!-- endinject -->
    <!-- Custom js for this page -->
      @include('admin/script')
     <!-- End custom js for this page -->
  </body>
</html>
