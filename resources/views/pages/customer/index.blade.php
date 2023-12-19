@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">Customer List
                    <a class="btn btn-primary" href="{{route('customers.create')}}">Create a Customer</a>
                </h5>
                <div class="table-responsive text-nowrap mb-2">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($customers as $customer)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{$customer->name}}</span>
                                </td>
                                <td>{{$customer->phone}}</td>
                                <td>
                                    {{$customer->address}}
                                </td>
                                <td>
                                    @if($customer->status)
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
                                            <a class="dropdown-item" href="{{route('customers.edit', $customer->id)}}"
                                            ><i class="ti ti-pencil me-1"></i> Edit</a
                                            >
                                            <form action="{{route('customers.destroy', $customer->id)}}" method="post" class="dropdown-item">
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
