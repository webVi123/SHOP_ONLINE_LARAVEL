<!-- Spinner Start -->
<div id="spinner"
    class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
<?php
$cart = session()->get('cart', []);
$totalQuantity = 0;
foreach ($cart as $item) {
    $totalQuantity += $item['quantity'];
}
?>
<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container-fluid topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#"
                        class="text-white">Tô Kí , Hồ Chí Minh</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#"
                        class="text-white">DiDi080504@gmail.com</a></small>
            </div>
            <div class="top-link pe-2">
                <small class="text-white">Follow us:</small>
                <a class="text-white ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-twitter"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="text-white ms-3" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.html" class="navbar-brand"><img src="{{ asset('img/logo12.png') }}" width="110px"></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link active">Trang Chủ</a>
                    <a href="/shop" class="nav-item nav-link">Sản Phẩm</a>
                    <a href="/blog" class="nav-item nav-link">Tin tức</a>
                    <a href="/contact" class="nav-item nav-link">Liên Hệ</a>


                </div>
                <div class="d-flex m-3 me-0">
                    <form action="/shop/search" method="GET" class="formsearch me-4">
                        <input type="text" name="keyword" placeholder="Nhập từ khóa tìm kiếm">
                        <button type="submit"><i class="fas fa-search text-primary "></i></button></button>
                    </form>
                    <!-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                        data-bs-toggle="modal" data-bs-target="#searchModal"><i
                            class="fas fa-search text-primary"></i></button> -->




                    <div class="nav-item dropdown position-relative me-2 my-auto">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            @auth
                                <span class=" d-flex align-items-center justify-content-center text-dark px-1">
                                    Xin chào, {{ Auth::user()->name }} <img src="{{asset(Auth::user()->img)}}" width="30px"
                                        height="30px" class="rounded-circle ms-1">
                                </span>

                            @else
                                <i class="fa fa-user fa-2x text-primary"></i>
                            @endauth
                        </a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            @guest
                                <a href="{{ route('login') }}" class="dropdown-item">Đăng nhập</a>
                                <a href="{{ route('register') }}" class="dropdown-item">Đăng ký</a>
                            @endguest
                            @auth
                                <a href="{{ route('account.form') }}" class="dropdown-item">Cập nhật tài khoản</a>
                                <a href="{{ route('orderhistory') }}" class="dropdown-item">Lịch sử đơn hàng</a>
                                <a href="{{ route('wishlist') }}" class="dropdown-item">Danh sách yêu thích</a>
                                <a href="{{ route('logout') }}" class="dropdown-item">Đăng xuất</a>
                            @endauth
                        </div>
                    </div>
                    <!-- <a href="/wishlist" class=" position-relative me-4 my-auto">
                        <i class="fas fa-heart fa-2x"></i>
                        <span
                            class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                            style="top: -5px; left: 20px; height: 20px; min-width: 20px;">5</span>
                    </a> -->
                    <a href="/cart" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span
                            class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                            style="top: -5px; left: 15px; height: 20px; min-width: 20px;">{{ $totalQuantity }}</span>
                    </a>




                    <!-- <a href="#" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a> -->
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->




<!-- Modal Search Start -->
<!-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
              
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="Tìm kiếm tại đây"
                        aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal Search End -->