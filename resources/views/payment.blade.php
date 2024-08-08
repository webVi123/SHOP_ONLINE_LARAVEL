@extends ('layout')
@section('title', 'Thanh toán thành công')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Thanh toán</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#"></a></li>
        <li class="breadcrumb-item active text-white"></li>
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
                                                <a href="/forgotpass"><i class="fas fa-unlock me-2"></i>Quên mật
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


                        <div class="container mt-4 ">

                         
                                <div class="row justify-content-center">
                                    
                                        <div class="card bg-light">
                                            <div class="card-body bg-light">
                                                <div class="row">
                                                   
                                                    <div class="col-md-12 ">
                                                        <h3 class="mb-3">Chúc mừng bạn đã đặt hàng thành công<i class="fas fa-check-circle" style="color: #04ff00;"></i></h3>
                                                        
                                                        <div class="text-right">
                                                            <a href="{{route('home')}}" class="btn btn-danger">Quay lại trang chủ</a>
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