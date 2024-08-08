@extends('admin.layout')
@section('title', 'Quản lí sản phẩm')
@section('content')
<div class="container-fluid">






    <div class="row m-2">
        <div class="col-lg-5">
            <!-- Topbar Search -->
            <form action="{{route('admin.products')}}" method="GET" enctype="multipart/form-data"
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

        <div class="col-lg-3">
            <!-- Topbar Search -->
            <form action="{{route('admin.products')}}" method="GET" enctype="multipart/form-data"
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3  my-md-0 w-100 navbar-search">
                <div class="input-group">


                    <form id="categoryForm" method="GET" action="{{ route('category.products') }}"> <label>Danh mục
                        </label>
                        <select class="form-control" id="categorySelect" name="category_id"
                            onchange="this.form.submit()">

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
            </form>
        </div>



        <div class="col-lg-4 d-flex justify-content-end">
            <h6 class=""><a href="/admin/addproducts" class="btn btn-danger ms-auto">Thêm sản phẩm</a></h6>
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
                                    <th>Tên sản phẩm
                                    </th>
                                    <th>Giá
                                    </th>
                                    <th>Giảm giá
                                    </th>
                                    <th>Hình ảnh
                                    </th>
                                    <th>Danh mục
                                    </th>

                                    <th>Thao tác
                                    </th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)


                                    <tr>

                                        <td>
                                            {{$product->name}}
                                        </td>
                                        <td>
                                            {{number_format($product->price, 0, '.', ',')}}
                                        </td>
                                        <td>
                                            {{number_format($product->price, 0, '.', ',')}}
                                        </td>
                                        <td>
                                            <img src="{{ asset($product->img) }}" width="100px" height="100px">
                                        </td>

                                        <td>
                                            {{$product->category->name}}

                                        </td>


                                        <td class="product-actions"><a
                                                href="{{ route('admin.udproducts', ['id' => $product->id]) }}"><i
                                                    class="fas fa-edit  btn btn-warning text-white"
                                                    style="color: #ff0000;"></i></a>
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit " class="btn delete-button"><i
                                                        class="fas fa-trash-alt  btn btn-danger text-white"
                                                        style="color: #FFD43B;"></i></button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach



                            </tbody>

                        </table>



                        <div class="col-12">
                            <div class="pagination d-flex justify-content-center mt-5">

                                {{ $products->appends(['keyword' => $keyword, 'category_id' => $category_id])->links('pagination::default') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



    </div>

</div>


@endsection