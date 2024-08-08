@extends('admin.layout')
@section('title', 'Bình luận chi tiết')
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
                                    <th>Nội dung bình luận</th>
                                    <th>Ngày bình luận</th>
                                    <th>Tên người dùng</th>
                                    <th>Email</th>
                                    <th>Chức năng</th>
                                </tr>

                            </thead>
                            <tbody>

                                <tr>

                                    <td>01
                                    </td>
                                    <td>
                                        Áo thun nữ
                                    </td>
                                    <td>
                                        Áo đẹp quá ạ
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                       Nguyễn Văn A
                                    </td>
                                    <td>
                                       vana@gmail.com
                                    </td>


                                    <td><a href="/commentdetail"><i class="fas fa-trash-alt" style="color: #fa3605;"></i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td>02
                                    </td>
                                    <td>
                                        Áo thun nữ
                                    </td>
                                    <td>
                                        Áo đẹp quá ạ
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                       Nguyễn Văn A
                                    </td>
                                    <td>
                                       vana@gmail.com
                                    </td>


                                    <td><a href="/commentdetail"><i class="fas fa-trash-alt" style="color: #fa3605;"></i></a>
                                    </td>
                                </tr>


                                <tr>

                                    <td>03
                                    </td>
                                    <td>
                                        Áo thun nam
                                    </td>
                                    <td>
                                        Tạm được
                                    </td>
                                    <td>
                                        10/05/2024
                                    </td>
                                    <td>
                                       Nguyễn Văn A
                                    </td>
                                    <td>
                                       vana@gmail.com
                                    </td>


                                    <td><a href=""><i class="fas fa-trash-alt" style="color: #fa3605;"></i></a>
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