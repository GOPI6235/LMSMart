<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\File;


class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::all();
        return view('admin.Teacher.index', compact('teacher'));
    }

    public function add()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        return view('admin.Teacher.add', compact('category','subcategory'));
    }

    // public function insert(Request $request)
    // {
    //     $teacher = new Teacher();
    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$ext;
    //         $file->move('assets/upload/Teacher/', $filename);
    //         $teacher->image = $filename;
    //     }
    //     $teacher->cate_id = $request->input('cate_id');
    //     $teacher->course_id = $request->input('course_id');
    //     $teacher->name = $request->input('name');
    //     $teacher->description = $request->input('description');
    //     $teacher->original_price = $request->input('original_price');
    //     $teacher->selling_price = $request->input('selling_price');
    //     $teacher->popular = $request->input('popular') == TRUE ? '1' : '0';
    //     $teacher->save();
    
    //     return response()->json(['message' => 'Teacher added successfully'], 200);
    // }

    public function insert(Request $request)
    {
        try {
            $teacher = new Teacher();
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/upload/Teacher/', $filename);
                $teacher->image = $filename;
            }
            $teacher->cate_id = $request->input('cate_id');
            $teacher->course_id = $request->input('course_id');
            $teacher->name = $request->input('name');
            $teacher->description = $request->input('description');
            $teacher->original_price = $request->input('original_price');
            $teacher->selling_price = $request->input('selling_price');
            $teacher->popular = $request->input('popular') == true ? '1' : '0';
            $teacher->save();
    
            return response()->json(['message' => 'Teacher added successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add teacher', 'error' => $e->getMessage()], 500);
        }
    }

    public function edit($id){
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    // public function update(Request $request, $id)
    // {
    //     $teacher = Teacher::find($id);
    //     if ($request->hasFile('image')) {
    //         $path = 'assets/upload/teacher/' . $teacher->image;
    //         if (File::exists($path)) {
    //             File::delete($path);
    //         }
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $ext;
    //         $file->move('assets/upload/Teacher', $filename);
    //         $teacher->image = $filename;
    //     }
    //     $teacher->name = $request->input('name');
    //     $teacher->description = $request->input('description');
    //     $teacher->original_price = $request->input('original_price');
    //     $teacher->selling_price = $request->input('selling_price');
    //     $teacher->popular = $request->input('popular') == TRUE ? '1' : '0';
    //     $teacher->update();

    //     return response()->json(['message' => 'Teacher updated successfully'], 200);


    // }


    public function update(Request $request, $id)
    {
        try {
            $teacher = Teacher::find($id);
            if (!$teacher) {
                return response()->json(['message' => 'Teacher not found'], 404);
            }
            if ($request->hasFile('image')) {
                $path = 'assets/upload/teacher/' . $teacher->image;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('assets/upload/Teacher', $filename);
                $teacher->image = $filename;
            }
            $teacher->name = $request->input('name');
            $teacher->description = $request->input('description');
            $teacher->original_price = $request->input('original_price');
            $teacher->selling_price = $request->input('selling_price');
            $teacher->popular = $request->input('popular') == true ? '1' : '0';
            $teacher->update();
    
            return response()->json(['message' => 'Teacher updated successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to update teacher', 'error' => $e->getMessage()], 500);
        }
    }

    // public function destroy($id)
    // {
    //     $teacher = Teacher::find($id);
        
    //     if (!$teacher) {
    //         return response()->json(['message' => 'Teacher not found'], 404);
    //     }
    
    //     $path = 'assets/upload/teacher/' . $teacher->image;
    //     if (File::exists($path)) {
    //         File::delete($path);
    //     }
    
    //     $teacher->delete();
    
    //     return response()->json(['message' => 'Teacher deleted successfully'], 200);
    // }

    public function destroy($id)
    {
        try {
            $teacher = Teacher::find($id);
            if (!$teacher) {
                return response()->json(['message' => 'Teacher not found'], 404);
            }
    
            $path = 'assets/upload/teacher/' . $teacher->image;
            if (File::exists($path)) {
                File::delete($path);
            }
    
            $teacher->delete();
    
            return response()->json(['message' => 'Teacher deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to delete teacher', 'error' => $e->getMessage()], 500);
        }
    }






    
}
