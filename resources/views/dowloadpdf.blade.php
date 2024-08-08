<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            font-style: normal;
            font-weight: 400;

        }

        body {
            font-family: 'DejaVu Sans', sans-serif;
        }

        

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            margin: auto;
            width: 100%;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

       
    </style>
</head>

<body class="container">
    <div class="logo">
        <img src="{{asset('img/logo3.png')}}" alt="Logo" width="100px" class="img-fluid">
    </div>
    <div>
        <h1>Thông tin đơn hàng</h1>
        <p>Mã đơn hàng: FS{{ $id_order }}</p>
        <p>Ngày đặt: {{ $get_order->created_at }}</p>
        <p>Tổng tiền: {{ number_format( $get_order->total_amount*1000, 0, ',', '.')}} VNĐ</p>
    </div>
    <div>
        <h1>Thông tin người đặt hàng</h1>
        <p>Tên: {{ $get_order->user->name }}</p>
        <p>Email: {{ $get_order->user->email }}</p>
        <p>Địa chỉ: {{ $get_order->user->address }}</p>
        <p>Số điện thoại:{{ $get_order->user->phone }}</p>
    </div>


    <div>
        <h2>Chi tiết sản phẩm</h2>
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td> {{ number_format( $item->price*1000, 0, ',', '.')}}  VNĐ</td>
                        <td>{{ $item->quantity }}</td>
                        <td> {{ number_format( ( $item->price * $item->quantity)*1000, 0, ',', '.')}}  VNĐ</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>