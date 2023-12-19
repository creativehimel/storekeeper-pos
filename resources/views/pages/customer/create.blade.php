@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header d-flex justify-content-between align-items-center">Create Customer
                    <a href="{{route('customers.index')}}" class="btn btn-warning">Back</a>
                </h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('customers.store')}}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter Customer name"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
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
                                class="form-control"
                                placeholder="Enter customer Address"
                                 />
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Customer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
