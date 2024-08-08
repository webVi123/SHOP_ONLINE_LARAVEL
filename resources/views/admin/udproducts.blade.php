@extends('admin.layout')
@section('title', 'Cập nhật sản phẩm')
@section('content')

<div class="container-fluid">





    <div class="row">

        <div class="row-cols-rc">


            <div class="card shadow mb-4">

                <div class="card-body">

                    <form method="POST" action="{{ route('admin.products.update', $product->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div>
                            <label class="m-1"><i class="fas fa-file-signature"></i> Tên </label>
                            <input type="text" placeholder="Nhập tên sản phẩm" name="name" id="name"
                                class="form-control" value="{{ $product->name }}">
                            <label class="m-1"><i class="fas fa-file-signature"></i> Mô tả</label>
                            <input type="text" placeholder="Nhập mô tả" id="description" name="description"
                                class="form-control" value="{{ $product->description }}">
                        </div>
                        <div>
                            <label class="m-1"><i class="fas fa-dollar-sign"></i>Giá</label>
                            <input type="text" placeholder="Nhập giá" name="price" id="price" class="form-control"
                                value="{{ $product->price }}">
                            <!-- <label class="m-1"><i class="fas fa-dollar-sign"></i>Giảm giá </label>
                            <input type="text" placeholder="Nhập giảm giá" name="giam_gia" class="form-control"> -->
                        </div>
                        <div>
                            <label class="m-1"><i class="fas fa-images"></i> Hình ảnh</label>
                            <input type="file" id="img" name="img">
                            <img src="{{ asset($product->img) }}" alt="Product Image" width="100px" height="100px"><br>
                            <label class="m-1"><i class="fas fa-window-maximize"></i> Danh mục</label>
                            <!-- <input type="text" placeholder="Nhập" name="iddm"> -->
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach

                            </select>

                        </div>
                        <!-- <input type="hidden" name="hinh" id="hdd" value="" placeholder="Hình ảnh"> -->

                        <div><input type="submit" value="Cập nhật" class="btn btn-danger  mt-2"></div>

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
                                                    class="fas fa-edit  btn btn-warning text-white" style="color: #ff0000;"></i></a>
                                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit " class="btn delete-button"><i
                                                        class="fas fa-trash-alt  btn btn-danger text-white" style="color: #FFD43B;"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach



                            </tbody>


                        </table>

                        <div class="col-12">
                            <div class="pagination d-flex justify-content-center mt-5">
                                {{ $products->links('pagination::default') }}
                            </div>
                        </div>






                    </div>
                </div>
            </div>
        </div>





    </div>

</div>

@endsection