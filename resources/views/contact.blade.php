

@extends ('layout')
@section('title', 'Liên hệ')

@section('content')

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Liên hệ</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Liên hệ</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Contact Start -->
<div class="container-fluid contact py-3">
    <div class="container py-3">
        <div class="p-5 bg-light rounded">
            <div class="row g-4">
                
                <div class="col-lg-12">
                    <div class="h-100 rounded">
                        <iframe class="rounded w-100" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15675.975538962584!2d106.66140214499653!3d10.811779329822897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a0012b43cb%3A0xb29f8dae6c0c28e7!2sFPT%20Polytechnic!5e0!3m2!1sen!2s!4v1715313520275!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="" class="">
                        <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Nhập tên của bạn">
                        <input type="email" class="w-100 form-control border-0 py-3 mb-4"
                            placeholder="Nhập email của bạn">
                        <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10"
                            placeholder="Nội dung"></textarea>
                        <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                            type="submit">Gửi</button>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex p-4 rounded mb-4 bg-white">
                        <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                        <div>
                            <h5>Địa chỉ</h5>
                            <p class="mb-2">Tô Kí, Thành phố Hồ Chí Minh</p>
                        </div>
                    </div>
                    <div class="d-flex p-4 rounded mb-4 bg-white">
                        <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                        <div>
                            <h5>Email</h5>
                            <p class="mb-2">DiDi080504@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex p-4 rounded bg-white">
                        <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                        <div>
                            <h5>Số điện thoại</h5>
                            <p class="mb-2">(+84) 72291 288</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection