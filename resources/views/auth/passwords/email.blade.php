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
<div class="container-fluid">
    <div class="container bg-light mt-4">


        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <!-- <div class="col-1"></div> -->
                <div class="col-12 lg">
                    <div class="row m-2 ps-5 pe-5">
                        <div class="col-lg-6 col-md-12 hlg p-2">
                            <img src="{{asset('img/hinhlg.jpg')}}" class="w-100" height="200">
                        </div>
                        <div class="col-lg-6 col-md-12 flg">
                            <h3 class="text-danger">Quên mật khẩu</h3>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-1 mt-1">
                                    <label for="email"
                                        class="col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="mb-1 mt-1">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-1 mt-3">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('Tìm lại mật khẩu') }}
                                        </button>
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
@endsection