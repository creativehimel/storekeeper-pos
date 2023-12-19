@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header d-flex justify-content-between align-items-center">Create Brand
                    <a href="{{route('categories.index')}}" class="btn btn-warning">Back</a>
                </h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{$category->name}}"
                                placeholder="Enter product brand name"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <input
                                type="text"
                                id="description"
                                name="description"
                                value="{{$category->description}}"
                                class="form-control"
                                placeholder="Enter product brand description"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="0" {{$category->status == 0 ? 'selected' : ''}}>Inactive</option>
                                <option value="1" {{$category->status == 1 ? 'selected' : ''}}>Active</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
