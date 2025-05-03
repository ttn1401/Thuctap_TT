<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
  @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            margin: 0px 200px 0 200px;
            color: black;
        }

        .font_size{
            font-size: 40px;
            padding-bottom:  30px;
            font-weight: bold;
            color: black;

        }

        .text_color{
            color: black;
            padding-bottom: 20px;
          
        }

        label{
            display: block;
            width: 200px;
        }

        .div_design{
            /* padding-bottom: 10px; */
          justify-content: center;
          padding: 8px 0 8px 0;
            border: 1px solid #828282;
        }

        input.btn.btn-primary{
          background-color: white;
        }

        input.btn.btn-primary:hover{
          background-color: rgb(19, 123, 192);
        }
        
    </style>

    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            
              @if(session()->has('message_add_product'))
              <div class="alert alert-success">

                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                  {{session()->get('message_add_product')}}
              </div>
            @endif


            <div class="div_center">
                <h1 class="font_size">Thêm sản phẩm</h1>
            
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                  @csrf

             <div class="div_design">
                <label> Tên sản phẩm: </label>
                <input class="text_color" type="text" name="title"  required="">
             </div>

             <div class="div_design">
                <label>Mô tả về sản phẩm: </label>
                <input class="text_color" type="text" name="description" >
             </div>
             
             <div class="div_design">
                <label>Giá của sản phẩm: </label>
                <input class="text_color" type="number" name="price"  required="">
             </div>

             <div class="div_design">
                <label>Khuyến mãi: </label>
                <input class="text_color" type="text" name="dis_price"  >
             </div>

             <div class="div_design">
                <label>Số lượng: </label>
                <input class="text_color" type="number" min="0" name="quantity"  required="">
             </div>

             <div class="div_design">
                <label>Danh mục sản phẩm: </label>
                <select class="text_color" name="catagory" required="">
                    <option value="" placeholder="">Chọn tại đây</option>

                      @foreach ($catagory as $catagory)
                      <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                      @endforeach
                    
                </select>
             </div>

             <div class="div_design">
                <label>Ảnh sản phẩm: </label>
                <input type="file" name="image" required=""> 
             </div>

             <div class="div_design" id="submit_add_product">
               
                <input type="submit" value="Thêm sản phẩm" class="btn btn-success"> 
             </div>

                </form>
            </div>
        </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
    <!-- End custom js for this page -->
  </body>
</html>