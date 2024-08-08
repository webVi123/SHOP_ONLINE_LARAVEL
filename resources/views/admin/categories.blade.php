@extends('admin.layout')
@section('title', 'Quản lý danh mục')
@section('content')
<div class="container-fluid">




    <div class="row m-2">
        <div class="col-lg-8">
            <!-- Topbar Search -->
            <form action="{{route('admin.categories')}}" method="GET" enctype="multipart/form-data"
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
            <h6 class=""><a href="/admin/addcategories" class="btn btn-danger ms-auto">Thêm danh mục</a></h6>
        </div>
    </div>

    <div class="row d-none d-sm-inline-block form-inline mr-auto ml-md-3  my-md-0 w-50 navbar-search">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

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
                                    <th>Tên danh mục
                                    </th>

                                    <th>Thao tác
                                    </th>



                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $cate)


                                    <tr>

                                        <td>
                                            {{$cate->name}}
                                        </td>



                                        <td class="product-actions">
                                            <a href="{{ route('admin.udcategories', ['id' => $cate->id]) }}"><i
                                                    class="fas fa-edit btn btn-warning text-white"
                                                    style="color: #ff0000;"></i></a>
                                            <form action="{{ route('admin.categories.destroy', $cate->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit " class="btn delete-button"><i
                                                        class="fas fa-trash-alt btn btn-danger text-white"
                                                        style="color: #FFD43B;"></i></button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>

                        </table>
                        <div class="col-12">
                            <div class="pagination d-flex justify-content-center mt-5">
                                {{ $categories->appends(['keyword' => $keyword])->links('pagination::default') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
@endsection