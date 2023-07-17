<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function index()
    {
        $category = category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.Category.create');
    }


    // public function store(Request $request)
    // {
    //     try {
    //         $category = new Category();

    //         if ($request->hasFile('image')) {
    //             $file = $request->file('image');
    //             $ext = $file->getClientOriginalExtension();
    //             $filename = time() . '.' . $ext;
    //             $file->move('assets/upload/category', $filename);
    //             $category->image = $filename;
    //         }

    //         $category->name = $request->input('name');
    //         $category->description = $request->input('description');
    //         $category->popular = $request->input('popular') == TRUE ? '1' : '0';
    //         // Save the category
    //         $category->save();

    //         return response()->json(['status' => 'Category added successfully'], 200);
    //     } catch (\Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }

    public function store(Request $request)
    {
        try {
            $category = new Category();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('assets/upload/category', $filename);
                $category->image = $filename;
            }

            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->popular = $request->input('popular') == true ? '1' : '0';
            // Save the category
            $category->save();

            return response()->json(['status' => 'Category added successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        $category = category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    // public function update(Request $request, $id)
    // {

    //     $category = category::find($id);
    //     if ($request->hasFile('image')) {
    //         $path = 'assets/upload/category/' . $category->image;
    //         if (File::exists($path)) {
    //             File::delete($path);
    //         }
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $ext;
    //         $file->move('assets/upload/category', $filename);
    //         $category->image = $filename;
    //     }
    //     $category->name = $request->input('name');
    //     $category->description = $request->input('description');
    //     $category->popular = $request->input('popular') == TRUE ? '1' : '0';
    //     $category->update();
    //     return redirect('categories')->with('status', "Category updated Successfully");
    // }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'assets/upload/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/upload/category', $filename);
            $category->image = $filename;
        }
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->popular = $request->input('popular') == true ? '1' : '0';
        $category->update();
        return response()->json(['status' => 'Category updated successfully'], 200);
    }

    // public function destroy($id)
    // {
    //     $category = category::find($id);
    //     if ($category->image) {
    //         $path = 'assets/upload/category/' . $category->image;
    //         if (File::exists($path)) {
    //             File::delete($path);
    //         }
    //     }
    //     $category->delete();
    //     return redirect('categories')->with('status', "Category delete Successfully");
    // }

    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image) {
            $path = 'assets/upload/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return response()->json(['status' => 'Category deleted successfully'], 200);
    }
}
