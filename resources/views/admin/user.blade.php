@extends('admin.layout')
@section('title', 'Quản lý tài khoản')
@section('content')
<div class="container-fluid">




    <div class="row m-2">
        <div class="col-lg-8">
            <!-- Topbar Search -->
            <form action="{{route('admin.user')}}" method="GET" enctype="multipart/form-data"
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

        <div class="col-lg-4 d-flex justify-content-end">
            <h6 class=""><a href="/admin/user/adduser" class="btn btn-danger ms-auto">Thêm tài khoản</a></h6>
        </div>
    </div>
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">

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
                                    <th>Email
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
                                        <td>{{$user->email}}</td>
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
                            {{ $users->appends(['keyword' => $keyword])->links('pagination::default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>





@endsection