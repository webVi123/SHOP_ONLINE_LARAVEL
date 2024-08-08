@extends ('layout')
@section('title', 'Trang lịch sử đơn hàng')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Lịch sử đơn hàng</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Lịch sử đơn hàng</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-3">
    <div class="container py-3">
        <div class="row g-4">
            <div class="col-lg-12">

                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Tài khoản</h4>
                                    <ul class="list-unstyled fruite-categorie">

                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/orderhistory"><i class="fas fa-shopping-cart me-2"></i>Lịch sử
                                                    đơn
                                                    hàng</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/register"><i class="fas fa-user me-2"></i>Đăng ký tài khoản
                                                    mới?</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/updateuser"><i class="fas fa-user me-2"></i>Cập nhật tài
                                                    khoản</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/password/reset"><i class="fas fa-unlock me-2"></i>Quên mật
                                                    khẩu?</a>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="#"><i class="fas fa-bell me-2"></i>Thông báo</a>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/wishlist"><i class="fas fa-file-alt me-2"></i>Danh sách yêu
                                                    thích</a>

                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-flex justify-content-between fruite-name">
                                                <a href="/blog"><i class="fas fa-newspaper me-2"></i>Tin tức</a>

                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h4 class="mb-3">Sản phẩm nổi bật</h4>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/featur-1.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Áo thun</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/featur-2.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Áo sơ mi tay </h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-start">
                                    <div class="rounded me-4" style="width: 100px; height: 100px;">
                                        <img src="img/featur-3.jpg" class="img-fluid rounded" alt="">
                                    </div>
                                    <div>
                                        <h6 class="mb-2">Quần jean</h6>
                                        <div class="d-flex mb-2">
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star text-secondary"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <h5 class="fw-bold me-2">2.99 $</h5>
                                            <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-4">
                                    <a href="#"
                                        class="btn border border-secondary px-4 py-3 mt-3 rounded-pill text-primary w-100">Xem
                                        thêm</a>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="col-lg-9">
                        <div class="tab-class text-center">

                            <ul class="nav nav-pills d-inline-flex text-center mb-5">

                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-1">
                                        <span class="text-dark" style="width: 130px;">Chờ xác nhận</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-2">
                                        <span class="text-dark" style="width: 160px;">Đang chuẩn bị hàng</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-3">
                                        <span class="text-dark" style="width: 130px;">Đang giao</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-4">
                                        <span class="text-dark" style="width: 130px;">Đã giao</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill"
                                        href="#tab-5">
                                        <span class="text-dark" style="width: 130px;">Đã hủy</span>
                                    </a>
                                </li>
                            </ul>




                            <div class="tab-content">


                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">

                                        <div class="row ">
                                            <div class="col-lg-3"></div>
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-3 text-danger"></div>
                                            <div class="col-lg-4 text-danger "><i class="fas fa-spinner"></i> CHỜ XỬ LÍ
                                            </div>

                                        </div>


                                        <table class="table">
                                            <thead>
                                                <tr class="center">
                                                    <th>Mã ĐH
                                                    </th>

                                                    <th>Ngày đặt
                                                    </th>

                                                    <th>Thành tiền
                                                    </th>
                                                    <th>Thanh toán
                                                    </th>
                                                    <th>Xem
                                                    </th>
                                                    <th>Thao tác
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($get_order as $order)

                                                    @if($order->status == 0)
                                                        <tr class="center">

                                                            <td>FS{{$order->id}}
                                                            </td>

                                                            <td>
                                                                {{$order->created_at}}
                                                            </td>


                                                            <td>
                                                               {{ number_format($order->total_amount * 1000, 0, ',', '.') }} VNĐ
                                                            </td>
                                                            @if($order->payment_method == 0)
                                                                <td>
                                                                    <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh
                                                                    toán
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã
                                                                    chuyển
                                                                    khoản
                                                                </td>
                                                            @endif


                                                            <td class="product-actions">
                                                                <form
                                                                    action="{{ route('detail_orderhistory', ['id' => $order->id]) }}"
                                                                    class="delete-form">

                                                                    <button type="submit "
                                                                        class="btn btn-warning text-white delete-button">Xem chi tiết</button>
                                                                </form>
                                                            </td>




                                                            <td>

                                                                <form action="{{ route('update.order.status', $order->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" name="newStatus" value="4">
                                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-times"></i> Hủy hàng
                                                                    </button>
                                                                </form>

                                                            </td>
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>




                                    </div>

                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="row g-4">

                                        <div class="row ">
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                            <div class="col-3"></div>
                                            <div class="col-4 btn-link"><i class="fas fa-caravan"></i> NGƯỜI BÁN ĐANG CHUẨN BỊ
                                            </div>

                                        </div>

                                        <table class="table">
                                            <thead>
                                                <tr class="center">
                                                    <th>Mã ĐH
                                                    </th>

                                                    <th>Ngày đặt
                                                    </th>

                                                    <th>Thành tiền
                                                    </th>
                                                    <th>Thanh toán
                                                    </th>
                                                    <th>Xem
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($get_order as $order)

                                                    @if($order->status == 1)
                                                        <tr class="center">

                                                            <td>FS{{$order->id}}
                                                            </td>

                                                            <td>
                                                                {{$order->created_at}}
                                                            </td>


                                                            <td>
                                                               {{ number_format($order->total_amount * 1000, 0, ',', '.') }} VNĐ
                                                            </td>
                                                            @if($order->payment_method == 0)
                                                                <td>
                                                                    <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh
                                                                    toán
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã
                                                                    chuyển
                                                                    khoản
                                                                </td>
                                                            @endif


                                                            <td class="product-actions">
                                                                <form
                                                                    action="{{ route('detail_orderhistory', ['id' => $order->id]) }}"
                                                                    class="delete-form">

                                                                    <button type="submit "
                                                                        class="btn btn-warning text-white delete-button">Xem chi tiết</button>
                                                                </form>
                                                            </td>




                                                           
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>


                                    </div>
                                </div>



                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="row g-4">

                                        <div class="row ">
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                            <div class="col-3"></div>
                                            <div class="col-4 btn-link"><i class="fas fa-caravan"></i>ĐANG GIAO HÀNG
                                            </div>

                                        </div>

                                        <table class="table">
                                            <thead>
                                                <tr class="center">
                                                    <th>Mã ĐH
                                                    </th>

                                                    <th>Ngày đặt
                                                    </th>

                                                    <th>Thành tiền
                                                    </th>
                                                    <th>Thanh toán
                                                    </th>
                                                    <th>Xem
                                                    </th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($get_order as $order)

                                                    @if($order->status == 2)
                                                        <tr class="center">

                                                            <td>FS{{$order->id}}
                                                            </td>

                                                            <td>
                                                                {{$order->created_at}}
                                                            </td>


                                                            <td>
                                                               {{ number_format($order->total_amount * 1000, 0, ',', '.') }} VNĐ
                                                            </td>
                                                            @if($order->payment_method == 0)
                                                                <td>
                                                                    <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh
                                                                    toán
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã
                                                                    chuyển
                                                                    khoản
                                                                </td>
                                                            @endif


                                                            <td class="product-actions">
                                                                <form
                                                                    action="{{ route('detail_orderhistory', ['id' => $order->id]) }}"
                                                                    class="delete-form">

                                                                    <button type="submit "
                                                                        class="btn btn-warning text-white delete-button">Xem chi tiết</button>
                                                                </form>
                                                            </td>




                                                           
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane fade show p-0">
                                    <div class="row g-4">

                                        <div class="row ">
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                            <div class="col-3"></div>
                                            <div class="col-4 btn-link"><i class="fas fa-check-circle"></i> GIAO HÀNG
                                                THÀNH
                                                CÔNG</div>

                                        </div>


                                        <table class="table">
                                            <thead>
                                                <tr class="center">
                                                    <th>Mã ĐH
                                                    </th>

                                                    <th>Ngày đặt
                                                    </th>

                                                    <th>Thành tiền
                                                    </th>
                                                    <th>Thanh toán
                                                    </th>
                                                    <th>Xem
                                                    </th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($get_order as $order)

                                                    @if($order->status == 3)
                                                        <tr class="center">

                                                            <td>FS{{$order->id}}
                                                            </td>

                                                            <td>
                                                                {{$order->created_at}}
                                                            </td>


                                                            <td>
                                                               {{ number_format($order->total_amount * 1000, 0, ',', '.') }} VNĐ
                                                            </td>
                                                            @if($order->payment_method == 0)
                                                                <td>
                                                                    <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh
                                                                    toán
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã
                                                                    chuyển
                                                                    khoản
                                                                </td>
                                                            @endif


                                                            <td class="product-actions">
                                                                <form
                                                                    action="{{ route('detail_orderhistory', ['id' => $order->id]) }}"
                                                                    class="delete-form">

                                                                    <button type="submit "
                                                                        class="btn btn-warning text-white delete-button">Xem chi tiết</button>
                                                                </form>
                                                            </td>




                                                          
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                               










                                    </div>
                                </div>
                                <div id="tab-5" class="tab-pane fade show p-0">
                                    <div class="row g-4">
                                        <div class="row ">
                                            <div class="col-3"></div>
                                            <div class="col-2"></div>
                                            <div class="col-3"></div>
                                            <div class="col-4 text-danger"><i class="fas fa-times-circle"></i> ĐÃ HỦY
                                            </div>

                                        </div>


                                        <table class="table">
                                            <thead>
                                                <tr class="center">
                                                    <th>Mã ĐH
                                                    </th>

                                                    <th>Ngày đặt
                                                    </th>

                                                    <th>Thành tiền
                                                    </th>
                                                    <th>Thanh toán
                                                    </th>
                                                    <th>Xem
                                                    </th>
                                                    <th>Thao tác
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($get_order as $order)

                                                    @if($order->status == 4)
                                                        <tr class="center">

                                                            <td>FS{{$order->id}}
                                                            </td>

                                                            <td>
                                                                {{$order->created_at}}
                                                            </td>


                                                            <td>
                                                               {{ number_format($order->total_amount * 1000, 0, ',', '.') }} VNĐ
                                                            </td>
                                                            @if($order->payment_method == 0)
                                                                <td>
                                                                    <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh
                                                                    toán
                                                                </td>
                                                            @else
                                                                <td>
                                                                    <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã
                                                                    chuyển
                                                                    khoản
                                                                </td>
                                                            @endif


                                                            <td class="product-actions">
                                                                <form
                                                                    action="{{ route('detail_orderhistory', ['id' => $order->id]) }}"
                                                                    class="delete-form">

                                                                    <button type="submit "
                                                                        class="btn btn-warning text-white delete-button">Xem chi tiết</button>
                                                                </form>
                                                            </td>




                                                            <td>

                                                                <form action="{{ route('update.order.status', $order->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" name="newStatus" value="4">
                                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                                        <i class="fas fa-times"></i> Mua lại
                                                                    </button>
                                                                </form>

                                                            </td>
                                                        </tr>

                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                      








                                    </div>

                                </div>
                            </div>
                        </div>





















                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection