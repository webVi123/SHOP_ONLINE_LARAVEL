@extends ('layout')
@section('title', 'Đăng ký')

@section('content')





<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Đăng ký</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Đăng ký</li>
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
                    <div class="col-md-6 col-sm-12  hlg p-2">
                        <img src="img/hinhlg.jpg" class="w-100" height="450">
                    </div>
                    <div class="col-md-6 col-sm-12  flg">
                        <form action="/action_page.php" class="ms-3">
                            <h3 class="text-danger">Đăng ký</h3>

                            
                            <div class="mb-1 mt-1">
                                <label for="name" class="form-label">Họ
                                    và tên <strong class="text-danger">*</strong></label>
                                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" name="name">
                            </div>
                            
                            <div class="mb-1 mt-1">
                                <label for="email" class="form-label">Email <strong class="text-danger">*</strong></label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password <strong class="text-danger">*</strong></label>
                                <input type="password" class="form-control" id="pwd" placeholder="Nhập password"
                                    name="pswd">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Nhập
                                    lại mật khẩu <strong class="text-danger">*</strong></label>
                                <input type="password" class="form-control" id="pwd" placeholder="Nhập lại password"
                                    name="pswd">
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label"><a href="/login">Bạn đã có tài khoản?</a></label>
                                
                            </div>
                            <button type="submit" class="btn
                                        btn-danger bt-lg">Đăng ký</button>
                        </form>


                    </div>
                </div>

            </div>
            <!-- <div class="col-1"></div> -->
        </div>
    </div>
</div>

@endsection