@extends ('layout')
@section('title', 'Fashion')
@section('content')

<!-- Hero Start -->
<div class="container-fluid py-3 mb-3 hero-header">

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/bn1.png" alt="Los Angeles" class="d-block w-100" height="600">
            </div>
            <div class="carousel-item">
                <img src="img/bn2.png" alt="Chicago" class="d-block w-100" height="600">
            </div>
            <div class="carousel-item">
                <img src="img/bn3.png" alt="New York" class="d-block w-100" height="600">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

</div>
<!-- Hero End -->


<!-- Featurs Section Start -->
<div class="container-fluid featurs py-3">
    <div class="container py-3">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-car-side fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Miễn phí ship</h5>
                        <p class="mb-0">Miễn phí đơn từ 200.000đ</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-user-shield fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Bảo mật thanh toán</h5>
                        <p class="mb-0">100% bảo mật thanh toán</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fas fa-exchange-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>30 ngày trả hàng</h5>
                        <p class="mb-0">Đảm bảo tiền 30 ngày</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="featurs-item text-center rounded bg-light p-4">
                    <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                        <i class="fa fa-phone-alt fa-3x text-white"></i>
                    </div>
                    <div class="featurs-content text-center">
                        <h5>Hỗ trợ 24/7</h5>
                        <p class="mb-0">Hỗ trợ nhanh chóng mọi lúc</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featurs Section End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-3">
    <div class="container py-3">
        <div class="tab-class text-center">
            <div class="row g-4">
                <div class="col-lg-4 text-start mt-5">
                    <h4>SẢN PHẨM MỚI NHẤT</h4>
                </div>

            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach($products as $product)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{$product->img}}" class="img-fluid  rounded-top w-100" alt=""
                                                    height="320px">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">- {{$product->discount_percent}}%</div>
                                            <div class=" border border-secondary border-top-0 rounded-bottom">
                                                <div class="p-3">
                                                    <!-- <a class="d-block h5 mb-2" href="prodetail/{id}">{{$product->name}}</a> -->
                                                    <a class="d-block h6 mb-2"
                                                        href="{{ route('prodetail', ['id' => $product->id]) }}"
                                                        style="height: 35px;">
                                                        {{ $product->name }}
                                                    </a>
                                                    <span class="text-primary me-1">
                                                        {{ number_format(($product->price - ($product->price * $product->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                                        VND
                                                    </span>
                                                    <span class="text-body text-decoration-line-through">
                                                        {{ number_format($product->price * 1000, 0, ',', '.') }} VND
                                                    </span>

                                                </div>
                                                <div
                                                    class="text-center w-100 bg-primary border border-secondary border-top-0 rounded-bottom">
                                                    <form action="{{ route('cart.add') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="img" value="{{ $product->img }}">
                                                        <!-- Hoặc bạn có thể thêm input để người dùng nhập số lượng -->

                                                        <!-- Nếu sản phẩm có kích cỡ, thêm input cho size -->
                                                        @if(isset($product->sizes))
                                                            <select name="size">
                                                                @foreach($product->sizes as $size)
                                                                    <option value="{{ $size }}">{{ $size }}</option>
                                                                @endforeach
                                                            </select>
                                                        @endif

                                                        <button type="submit" class="btn btn-primary m-1 text-white">
                                                            <small><i class="fa fa-shopping-bag text-white me-2"></i>Thêm vào giỏ hàng</small>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

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
<!-- Fruits Shop End-->


<!-- Featurs Start -->
<div class="container-fluid service py-3">
    <div class="container py-3">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <a href="#">
                    <div class="service-item bg-secondary rounded border border-secondary">
                        <img src="img/featur-1.jpg" class="img-fluid rounded-top w-100" alt="" height="450px">
                        <div class="px-4 rounded-bottom">
                            <div class="service-content bg-primary text-center p-2 rounded">
                                <h5 class="text-white"></h5>
                                <h3 class="mb-0 text-white">PHONG CÁCH</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#">
                    <div class="service-item bg-dark rounded border border-dark">
                        <img src="img/featur-2.jpg" class="img-fluid rounded-top w-100" alt="" height="450px">
                        <div class="px-4 rounded-bottom">
                            <div class="service-content bg-light text-center p-2 rounded">
                                <h5 class="text-primary"></h5>
                                <h3 class="mb-0">THỜI TRANG</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="#">
                    <div class="service-item bg-primary rounded border border-primary">
                        <img src="img/featur-3.jpg" class="img-fluid rounded-top w-100" alt="" height="450px">
                        <div class="px-4 rounded-bottom">
                            <div class="service-content bg-secondary text-center p-2 rounded">
                                <h5 class="text-white"></h5>
                                <h3 class="mb-0">SANG TRỌNG</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Featurs End -->


<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable py-3">
    <div class="container py-3">
        <h4 class="py-3 text-center">SẢN PHẨM BÁN CHẠY</h4>
        <div class="owl-carousel vegetable-carousel justify-content-center">
            @foreach ($productbest as $product)
                <div class=" border-primary rounded position-relative vesitable-item">



                    <div class="rounded position-relative fruite-item">
                        <div class="fruite-img">
                            <img src="{{$product->img}}" class="img-fluid w-100 rounded-top w-100" alt="" height="320px">
                        </div>
                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                            style="top: 10px; left: 10px;">- {{$product->discount_percent}}%</div>
                        <div class=" border border-secondary border-top-0 rounded-bottom">
                            <div class="p-3 text-center">
                                <a class="d-block h6 mb-2" href="" style="height: 35px;"> {{$product->name}}</a>
                                <span class="text-primary me-1">
                                    {{ number_format(($product->price - ($product->price * $product->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                    VND
                                </span>
                                <span class="text-body text-decoration-line-through">
                                    {{ number_format($product->price * 1000, 0, ',', '.') }} VND
                                </span>
                            </div>
                            <div class="text-center w-100 bg-primary border border-secondary border-top-0 rounded-bottom">
                                <form action="{{ route('cart.add') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="img" value="{{ $product->img }}">
                                    <!-- Hoặc bạn có thể thêm input để người dùng nhập số lượng -->

                                    <!-- Nếu sản phẩm có kích cỡ, thêm input cho size -->
                                    @if(isset($product->sizes))
                                        <select name="size">
                                            @foreach($product->sizes as $size)
                                                <option value="{{ $size }}">{{ $size }}</option>
                                            @endforeach
                                        </select>
                                    @endif

                                    <button type="submit" class="btn btn-primary m-1 text-white">
                                        <small><i class="fa fa-shopping-bag text-white me-2"></i>Thêm vào giỏ hàng</small>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach





        </div>


    </div>
</div>
<!-- Vesitable Shop End -->


<!-- Banner Section Start-->
<div class="container-fluid banner bg-secondary my-3">
    <div class="container py-3">
        <div class="row g-4 align-items-center">

            <div class="fruite-img">
                <img src="img/baner-2.png" class="img-fluid w-100 rounded-top w-100" alt="" height="500px">
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->


<!-- Bestsaler Product Start -->
<div class="container-fluid py-3">
    <div class="container py-3">
        <div class="text-center mx-auto mb-5">
            <h4 class="py-3">SẢN PHẨM NHIỀU LƯỢT XEM</h4>


            <div class="row g-4">
                @foreach ($productview as $product)


                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="{{$product->img}}" class="img-fluid w-100 " alt="" height="160px">
                                </div>

                                <div class="col-6 ps-2">
                                    <a href="#" class="h6">{{$product->name}}</a>
                                    <div class="d-flex my-2 ps-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h6 class="mb-3"> {{ number_format(($product->price) * 1000, 0, ',', '.') }}</h6>


                                   
                                    <div>
                                        <form action="{{ route('cart.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="img" value="{{ $product->img }}">
                                            <!-- Hoặc bạn có thể thêm input để người dùng nhập số lượng -->

                                            <!-- Nếu sản phẩm có kích cỡ, thêm input cho size -->
                                            @if(isset($product->sizes))
                                                <select name="size">
                                                    @foreach($product->sizes as $size)
                                                        <option value="{{ $size }}">{{ $size }}</option>
                                                    @endforeach
                                                </select>
                                            @endif

                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary">
                                                <small><i class="fa fa-shopping-bag me-2 text-primary"></i>Mua
                                                    hàng ngay</small>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach









            </div>


        </div>


    </div>
    <!-- Bestsaler Product End -->



    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-3">
        <div class="container py-3">
            <div class="testimonial-header text-center">

                <h4>TIN TỨC</h4>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">

                        <div class=" border-bottom border-secondary">
                            <strong>
                                <p class="text-dark m-0">Cách làm sạch áo phao lông vũ không cần giặt</p>
                            </strong>
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap m-1">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded w-100"
                                    style="width: 200px; height: 100px;" alt="">
                            </div>
                            <div class="ms-2 d-block">
                                <p class="mb-0">Không khí lạnh đã tràn về và nhiệt độ giảm mạnh, đã đến lúc phải mang áo
                                    phao trong tủ ra mặc...</p>

                                <p class="m-0 pb-3">Nguyên</p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">

                        <div class=" border-bottom border-secondary">
                            <strong>
                                <p class="text-dark m-0">Dịch vụ 'tái sinh' quần áo cũ</p>
                            </strong>
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap m-1">
                            <div class="bg-secondary rounded">
                                <img src="img/tt2.jpg" class="img-fluid rounded w-100"
                                    style="width: 200px; height: 100px;" alt="">
                            </div>
                            <div class="ms-2 d-block">
                                <p class="mb-0">Không khí lạnh đã tràn về và nhiệt độ giảm mạnh, đã đến lúc phải mang áo
                                    phao trong tủ ra mặc...</p>

                                <p class="m-0 pb-3">Nguyên</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">

                        <div class=" border-bottom border-secondary">
                            <strong>
                                <p class="text-dark m-0">8 loại quần áo không nên giặt máy</p>
                            </strong>
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap m-1">
                            <div class="bg-secondary rounded">
                                <img src="img/tt3.jpg" class="img-fluid rounded w-100"
                                    style="width: 200px; height: 100px;" alt="">
                            </div>
                            <div class="ms-2 d-block">
                                <p class="mb-0">Có những loại trang phục không thích hợp dùng máy giặt mà nên giặt tay
                                    hoặc gửi đến cửa hàng giặt là. ...</p>

                                <p class="m-0 pb-3">Nguyên</p>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Tastimonial End -->
</div>
@endsection