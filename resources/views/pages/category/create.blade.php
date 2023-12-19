@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md mb-4 mb-md-0">
            <div class="card">
                <h4 class="card-header d-flex justify-content-between align-items-center">Create Category
                    <a href="{{route('categories.index')}}" class="btn btn-warning">Back</a>
                </h4>
                <div class="card-body">
                    <form class="browser-default-validation" action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter product brand name"
                                required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <input
                                type="text"
                                id="description"
                                name="description"
                                class="form-control"
                                placeholder="Enter product brand description"
                                 />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Category Image</label>
                            <input type="file" class="form-control" id="image" name="image"  />
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
