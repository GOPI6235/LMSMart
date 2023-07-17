@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header-primary">
            <h4>Videos<a class="btn btn-sm btn-warning float-right" href="{{ route('videos.create') }}"><h6>Add videos</h6></a></h4>
        </div>
        <div class="card-body">
            
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Teacher id</th>
                            <th>Video</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($videos as $video)
                            <tr>
                                <td>{{ $video->id }}</td>
                                <td>{{ $video->teacher_id }}</td>
                                <td>
                                    <video width="100" src="{{ asset('assets/upload/videos/'.$video->video1) }}" type="video/mp4" controls></video>
                                </td>
                                <td>
                                    <a href="{{-- url('edit-teacher/'.$item->id) --}}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{-- url('delete-teacher/'.$item->id) --}}" class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection
