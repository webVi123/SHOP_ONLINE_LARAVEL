@extends('admin.layout')
@section('title', 'Thêm danh mục')
@section('content')

<div class="container-fluid">



    <div class="row">

        <!-- Area Chart -->

        <div class="row-cols-rc">
            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="post" action="{{route('admin.addcategory')}}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label class="m-1"> <i class="fas fa-user"></i> Tên danh mục</label>
                            <input type="text" placeholder="Nhập tên sản phẩm" name="name" class="form-control">

                        </div>

                        <input type="hidden" name="hinh" id="hdd" value="" placeholder="Hình ảnh">

                        <div><input type="submit" value="Thêm" class="btn btn-danger m-2"></div>

                    </form>

                </div>
            </div>
        </div>



        <div class="col-8">



            <div class="card shadow mb-4">

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
                                                <form action="{{ route('admin.categories.destroy', $cate->id) }}"
                                                    method="POST" class="delete-form">
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
                                    {{ $categories->links('pagination::default') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>

    </div>
    @endsection