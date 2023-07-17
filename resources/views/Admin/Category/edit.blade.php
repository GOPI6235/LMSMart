@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Edit/Update Category
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-1">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" class="form-control" name="name">
                    </div>
                    <div class="col-md-12 mb-1">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="col-md-6 mb-1">
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $category->popular ==  "1" ? 'checked':'' }} name="popular">
                    </div>
                    @if ($category->image)
                        <img src="{{ asset('assets/upload/category/'.$category->image) }}" alt="Category image">
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