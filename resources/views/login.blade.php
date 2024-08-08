@extends ('layout')
@section('title', 'Đăng nhập')

@section('content')





<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Đăng nhập</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Đăng nhập</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- than -->
<div class="container-fluid">
    <div class="container bg-light mt-4">
        <div class="row">
            <!-- <div class="col-1"></div> -->
            <div class="col-12 lg">
                <div class="row m-2 ps-5 pe-5">
                    <div class="col-lg-6 col-md-12 hlg p-2">
                        <img src="img/hinhlg.jpg" class="w-100">
                    </div>
                    <div class="col-lg-6 col-md-12 flg">
                        <form action="/action_page.php" class="ms-3">
                            <h3 class="text-danger">Đăng nhập</h3>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email <strong class="text-danger">*</strong></label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password <strong class="text-danger">*</strong></label>
                                <input type="password" class="form-control" id="pwd" placeholder="Nhập password"
                                    name="pswd">
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    Remember me
                                </label>
                               
                            </div>

                            <div class="form-check mb-3">
                                
                                <label class="form-check-label">
                                    <a href="">Quên mật khẩu | </a>
                                </label>
                                <label class="form-check-label">
                                    <a href="/register">Bạn chưa có tài khoản?</a>
                                </label>
                            </div>
                            <button type="submit" class="btn
                                        btn-danger bt-lg">Đăng nhập</button>
                        </form>


                    </div>
                </div>

            </div>
            <!-- <div class="col-1"></div> -->
        </div>
    </div>
</div>

@endsection