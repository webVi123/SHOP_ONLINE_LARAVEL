@extends ('layout')
@section('title', 'Đăng ký')

@section('content')



<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Đăng ký</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Đăng ký</li>
    </ol>
</div>
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
                        <form method="POST" action="{{ route('register') }}" class="ms-3">
                            @csrf
                            <h3 class="text-danger">Đăng ký</h3>


                            <div class="mb-2 mt-2">
                                <label for="name" class="form-label">{{ __('Họ và tên') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label">{{ __('Email') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-2">
                                <label for="password" class="form-label">{{ __('Mật khẩu') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-2">
                                <label for="password-confirm" class="form-label">{{ __('Nhập lại mật khẩu') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">

                            </div>


                            <div class="mb-1 mt-2">
                                <label for="pwd" class=" btn btn-link"><a href="/login">Bạn đã có tài khoản?</a></label>

                            </div>
                            <button type="submit" class="btn
                                        btn-danger bt-lg">{{ __('Đăng ký') }}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection