@extends ('layout')
@section('title', 'Sản phẩm chi tiết')

@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Sản phẩm chi tiết</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Sản phẩm chi tiết</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Single Product Start -->
<div class="container-fluid py-3 mt-5">
    <div class="container py-3">
        <div class="row g-4 mb-5">
            <div class="col-lg-8 col-xl-9">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="border rounded">
                            <a href="#">
                                <img src="{{ asset($product->img) }}" class="img-fluid rounded" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4 class="fw-bold mb-3">{{ $product->name }}</h4>
                        <p class="mb-3">Danh mục:{{ $product->category->name }}</p>
                        <div class="mb-3">
                            <span class="text-primary fw-bold mb-3">
                                {{ number_format(($product->price - ($product->price * $product->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                VND
                            </span>
                            <span class="text-body text-decoration-line-through mb-3">
                                {{ number_format($product->price * 1000, 0, ',', '.') }} VND
                            </span>
                        </div>
                        <div class="d-flex mb-4">
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star text-secondary"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="mb-4">{{ $product->description }}</p>
                        <!-- <p class="mb-4">ổ yếm thường được làm từ vải độn hoặc ren để tạo ra hiệu ứng cổ điển và sang
                            trọng</p> -->
                        <div class="input-group quantity mb-5" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm text-center border-0" value="1">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <button class="btn border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i
                                class="fa fa-shopping-bag me-2 text-primary"><a href="#"></i>Đặt hàng</a></button>
                        <button class="btn border border-secondary rounded-pill px-4 py-2 mb-4"><i
                                class="far fa-heart me-2 text-secondary"><a href="#" class=" text-secondary"></i>Thêm
                            vào yêu thích</a></button>
                    </div>
                    <div class="col-lg-12">
                        <nav>
                            <div class="nav nav-tabs mb-3">
                                <button class="nav-link active border-white border-bottom-0" type="button" role="tab"
                                    id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                    aria-controls="nav-about" aria-selected="true">Mô tả</button>
                                <button class="nav-link border-white border-bottom-0" type="button" role="tab"
                                    id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                    aria-controls="nav-mission" aria-selected="false">Đánh giá</button>
                            </div>
                        </nav>
                        <div class="tab-content mb-5">
                            <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <p>{{ $product->description }}</p>
                                <p>{{ $product->description }}</p>
                                <div class="px-2">
                                    <div class="row g-4">
                                        <div class="col-6">
                                            <div
                                                class="row bg-light align-items-center text-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">XS</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">
                                                        <=40kg< /p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">S</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">40-45kg</p>
                                                </div>
                                            </div>
                                            <div
                                                class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">M</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">45-50kg</p>
                                                </div>
                                            </div>
                                            <div class="row text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">L</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">50-55kg</p>
                                                </div>
                                            </div>
                                            <div
                                                class="row bg-light text-center align-items-center justify-content-center py-2">
                                                <div class="col-6">
                                                    <p class="mb-0">XL</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">>=55kg</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                        style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Jason Smith</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p>Sản phẩm đẹp </p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img src="img/avatar.jpg" class="img-fluid rounded-circle p-3"
                                        style="width: 100px; height: 100px;" alt="">
                                    <div class="">
                                        <p class="mb-2" style="font-size: 14px;">April 12, 2024</p>
                                        <div class="d-flex justify-content-between">
                                            <h5>Sam Peters</h5>
                                            <div class="d-flex mb-3">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="text-dark">Váy xinh </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="nav-vision" role="tabpanel">
                                <p class="text-dark">Tôi thích thiết kế này</p>
                                <p class="mb-0">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                    Clita erat ipsum et lorem et sit</p>
                            </div>
                        </div>
                    </div>
                    <form action="#">
                        <h4 class="mb-5 fw-bold">Bình luận</h4>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="text" class="form-control border-0 me-4"
                                        placeholder="Họ tên của bạn *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="border-bottom rounded">
                                    <input type="email" class="form-control border-0" placeholder="Email của bạn *">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="border-bottom rounded my-4">
                                    <textarea name="" id="" class="form-control border-0" cols="30" rows="5"
                                        placeholder="Nội dung bình luận *" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between py-3 mb-5">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 me-3">Đánh giá:</p>
                                        <div class="d-flex align-items-center" style="font-size: 12px;">
                                            <i class="fa fa-star text-muted"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="btn border border-secondary text-primary rounded-pill px-4 py-3">
                                        Gửi</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>







            <div class="col-lg-4 col-xl-3">
                <div class="row g-4 fruite">
                    <div class="col-lg-12">
                        <div class="input-group w-100 mx-auto d-flex mb-4">
                            <input type="search" class="form-control p-3" placeholder="Tìm kiếm..."
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                        <div class="mb-4">
                            <h4>Danh mục</h4>

                            <ul class="list-unstyled fruite-categorie">
                                @foreach ($categories as $cate)


                                    <li>
                                        <div class="d-flex justify-content-between fruite-name">
                                            <a href="{{ route('category', ['category_id' => $cate->id]) }}"><i
                                                    class="fas fa-apple-alt me-2"></i>{{$cate->name}}</a>
                                            <span> {{$cate->products_count}}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </div>




                    <div class="col-lg-12">
                        <h4 class="mb-3">Sản phẩm nổi bật</h4>
                        @foreach ($productbest as $product)

                            <div class="d-flex align-items-center justify-content-start" style="height: 120px;">
                                <div class="rounded me-4" style="">
                                    <img src="{{asset($product->img)}}" class=" rounded" alt="" height="100" width="100">
                                </div>
                                <div>
                                    <h6 class="mb-2">{{$product->name}}</h6>
                                    <div class="d-flex mb-2">
                                        <i class="fa fa-star text-secondary"></i>
                                        <i class="fa fa-star text-secondary"></i>
                                        <i class="fa fa-star text-secondary"></i>
                                        <i class="fa fa-star text-secondary"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <h5 class="fw-bold me-2">
                                            {{ number_format(($product->price - ($product->price * $product->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                        </h5>
                                        <h5 class="text-danger text-decoration-line-through">
                                            {{ number_format($product->price * 1000, 0, ',', '.') }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>






            <div class="container-fluid vesitable py-3">
                <div class="container py-3">
                    <h4 class="py-3 text-center">SẢN PHẨM LIÊN QUAN</h4>
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach($related as $product)
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="{{asset($product->img)}}" class="img-fluid  rounded-top w-100"
                                                    alt="" height="320px">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                                style="top: 10px; left: 10px;">- {{$product->discount_percent}}%</div>
                                            <div class=" border border-secondary border-top-0 rounded-bottom text-center">
                                                <div class="p-3">
                                                    <!-- <a class="d-block h5 mb-2" href="prodetail/{id}">{{$product->name}}</a> -->
                                                    <a class="d-block h6 mb-2"
                                                        href="{{ route('prodetail', ['id' => $product->id]) }}"
                                                        style="height: 35px;">
                                                        {{ $product->name }}
                                                    </a>
                                                    <span class="text-primary mb-3">
                                                        {{ number_format(($product->price - ($product->price * $product->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                                        VND
                                                    </span>
                                                    <span class="text-body text-decoration-line-through mb-3">
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
                                                            <small><i class="fa fa-shopping-bag text-white me-2"></i>Mua
                                                                hàng ngay</small>
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
<!-- Single Product End -->



@endsection