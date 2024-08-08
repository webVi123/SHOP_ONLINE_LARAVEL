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
                        <form method="POST" action="{{ route('login') }}" class="ms-3">
                            @csrf
                            <h3 class="text-danger">Đăng nhập</h3>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">{{ __('Email') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-3 mt-3">
                                <label for="password" class="form-label ">{{ __('Mật khẩu') }} <strong
                                        class="text-danger">*</strong></label>


                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-check mb-3 ">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                            <div class=" mb-3">
                                <div class="">
                                    <button type="submit" class="btn
                                        btn-danger bt-lg">
                                        {{ __('Đăng nhập') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Quên mật khẩu?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection