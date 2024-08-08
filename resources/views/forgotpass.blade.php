@extends ('layout')
@section('title', 'Quên mật khẩu')

@section('content')





<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Quên mật khẩu</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Quên mật khẩu</li>
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
                            <h3 class="text-danger">Quên mật khẩu</h3>
                            <div class="mb-1 mt-1">
                                <label for="username" class="form-label">Username <strong
                                        class="text-danger">*</strong></label>
                                <input type="text" class="form-control" id="username" placeholder="Nhập username"
                                    name="username">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email <strong
                                        class="text-danger">*</strong></label>
                                <input type="email" class="form-control" id="email" placeholder="Nhập email"
                                    name="email">
                            </div>




                            <button type="submit" class="btn
                                        btn-danger bt-lg">Tìm lại mật khẩu</button>
                        </form>


                    </div>
                </div>

            </div>
            <!-- <div class="col-1"></div> -->
        </div>
    </div>
</div>

@endsection