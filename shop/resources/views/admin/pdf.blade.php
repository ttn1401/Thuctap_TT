<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hoá Đơn</title>
    <style>
        .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 40px;
    }
    table{
        width: 100%;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 30px;
    }
    .img_size{
        height: 120px;
        width: 70px;
    }
    .title_deg{
        text-align: center;
        font-size: 35px;
        font-family: Arial, Helvetica, sans-serif;
        padding-top: 10px;
        letter-spacing: 2px;
       
        font-weight: bold;
     
    }
    .th_color{
        background-color: #C0C0C0;
        color: black;
    }
    .td_color{
        color: black;
    }
    .document{
        padding: 0 0 2px 38px;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .title_deg, .document, table {
        font-family: Arial, "DejaVu Sans","Times New Roman", sans-serif;
    }

    </style>
</head>
<body>
  
    <h1 class="title_deg">Hoá đơn</h1>

    <p class="document"><b>Tên khách hàng: </b> {{$order->name}}</p>
    <p class="document"><b>Email: </b> {{$order->email}}</p>
    <p class="document"><b>Số điện thoại: </b> {{$order->phone}}</p>
    <p class="document"><b>Địa chỉ</b> {{$order->address}}</p>
    
    <table class="center">
        <tr class="th_color">
            <th>Số hiệu sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Trạng thái thanh toán</th>
            <th>Hình ảnh</th>
        </tr>

        <tr class="td_color">
            <td>{{$order->product_id}}</td>
            <td>{{$order->product_title}}</td>
            <td>{{$order->price}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->payment_status}}</td>
            <td>
                <img class="img_size" src="product/{{$order->image}}" >
            </td>
            
        </tr>
    </table>
    
</body>
</html>