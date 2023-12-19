@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">Product List
                    <a class="btn btn-primary" href="{{route('products.create')}}">Create a Product</a>
                </h5>
                <div class="table-responsive text-nowrap mb-3">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{$product->name}}</span>
                                </td>
                                <td>
                                    <img src="{{asset('images/products/'.$product->image)}}" alt="" width="50">
                                </td>
                                <td>{{$product->price}} TK</td>
                                <td>{{$product->quantity}}</td>
                                <td>
                                    @if($product->status)
                                        <span class="badge bg-label-primary me-1">Active</span>
                                    @else
                                        <span class="badge bg-label-warning me-1">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('products.edit', $product->id)}}"
                                            ><i class="ti ti-pencil me-1"></i> Edit</a
                                            >
                                            <form action="{{route('products.destroy', $product->id)}}" method="post" class="dropdown-item">
                                                @csrf
                                                @method('DELETE')
                                                <i class="ti ti-trash me-1"></i>
                                                <input type="submit" value="Delete" class="border-0 bg-light">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection()
