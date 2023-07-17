@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            Add Videos:
        </div>
        <div class="card-body">
            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="teacher_id">
                            <option value="">Select a teacher</option>
                            @foreach ($teacher as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="title1">Title 1:</label>
                        <input type="file" class="form-control" name="video1" accept="video/mp4">
                    </div>
                    <div class="col-md-12">
                        <label for="title2">Title 2:</label>
                        <input type="file" class="form-control" name="video2" accept="video/mp4">
                    </div>
                    <div class="col-md-12">
                        <label for="title3">Title 3:</label>
                        <input type="file" class="form-control" name="video3" accept="video/mp4">
                    </div>
                    <div class="col-md-12">
                        <label for="title4">Title 4:</label>
                        <input type="file" class="form-control" name="video4" accept="video/mp4">
                    </div>
                    <div class="col-md-12">
                        <label for="title5">Title 5:</label>
                        <input type="file" class="form-control" name="video5" accept="video/mp4">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection