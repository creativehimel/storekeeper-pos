@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">Sale List
                    <a class="btn btn-primary" href="{{route('sales.create')}}">Create a Sale</a>
                </h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($sales as $sale)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{$sale->customer->name}}</span>
                                </td>
                                <td>{{$sale->product->name}}</td>

                                <td>
                                    {{$sale->quantity}}
                                </td>
                                <td>
                                    {{$sale->total_amount}}
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form action="{{route('sales.destroy', $sale->id)}}" method="post" class="dropdown-item">
                                                @csrf
                                                @method('DELETE')
                                                <i class="ti ti-trash me-1"></i>
                                                <input type="submit" value="Delete" class="border-0 bg-light">
                                            </form>
{{--                                            <a class="dropdown-item" href="{{route('brands.destroy', $brand->id)}}"--}}
{{--                                            ><i class="ti ti-trash me-1"></i> Delete</a--}}

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
