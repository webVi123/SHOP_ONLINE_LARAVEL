@extends('admin.layout')
@section('title', 'Đơn hàng')
@section('content')



<div class="container-fluid">
    <div class="row m-2">
        <div class="col-lg-8">
            <!-- Topbar Search -->
            <form action="{{route('admin.order')}}" method="GET" enctype="multipart/form-data"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3  my-md-0 w-100 navbar-search">
                <div class="input-group">
                    <input type="type" class="form-control bg-white border-1 small" name="keyword"
                        placeholder="Tìm kiếm tại đây..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>


    </div>







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
                                <tr class="center">
                                    <th>Mã ĐH
                                    </th>
                                    <th>Tên KH
                                    </th>
                                    <th>Ngày đặt
                                    </th>
                                    <th>Địa chỉ
                                    </th>
                                    <th>Số ĐT
                                    </th>
                                    <th>Thành tiền
                                    </th>
                                    <th>Thanh toán
                                    </th>
                                    <th>Xem
                                    </th>
                                    <th>Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $o)


                                    <tr class="center">

                                        <td>FS{{$o->id}}
                                        </td>
                                        <td>
                                            {{$o->customer_name}}
                                        </td>
                                        <td>
                                            {{$o->created_at}}
                                        </td>
                                        <td>
                                            {{$o->customer_address}}
                                        </td>
                                        <td>
                                            {{$o->customer_phone}}
                                        </td>
                                        <td>
                                        {{ number_format($o->total_amount*1000, 0, ',', '.') }}
                                        </td>
                                        @if($o->payment_method == 0)
                                            <td>
                                                <i class="fas fa-times" style="color: #ff0000;"></i> Chưa thanh toán
                                            </td>
                                        @else
                                            <td>
                                                <i class="far fa-check-circle" style="color: #2fac0c;"></i> Đã chuyển khoản
                                            </td>
                                        @endif


                                        <td class="product-actions">
                                            <form action="{{ route('admin.ordetail', ['id' => $o->id]) }}"
                                                class="delete-form">

                                                <button type="submit " class="btn delete-button"><i class="far fa-eye  "
                                                        style="color: #FFD43B;"></i></button>
                                            </form>
                                        </td>


                                        <td>
                                            <form action="{{ route('update.order.status', $o->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                <select name="newStatus" class="form-control form-select-sm"
                                                    onchange="this.form.submit()">
                                                    <option value="0" {{ $o->status == 0 ? 'selected' : '' }}>Trạng thái đơn
                                                        hàng</option>
                                                    <option value="1" {{ $o->status == 1 ? 'selected' : '' }}>Đang chuẩn bị
                                                        hàng</option>
                                                    <option value="2" {{ $o->status == 2 ? 'selected' : '' }}>Đang giao hàng
                                                    </option>
                                                    <option value="3" {{ $o->status == 3 ? 'selected' : '' }}>Giao hàng thành
                                                        công</option>
                                                    <option value="4" {{ $o->status == 4 ? 'selected' : '' }}>Hủy hàng
                                                    </option>
                                                </select>
                                            </form>

                                            <!-- @if($o->status == 3)
                                                <span class="btn btn-success btn-sm"><i class="fas fa-check"></i> Giao hàng
                                                    thành công</span>
                                            @elseif($o->status == 4)
                                                <span class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Đã hủy</span>
                                            @endif -->
                                        </td>




                                    </tr>



                                @endforeach

                            </tbody>

                        </table>

                        <div class="col-12">
                            {{ $order->appends(['keyword' => $keyword])->links('pagination::default') }}
                        </div>


                    </div>


                </div>






            </div>

        </div>

    </div>
</div>
@endsection