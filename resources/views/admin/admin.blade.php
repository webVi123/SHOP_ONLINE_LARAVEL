@extends('admin.layout')
@section('title', 'Trang quản trị website')
@section('content')

<div class="container-fluid">

    <!-- <h2 class="p-2">TỔNG QUAN</h2> -->
    <div class="container p-3">
        <div class="row">
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(243, 184, 76); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">20</h3>
                    <p class="card-text p-2  text-dark">Sản phẩm
                    </p>
                    <div class="text-center">
                        <a href="productad.html" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(132, 225, 132); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">4</h3>
                    <p class="card-text p-2 text-dark">Danh mục
                    </p>
                    <div class="text-center">
                        <a href="categoryad.html" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(127, 127, 237); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">2</h3>
                    <p class="card-text p-2 text-dark">Nhân viên
                    </p>
                    <div class="text-center">
                        <a href="userad.html" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(110, 199, 240); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">2</h3>
                    <p class="card-text p-2 text-dark">Khách hàng
                    </p>
                    <div class="text-center">
                        <a href="member.html" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(118, 118, 232); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">4</h3>
                    <p class="card-text p-2 text-dark">Đơn hàng chưa xử lý
                    </p>
                    <div class="text-center">
                        <a href="card.html" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(213, 118, 232); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">2</h3>
                    <p class="card-text p-2 text-dark">Đơn hàng đã xử lý
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-4 p-2">
                <div class="card-body" style="background-color: rgb(239, 111, 162); border-radius: 10px;">
                    <h3 class="card-title p-2 text-dark">0</h3>
                    <p class="card-text p-2 text-dark">Liên hệ gần đây
                    </p>
                    <div class="text-center">
                        <a href="#" class="text-decoration-none text-light"><i
                                class="fa-solid fa-circle-arrow-right"></i> Xem chi
                            tiết</a>
                    </div>
                </div>
            </div> -->

        </div>
    </div>





</div>

@endsection