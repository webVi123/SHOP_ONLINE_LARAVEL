@extends('admin.layout')
@section('title', 'Thêm tài khoản')
@section('content')

<div class="container-fluid">



    <div class="row">

        <div class="row-cols-rc">

            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="post" action="{{route('admin.addus')}}" enctype="multipart/form-data">
                        @csrf
                        <div>

                            <label class="m-1"><i class="fas fa-user"></i> Họ và tên</label>
                            <input type="text" placeholder="Nhập họ tên" name="name" class="form-control">
                        </div>
                        <div>
                            <label class="m-1"><i class="fas fa-phone"></i>Email</label>
                            <input type="email" placeholder="Nhập email" name="email" class="form-control">
                            <label class="m-1"><i class="fas fa-lock"></i> Password</label>
                            <input type="text" placeholder="Nhập mật khẩu" name="password" class="form-control">
                        </div>
                        <div>
                            <label class="m-1"><i class="fas fa-home"></i>Địa chỉ</label>
                            <input type="text" placeholder="Nhập địa chỉ" name="address" class="form-control">
                            <label class="m-1"><i class="fas fa-phone"></i> Số điện thoại</label>
                            <input type="number" placeholder="Nhập số điện thoại" name="phone" class="form-control">
                        </div>
                        <div>
                            <label class="m-1"><i class="fas fa-home"></i>Hình ảnh</label>
                            <input type="file" name="img" class="form-control">
                          
                        </div>
                        <div>
                            <!-- <label class="m-1"><i class="fas fa-images"></i> Hình ảnh</label>
                            <input type="file" name="hdd"> -->
                            <label class="m-1"><i class="fas fa-user-tag"></i> Vai trò</label>
                            <select name="role" id="" class="form-control">
                                
                                <option value="0">Khách hàng</option>
                                <option value="1">Admin</option>
                            </select>

                        </div>
                        <input type="hidden" name="hdd" id="hdd" value="" placeholder="Hình ảnh">
                        <div><input type="submit" value="Thêm" class="btn btn-danger  mt-2"></div>

                    </form>

                </div>
            </div>
        </div>
        <div class="col-8">

            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="chart-area">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Mã KH
                                    </th>

                                    <th>Họ tên
                                    </th>

                                    <th>Địa chỉ
                                    </th>
                                    <th>Trạng thái
                                    </th>
                                    <th>Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)


                                    <tr>

                                        <td>TZ{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->address}} </td>
                                        @if ($user->status == 0)



                                            <td> <i class="fas fa-circle fa-xs" style="color: #00ff11;"></i> Đang hoạt động
                                            </td>

                                        @else
                                            <td> <i class="fas fa-key fa-xs" style="color: #ff0000;"></i> Khóa tài khoản
                                            </td>

                                        @endif

                                        <td class="product-actions">
                                            <a
                                                href="{{ route('admin.updateuser', ['id' => $user->id]) }}"><i
                                                    class="fas fa-edit btn btn-warning text-white" style="color: #ff0000;"></i>
                                            </a>
                                           
                                            <form action="{{ route('user.toggle-status', $user->id) }}" method="POST"
                                                style="display:inline;"  class="delete-form">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-{{ $user->status == 1 ? 'success' : 'danger' }}">
                                                    <i class="fas fa-{{ $user->status == 1 ? 'unlock' : 'lock' }}"></i>
                                                    
                                                </button>
                                            </form>
                                        </td>






                                    </tr>

                                @endforeach
                            </tbody>

                        </table>
                        <div class="col-12">
                            <div class="pagination d-flex justify-content-center mt-5">
                                {{ $users->links('pagination::default') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>
    @endsection