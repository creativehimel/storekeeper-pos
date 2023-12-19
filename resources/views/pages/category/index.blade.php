@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header d-flex justify-content-between align-items-center">Categories List
                    <a class="btn btn-primary" href="{{route('categories.create')}}">Create a Category</a>
                </h5>
                <div class="table-responsive text-nowrap mb-2">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th class="w-px-200">Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    <span class="fw-medium">{{$category->name}}</span>
                                </td>
                                <td class="w-px-200">{{$category->description}}</td>
                                <td>
                                    <img src="{{asset('images/categories/'.$category->image)}}" alt="" width="50">
                                </td>
                                <td>
                                    @if($category->status)
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
                                            <a class="dropdown-item" href="{{route('categories.edit', $category->id)}}"
                                            ><i class="ti ti-pencil me-1"></i> Edit</a
                                            >
                                            <form action="{{route('categories.destroy', $category->id)}}" method="post" class="dropdown-item">
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
