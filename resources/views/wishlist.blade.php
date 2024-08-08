@extends ('layout')
@section('title', 'Danh sách yêu thích')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Danh sách yêu thích</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Danh sách yêu thích</li>
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
                    <div class="col-lg-9">


                        <div class="row g-4">
                            <div class="col-lg-6 col-md-4 ">
                                <div class="p-4 rounded bg-light position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="img/h1.jpg" class="img-fluid w-100" alt="" height="150px">
                                        </div>

                                        <div class="col-6 ps-2">
                                            <a href="#" class="h6">Blazer</a>
                                            <div class="d-flex my-2">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="mb-3">199.000 đ</h6>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <a href="#"><i class="fa fa-shopping-bag me-2 text-primary"></i> Mua
                                                    ngay</a>
                                            </button>
                                            <span class="position-absolute top-0 end-0 mt-0  me-1">
                                                <a><i class="fas fa-trash-alt text-secondary"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-4 ">
                                <div class="p-4 rounded bg-light position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="img/h1.jpg" class="img-fluid w-100" alt="" height="150px">
                                        </div>

                                        <div class="col-6 ps-2">
                                            <a href="#" class="h6">Blazer</a>
                                            <div class="d-flex my-2">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="mb-3">199.000 đ</h6>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <a href="#"><i class="fa fa-shopping-bag me-2 text-primary"></i> Mua
                                                    ngay</a>
                                            </button>
                                            <span class="position-absolute top-0 end-0 mt-0  me-1">
                                                <a><i class="fas fa-trash-alt text-secondary"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-4 ">
                                <div class="p-4 rounded bg-light position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="img/h1.jpg" class="img-fluid w-100" alt="" height="150px">
                                        </div>

                                        <div class="col-6 ps-2">
                                            <a href="#" class="h6">Blazer</a>
                                            <div class="d-flex my-2">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="mb-3">199.000 đ</h6>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <a href="#"><i class="fa fa-shopping-bag me-2 text-primary"></i> Mua
                                                    ngay</a>
                                            </button>
                                            <span class="position-absolute top-0 end-0 mt-0  me-1">
                                                <a><i class="fas fa-trash-alt text-secondary"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-4 ">
                                <div class="p-4 rounded bg-light position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="img/h1.jpg" class="img-fluid w-100" alt="" height="150px">
                                        </div>

                                        <div class="col-6 ps-2">
                                            <a href="#" class="h6">Blazer</a>
                                            <div class="d-flex my-2">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="mb-3">199.000 đ</h6>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <a href="#"><i class="fa fa-shopping-bag me-2 text-primary"></i> Mua
                                                    ngay</a>
                                            </button>
                                            <span class="position-absolute top-0 end-0 mt-0  me-1">
                                                <a><i class="fas fa-trash-alt text-secondary"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-4 ">
                                <div class="p-4 rounded bg-light position-relative">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <img src="img/h1.jpg" class="img-fluid w-100" alt="" height="150px">
                                        </div>

                                        <div class="col-6 ps-2">
                                            <a href="#" class="h6">Blazer</a>
                                            <div class="d-flex my-2">
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star text-primary"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <h6 class="mb-3">199.000 đ</h6>
                                            <button class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <a href="#"><i class="fa fa-shopping-bag me-2 text-primary"></i> Mua
                                                    ngay</a>
                                            </button>
                                            <span class="position-absolute top-0 end-0 mt-0  me-1">
                                                <a><i class="fas fa-trash-alt text-secondary"></i></a>
                                            </span>
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