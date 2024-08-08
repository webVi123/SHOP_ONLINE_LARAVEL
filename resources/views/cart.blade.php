@extends ('layout')
@section('title', 'Giỏ hàng')

@section('content')





<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Giỏ hàng</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Giỏ hàng</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Cart Page Start -->
<div class="container-fluid py-3">
    <div class="container py-3">
        <div class="row">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hình</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Giảm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $cat)


                            <tr>
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($cat['img']) }}" class="img-fluid me-5 rounded-circle"
                                            style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4">{{$cat['name']}}</p>
                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ number_format($cat['price'] * 1000, 0, ',', '.') }} VND</p>

                                </td>
                                <td>
                                    <p class="mb-0 mt-4">- {{$cat['discount_percent']}}%</p>
                                </td>
                                <td>
                                    <form action="{{ route('updateQuantity') }}" method="POST">
                                        @csrf
                                        <div class="input-group quantity mt-4" style="width: 100px;">
                                            <input type="number" name="quantity"
                                                class="form-control form-control-sm text-center border-0"
                                                value="{{ $cat['quantity'] }}" onchange="this.form.submit()">
                                        </div>
                                        <input type="hidden" name="product_id" value="{{ $cat['id_product'] }}">
                                    </form>

                                </td>
                                <td>
                                    <p class="mb-0 mt-4">{{ number_format($cat['total'] * 1000, 0, ',', '.') }} VND</p>

                                </td>
                                <td>
                                    <form action="{{ route('cart.remove', $cat['id_product']) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-md rounded-circle bg-light border mt-4">
                                            <i class="fa fa-times text-danger"></i>
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach


                        <tr>

                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <p class="mb-0 mt-2">Tổng tiền</p>
                            </td>

                            <td>
                                <p class="mb-0 mt-2">{{ number_format($totalAmount * 1000, 0, ',', '.') }} VND</p>
                            </td>
                            <td>
                                <button class="btn border-secondary rounded-pill px-2 py-2 text-primary text-uppercase "
                                    type="button"><a href="/chackout">Thanh toán</a></button>
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <form action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-md bg-primary border text-white">
                                        Xóa tất cả sản phẩm
                                    </button>
                                </form>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>

                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->



@endsection