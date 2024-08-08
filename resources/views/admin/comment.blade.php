@extends('admin.layout')
@section('title', 'Quản lý bình luận')
@section('content')
<div class="container-fluid">




    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <!-- <h6 class="m-0 font-weight-bold text-primary"><a href="/themtkhoan">Thêm tài khoản</a></h6> -->

            </div>
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="chart-area">
                        <table class="table">
                            <thead>

                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số bình luận</th>
                                    <th>Ngày mới nhất</th>
                                    <th>Ngày cũ nhất</th>
                                    <th>Chức năng</th>
                                </tr>

                            </thead>
                            <tbody>

                                <tr>

                                    <td>1
                                    </td>
                                    <td>
                                        Áo thun nữ
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                        10/04/2024
                                    </td>


                                    <td><a href="/commentdetail"><i class="far fa-eye" style="color:#FFD43B;"></i></a>
                                    </td>
                                </tr>


                                <tr>

                                    <td>2
                                    </td>
                                    <td>
                                        Áo thun nữ
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                        10/04/2024
                                    </td>


                                    <td><a href="/commentdetail"><i class="far fa-eye" style="color:#FFD43B;"></i></a>
                                    </td>
                                </tr>


                                <tr>

                                    <td>3
                                    </td>
                                    <td>
                                        Áo thun nữ
                                    </td>
                                    <td>
                                        4
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                        10/04/2024
                                    </td>


                                    <td><a href="/commentdetail"><i class="far fa-eye" style="color:#FFD43B;"></i></a>
                                    </td>
                                </tr>









                            </tbody>

                        </table>


                    </div>


                </div>






            </div>

        </div>

    </div>
@endsection
