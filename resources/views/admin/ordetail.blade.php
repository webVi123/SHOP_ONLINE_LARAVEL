@extends('admin.layout')
@section('title', 'Chi tiết đơn hàng')
@section('content')



<div class="row m-2">
    <div class="col-lg-8">

    </div>


    <div class="col-lg-4 d-flex justify-content-end">
        <div class="text-end mb-3">
            <a href="{{ route('dowload', ['id' => $id_order]) }}" class="btn btn-primary text-white">Tải về PDF</a>
        </div>
    </div>
</div>
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
                                    <th class="center">Mã ĐH</th>
                                    <th class="center">Mã SP</th>
                                    <th class="center">Tên SP</th>
                                    <th class="center">Giá</th>
                                    <th class="center">Hình</th>
                                    <th class="center">Số lượng</th>
                                    <th class="center">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody class="center">


                                @foreach ($cartItems as $orders)




                                    <tr>

                                        <td>FS{{$orders->id}}
                                        </td>
                                        <td>FS{{$orders->id_product}}
                                        </td>
                                        <td>
                                            {{$orders->name}}
                                        </td>
                                        <td>
                                        {{ number_format($orders->price*1000, 0, ',', '.') }}
                                        </td>
                                        <td>
                                            <img src="{{ asset($orders->image) }}" width="100px">
                                        </td>
                                        <td>
                                            {{$orders->quantity}}
                                        </td>
                                        <td>
                                        {{ number_format($orders->total*1000, 0, ',', '.') }}
                                        </td>


                                    </tr>





                                @endforeach









                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
@endsection