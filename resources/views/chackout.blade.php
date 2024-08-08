@extends ('layout')
@section('title', 'Thanh toán')

@section('content')



<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Thanh toán</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Thanh toán</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Checkout Page Start -->
<div class="container-fluid py-3">
    <div class="container py-3">
        <h4 class="mb-4">Chi tiết hóa đơn</h4>
        <form action="{{route('payment')}}" method="post">
            @csrf
            <div class="row ">
                @if(Auth::user())
                    <div class="col-md-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Họ và tên<sup>*</sup></label>
                                    <input type="text" class="form-control" name="customer_name"
                                        value="{{Auth::user()->name}}" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Số điện thoại<sup>*</sup></label>
                                    <input type="tel" class="form-control" name="customer_phone"
                                        value="{{Auth::user()->phone}}" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Địa chỉ <sup>*</sup></label>
                                    <input type="text" class="form-control" placeholder="" name="customer_address"
                                        value="{{Auth::user()->address}}" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Email <sup>*</sup></label>
                                    <input type="email" class="form-control" name="customer_email"
                                        value="{{Auth::user()->email}}" required>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="form-item">
                            <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="5"
                                placeholder="Ghi chú đơn hàng"></textarea>
                        </div>

                        <div class="ttdathang form-item mt-4">
                            <a id="showInfoLink" onclick="showttnh()" class="form-check-label">Thay đổi thông tin nhận
                                hàng</a>
                        </div>


                        <div class="ttdathang" id="ttdathang">

                            <div class="form-item ">
                                <label class="form-label my-3">Họ và tên người nhận<sup>*</sup></label>
                                <input type="text" class="form-control" name="receiver_name">
                            </div>

                            <div class="form-item">
                                <label class="form-label my-3">Số điện thoại người nhận<sup>*</sup></label>
                                <input type="tel" class="form-control" name="receiver_phone">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Địa chỉ người nhận <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="" name="receiver_address">
                            </div>

                            <hr>
                            <div class="form-item">
                                <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="5"
                                    placeholder="Ghi chú đơn hàng"></textarea>
                            </div>

                        </div>



                    </div>
                @else
                    <div class="col-md-12 col-lg-5 col-xl-6">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Họ và tên<sup>*</sup></label>
                                    <input type="text" class="form-control" name="customer_name" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Số điện thoại<sup>*</sup></label>
                                    <input type="tel" class="form-control" name="customer_phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Địa chỉ <sup>*</sup></label>
                                    <input type="text" class="form-control" placeholder="" name="customer_address" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="form-item w-100">
                                    <label class="form-label my-3">Email <sup>*</sup></label>
                                    <input type="email" class="form-control" name="customer_email" required>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="form-item">
                            <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="5"
                                placeholder="Ghi chú đơn hàng"></textarea>
                        </div>

                        <div class="ttdathang form-item mt-4">
                            <a id="showInfoLink" onclick="showttnh()" class="form-check-label">Thay đổi thông tin nhận
                                hàng</a>
                        </div>


                        <div class="ttdathang" id="ttdathang">

                            <div class="form-item ">
                                <label class="form-label my-3">Họ và tên người nhận<sup>*</sup></label>
                                <input type="text" class="form-control" name="receiver_name">
                            </div>

                            <div class="form-item">
                                <label class="form-label my-3">Số điện thoại người nhận<sup>*</sup></label>
                                <input type="tel" class="form-control" name="receiver_phone">
                            </div>
                            <div class="form-item">
                                <label class="form-label my-3">Địa chỉ người nhận <sup>*</sup></label>
                                <input type="text" class="form-control" placeholder="" name="receiver_address">
                            </div>

                            <hr>
                            <div class="form-item">
                                <textarea name="text" class="form-control" spellcheck="false" cols="30" rows="5"
                                    placeholder="Ghi chú đơn hàng"></textarea>
                            </div>

                        </div>



                    </div>
                @endif

                <div class="col-md-12 col-lg-7 col-xl-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Hình</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Giảm</th>
                                    <th scope="col">SL</th>
                                    <th scope="col">Thành tiền</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if ($cart)
                                    @foreach ($cart as $cat)


                                        <tr>
                                            <th scope="row">
                                                <div class="d-flex align-items-center mt-2">
                                                    <img src="{{asset($cat['img'])}}" class="img-fluid rounded-circle"
                                                        style="width: 60px; height: 60px;" alt="">
                                                </div>
                                            </th>
                                            <td class="py-5">{{$cat['name']}}</td>
                                            <td class="py-5">{{ number_format($cat['price']*1000, 0, ',', '.') }} VND</td>
                                            <td class="py-5"> {{$cat['discount_percent']}}%</td>
                                            <td class="py-5">x{{$cat['quantity']}}</td>
                                            <td class="py-5">{{ number_format($cat['total']*1000, 0, ',', '.') }} VND</td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <th scope="row">
                                            <p class="mb-0 text-danger ">Tổng tiền</p>
                                        </th>
                                        <td>

                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>

                                        </td>
                                        <td>
                                            <div class="">
                                                <p class="mb-0 text-danger">{{number_format($totalAmount*1000, 0, ',', '.')}} VND
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="row  text-center align-items-center justify-content-center border-bottom py-3">
                        <div class="col-12">
                            <div class=" text-start my-3">
                                <!-- <input type="checkbox" class="form-check-input bg-primary border-0" id="Transfer-1" name="Transfer" value="Transfer"> -->
                                <label class="" for="Transfer-1">Phương thức thanh toán</label>
                            </div>

                        </div>
                    </div>
                    <div class="row g-4 text-center align-items-center justify-content-center border-bottom py-3">
                        <div class="col-12">
                            <div class="form-check text-start my-3">
                                <input type="checkbox" class="form-check-input bg-primary border-0" id="Payments-1"
                                    name="payment_method" value="0">
                                <label class="form-check-label" for="Payments-1">Thanh toán khi nhận hàng</label>
                            </div>
                        </div>
                    </div>


                    <div class="row g-4  align-items-center justify-content-center pt-4">


                        <button type="submit"
                            class="btn border-secondary py-3 px-4 text-uppercase w-100 text-primary">Đặt
                            hàng</button>

                    </div>
                </div>
            </div>
        </form>
        <div class="row  align-items-center justify-content-center border-bottom py-3">
            <div class="col-md-12 col-lg-5 col-xl-6">
            </div>
            <div class="col-md-12 col-lg-7 col-xl-6">
                <div class="row">
                    <div class="col-2">
                        <form action="{{ route('vnpay.payment') }}" method="POST">
                            @csrf
                            
                            <input type="hidden"  name="total_vnpay" value="{{$totalAmount}}">
                            <button type="submit" class="btn btn-primary text-white" name="redirect"><img src="{{asset('img/vnpay.jpg')}}" width="50px" height="50px"></button>
                        </form>

                    </div>
                    <div class="col-2">
                        <form action="{{ route('vnpay.payment') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary text-white"><img src="{{asset('img/momo.jpg')}}" width="50px" height="50px"></button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="{{ route('vnpay.payment') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary text-white"><img src="{{asset('img/mbbank.jpg')}}" width="50px" height="50px"></button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection