@extends ('layout')
@section('title', 'Trang lịch sử đơn hàng')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Chi tiết đơn hàng</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Chi tiết đơn hàng</li>
    </ol>
</div>


<div class="container mt-4">
    <div class="row ">
        <div class="col-md-4">
            <!-- Logo -->
            <!-- <a href="/"><img src="{{ asset('img/logo_3.png') }}" alt="Logo" width="100px" class="img-fluid"></a> -->
        </div>
        <div class="col-md-8">
            <!-- Nút tải về PDF -->
            <div class="text-end mb-3">
                <a href="{{ route('dowload', ['id' => $id_order]) }}" class="btn btn-primary text-white">Tải về PDF</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="mb-4 order-info">
                <h4>Đơn hàng</h4>
                <!-- Hiển thị thông tin của đơn hàng -->
                <p>Mã đơn hàng: FS{{ $id_order }}</p>
                <p class="order-status">Trạng thái:
                    @if ($get_order->status == 0)
                        <i class="fas fa-info-circle text-info"></i> Chờ xác nhận
                    @elseif ($get_order->status == 1)
                        <i class="fas fa-sync-alt text-info"></i> Đang chuẩn bị hàng
                    @elseif ($get_order->status == 2)
                        <i class="fas fa-truck text-primary"></i> Đang giao hàng
                    @elseif ($get_order->status == 3)
                        <i class="fas fa-check-circle text-success"></i> Giao hàng thành công
                    @elseif ($get_order->status == 4)
                        <i class="fas fa-times-circle text-danger"></i> Hủy hàng
                    @endif
                </p>
                <p>Ngày đặt: {{ $get_order->created_at }}</p>
                <p>Tổng tiền: {{ $get_order->total_amount }}</p>
            </div>
            <!-- Thông tin người đặt hàng -->
            <div class="mb-4 customer-info">
                <h4>Thông tin người đặt hàng</h4>
                <p><strong>Tên:</strong> {{ $get_order->user->name }}</p>
                <p><strong>Email:</strong> {{ $get_order->user->email }}</p>
                <p><strong>Địa chỉ:</strong> {{ $get_order->user->address }}</p>
                <p><strong>Số điện thoại:</strong> {{ $get_order->user->phone }}</p>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Thông tin chi tiết đơn hàng -->
            <div>
                <h4>Thông tin chi tiết đơn hàng</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Tổng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td><img src="{{asset($item->image)}}" width="100px" height="100px"></td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ number_format($item->price, 0, ',', '.') }} VND</td>
                                <td>{{ number_format($item->price * $item->quantity, 0, ',', '.') }} VND</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection