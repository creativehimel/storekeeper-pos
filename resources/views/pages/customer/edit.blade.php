@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header text-center">Edit Customer</h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('customers.update', $customer->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{$customer->name}}"
                                placeholder="Enter customer name"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                value="{{$customer->phone}}"
                                class="form-control"
                                placeholder="Enter customer phone number"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input
                                type="text"
                                id="address"
                                name="address"
                                value="{{$customer->address}}"
                                class="form-control"
                                placeholder="Enter customer phone number"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="0" {{$customer->status == 0 ? 'selected' : ''}}>Inactive</option>
                                <option value="1" {{$customer->status == 1 ? 'selected' : ''}}>Active</option>
                            </select>
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
