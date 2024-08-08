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


                        <div class="container mt-4">

                         
                                <div class="row justify-content-center">
                                    
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4 text-center">
                                                        <img src="{{ asset($user->img) }}" alt="Avatar"
                                                            class="img-fluid ac mb-3"
                                                            style="width: 250px; height: 250px;">
                                                        <h4 class="mb-0"> {{$user->name }}</h4>
                                                        
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h3 class="mb-3">Thông tin cập nhật thành công <i class="fas fa-check-circle" style="color: #04ff00;"></i></h3>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-4 font-weight-bold"><i class="fas fa-envelope text-danger"></i> Email:</div>
                                                            <div class="col-sm-8">{{$user->email}}</div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-4 font-weight-bold"><i class="fas fa-phone-volume text-danger"></i> Số điện thoại:</div>
                                                            <div class="col-sm-8">{{$user->phone }}</div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-sm-4 font-weight-bold"><i class="fas fa-home text-danger"></i> Địa chỉ:</div>
                                                            <div class="col-sm-8">{{$user->address}}</div>
                                                        </div>
                                                        
                                                        <div class="text-right">
                                                            <a href="{{route('account.form')}}" class="btn btn-danger">Chỉnh sửa thông tin</a>
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
    </div>
</div>
</div>


@endsection