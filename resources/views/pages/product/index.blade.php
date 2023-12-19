@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">Brand List
                    <a class="btn btn-primary" href="{{route('brands.create')}}">Create a Brand</a>
                </h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($brands as $brand)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{$brand->name}}</span>
                                </td>
                                <td>{{$brand->description}}</td>
                                <td>
                                    <img src="{{asset('images/brands/'.$brand->image)}}" alt="" width="50">
                                </td>
                                <td>
                                    @if($brand->status)
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
                                            <a class="dropdown-item" href="{{route('brands.edit', $brand->id)}}"
                                            ><i class="ti ti-pencil me-1"></i> Edit</a
                                            >
                                            <form action="{{route('brands.destroy', $brand->id)}}" method="post" class="dropdown-item">
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
