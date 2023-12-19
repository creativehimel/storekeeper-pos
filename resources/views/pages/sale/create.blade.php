@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header text-center">Create Sale</h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('sales.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Customer</label>
                                <select id="select2Basic" name="customer_id" class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="select2Basic" class="form-label">Select Product</label>
                                <select id="select2Basic" name="product_id" class="select2 form-select form-select-md" data-allow-clear="true">
                                    @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                    @endforeach
                                </select>
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
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Brand</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
