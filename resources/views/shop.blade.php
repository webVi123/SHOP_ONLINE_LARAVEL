@extends ('layout')
@section('title', 'Trang Sản Phẩm')
@section('content')
<!-- Single Page Header start -->
<div class="container-fluid page-header py-3">
    <h1 class="text-center text-white display-6">Sản phẩm</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
        <li class="breadcrumb-item active text-white">Sản phẩm</li>
    </ol>
</div>
<!-- Single Page Header End -->


<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-3">
    <div class="container py-3">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="Tìm kiếm"
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <h4> {{$title}}</h4>
                    </div>
                    <div class="col-xl-3">
              

                            <form id="fruitform" action="{{ route('shop') }}" method="GET" class="form">
                                <div class="d-flex justify-content-end mb-3">
                                    <select id="fruits" name="sort_by" class="border-0 form-control bg-light me-3"
                                        onchange="this.form.submit()">
                                        <option value="">Sắp xếp</option>
                                        <option value="price_asc" {{ request()->input('sort_by') == 'price_asc' ? 'selected' : '' }}>Tăng dần giá</option>
                                        <option value="price_desc" {{ request()->input('sort_by') == 'price_desc' ? 'selected' : '' }}>Giảm dần giá</option>
                                        <option value="name_asc" {{ request()->input('sort_by') == 'name_asc' ? 'selected' : '' }}>Tên A-Z</option>
                                        <option value="name_desc" {{ request()->input('sort_by') == 'name_desc' ? 'selected' : '' }}>Tên Z-A</option>
                                    </select>

                                </div>
                            </form>
                     
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
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

                                <div class="d-flex justify-content-center my-4">
                                    <a href="#"
                                        class="btn border border-secondary px-4 py-3 mt-3 rounded-pill text-primary w-100">Xem
                                        thêm</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9">

                        <div class="row g-4 justify-content-center">
                            @foreach ($products as $pbyc)


                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="{{asset($pbyc->img)}}" class="img-fluid w-100 rounded-top" alt=""
                                                height="320px">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">- {{ $pbyc->discount_percent}}%</div>
                                        <div class=" border border-secondary border-top-0 rounded-bottom">
                                            <div class="p-3 text-center">
                                                <a class="d-block h6 mb-2"
                                                    href="{{ route('prodetail', ['id' => $pbyc->id]) }}"
                                                    style="height: 35px;">
                                                    {{$pbyc->name}}</a>
                                                <span class="text-primary me-1">
                                                    {{ number_format(($pbyc->price - ($pbyc->price * $pbyc->discount_percent / 100)) * 1000, 0, ',', '.') }}
                                                    VND
                                                </span>
                                                <span class="text-body text-decoration-line-through">
                                                    {{ number_format($pbyc->price * 1000, 0, ',', '.') }} VND
                                                </span>
                                            </div>
                                            <div
                                                class="text-center w-100 bg-primary border border-secondary border-top-0 rounded-bottom">
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $pbyc->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <input type="hidden" name="img" value="{{ $pbyc->img }}">
                                                    <!-- Hoặc bạn có thể thêm input để người dùng nhập số lượng -->

                                                    <!-- Nếu sản phẩm có kích cỡ, thêm input cho size -->
                                                    @if(isset($pbyc->sizes))
                                                        <select name="size">
                                                            @foreach($pbyc->sizes as $size)
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



















                            <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">

                                    {{ $products->appends(['keyword' => $keyword])->links('pagination::default') }}

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