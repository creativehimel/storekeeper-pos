@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header text-center">Create Brand</h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('brands.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{$brand->name}}"
                                placeholder="Enter product brand name"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <input
                                type="text"
                                id="description"
                                name="description"
                                value="{{$brand->description}}"
                                class="form-control"
                                placeholder="Enter product brand description"
                            />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status" id="status" required>
                                <option value="0" {{$brand->status == 0 ? 'selected' : ''}}>Inactive</option>
                                <option value="1" {{$brand->status == 1 ? 'selected' : ''}}>Active</option>
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
