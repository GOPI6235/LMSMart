@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit/update Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-teacher/'.$teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Category</label>
                        <select class="form-select">
                            <option value="">{{ $teacher->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Sub-Category</label>
                        <select class="form-select">
                            <option value="">{{ $teacher->subcategory->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="">Name</label>
                        <input type="text" value="{{ $teacher->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 mb-1">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $teacher->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="">Original Price</label>
                        <input type="number" value="{{ $teacher->original_price }}" class="form-control" name="original_price">
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="">Selling Price</label>
                        <input type="number" value="{{ $teacher->selling_price }}" class="form-control" name="selling_price">
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $teacher->popular == "1" ? 'checked': '' }} name="popular">
                    </div>
                    @if ($teacher->image)
                        <img src="{{ asset('assets/upload/teacher/'.$teacher->image) }}" alt="image here">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection