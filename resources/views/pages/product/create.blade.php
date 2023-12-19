@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header text-center">Create Product</h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="name">Name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    name="name"
                                    placeholder="Enter product name"
                                    required />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="description">Description</label>
                                <input
                                    type="text"
                                    id="description"
                                    name="description"
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
                                    class="form-control"
                                    placeholder="Enter product quantity"
                                />
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Category</label>
                                <select id="select2Basic" name="category_id" class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Brand</label>
                                <select id="select2Basic" name="brand_id"  class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="form-label" for="image">Product Image</label>
                                <input type="file" class="form-control" id="image" name="image"  />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Product</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
