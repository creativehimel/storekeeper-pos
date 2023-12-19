@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header d-flex justify-content-between align-items-center">Update Product
                    <a href="{{route('products.index')}}" class="btn btn-warning">Back</a>
                </h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="name">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    value="{{$product->name}}"
                                    placeholder="Enter product name"
                                    required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="description">Description</label>
                                <input
                                    type="text"
                                    id="description"
                                    name="description"
                                    value="{{$product->description}}"
                                    class="form-control"
                                    placeholder="Enter product brand description"
                                />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="price">Price</label>
                                <input
                                    type="text"
                                    id="price"
                                    name="price"
                                    value="{{$product->price}}"
                                    class="form-control"
                                    placeholder="Enter product price"
                                />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="quantity">Quantity</label>
                                <input
                                    type="text"
                                    id="quantity"
                                    name="quantity"
                                    value="{{$product->quantity}}"
                                    class="form-control"
                                    placeholder="Enter product quantity"
                                />
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Category</label>
                                <select id="select2Basic" name="category_id" class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Brand</label>
                                <select id="select2Basic" name="brand_id"  class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}" {{$product->brand_id == $brand->id ? 'selected' : ''}}>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="status">Status</label>
                                <select class="form-select" name="status" id="status" required>
                                    <option value="0" {{$product->status == 0 ? 'selected' : ''}}>Inactive</option>
                                    <option value="1" {{$product->status == 1 ? 'selected' : ''}}>Active</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Brand</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
