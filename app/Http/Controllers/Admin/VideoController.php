<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function index(){
        $videos = Video::all();
        return view('Admin.videos.index',compact('videos'));

        
    }
    public function create()
    {
        $teacher = Teacher::all();
        return view('Admin.videos.create', compact('teacher'));
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'teacher_id' => 'required|numeric',
        //     'title' => 'required|string',
        //     'video1' => 'required|mimetypes:video/mp4', // Adjust the validation rules as needed
        //     'video2' => 'nullable|mimetypes:video/mp4',
        //     'video3' => 'nullable|mimetypes:video/mp4',
        //     'video4' => 'nullable|mimetypes:video/mp4',
        //     'video5' => 'nullable|mimetypes:video/mp4',
        // ]);

        // Store the videos
        $videos = [];
        for ($i = 1; $i <= 5; $i++) {
            $videoInput = 'video' . $i;
            if ($request->hasFile($videoInput)) {
                $video = $request->file($videoInput);
                $request->validate([$videoInput => 'mimes:mp4|max:100000']);
                $extension = $video->getClientOriginalExtension();
                $videoPath = time() . '.' . $extension;
                $video->move('assets/upload/videos', $videoPath);
                $videos[$videoInput] = $videoPath;
            }
        }
        

        // Create the video record in the database
        $video = new Video();
        $video->teacher_id = $request->input('teacher_id');
        $video->video1 = $videos['video1'] ?? null;
        $video->video2 = $videos['video2'] ?? null;
        $video->video3 = $videos['video3'] ?? null;
        $video->video4 = $videos['video4'] ?? null;
        $video->video5 = $videos['video5'] ?? null;
        $video->save();

        // Optionally, you can also update the status or perform additional actions

        return response()->json(['message' => 'Video created successfully'], 201);
    }


    



}
