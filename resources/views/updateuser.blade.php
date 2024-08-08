@extends ('layout')
@section('title', 'Trang cập nhật tài khoản')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Cập nhật tài khoản</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Cập nhật tài khoản</li>
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




                        </div>
                    </div>
                    <div class="col-lg-9 ">


                        <div class="container bg-light mt-4">

                            <form action="{{ route('account.update') }}" method="POST" class="m-3"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{ asset($user->img) }}" class="img-fluid rounded-circle"
                                                    alt="" height="300" width="300">
                                            </div>
                                            <div class="mb-1 mt-1">
                                                <label for="img" class="form-label">Hình ảnh <strong
                                                        class="text-danger">*</strong></label>
                                                <input type="file" class="form-control" id="img" name="img"
                                                    value="{{$user->img }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-8">
                                        <div class="mb-1">
                                            <label for="name" class="form-label">Họ và tên <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{$user->name }}">
                                        </div>
                                        <div class="mb-1 mt-1">
                                            <label for="email" class="form-label">Email <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $user->email }}" readonly>
                                        </div>
                                        <div class="mb-1 mt-1">
                                            <label for="phone" class="form-label">Số điện thoại <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="number" class="form-control" id="phone" name="phone"
                                                value="{{$user->phone }}">
                                        </div>
                                        <div class="mb-1 mt-1">
                                            <label for="address" class="form-label">Địa chỉ <strong
                                                    class="text-danger">*</strong></label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                value="{{$user->address }}">
                                        </div>
                                        <div class="mb-1 mt-1">
                                            <a href="">Thay đổi mật khẩu</a>
                                        </div>
                                        <button type="submit" class="btn btn-danger bt-lg mb-3">Cập nhật</button>
                                    </div>
                                </div>
                            </form>



                        </div>
















                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection