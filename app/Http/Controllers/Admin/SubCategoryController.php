<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::all();
        $category = category::all();
        return view('admin.subcategory.index', compact('subcategories','category'));
        
    }
    public function create()
    {
        $category = category::all();
        return view('admin.subcategory.create', compact('category'));
    }

    // public function store(Request $request)
    // {
    //     $subcategory = new SubCategory();

    //     if ($request->hasFile('image')) {
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $ext;
    //         $file->move('assets/upload/category/sub_cate/', $filename);
    //         $subcategory->image = $filename;
    //     }

    //     $subcategory->cate_id = $request->input('cate_id');
    //     $subcategory->name = $request->input('name');
    //     $subcategory->description = $request->input('description');
    //     $subcategory->save();
    //     return redirect('sub-category')->with('status',"Sub Category Added Successfully"); 
    // }

    public function store(Request $request)
    {
        try {
            $subcategory = new SubCategory();

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('assets/upload/category/sub_cate/', $filename);
                $subcategory->image = $filename;
            }

            $subcategory->cate_id = $request->input('cate_id');
            $subcategory->name = $request->input('name');
            $subcategory->description = $request->input('description');
            $subcategory->save();

            return response()->json(['message' => 'Sub Category Added Successfully'], 200);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return response()->json(['message' => 'Failed to add Sub Category'], 500);
        }
    }


    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory'));
    }

    // public function update(Request $request, $id)
    // {
    //     $subcategory = SubCategory::find($id);
    //     if ($request->hasFile('image')) {
    //         $path = 'assets/upload/category/sub_cate/' . $subcategory->image;
    //         if (File::exists($path)) {
    //             File::delete($path);
    //         }
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $ext;
    //         $file->move('assets/upload/category/sub_cate/', $filename);
    //         $subcategory->image = $filename;
    //     }

    //     $subcategory->name = $request->input('name');
    //     $subcategory->description = $request->input('description');
    //     $subcategory->trending = $request->input('trending') == TRUE ? '1':'0';
    //     $subcategory->update();
    //     return redirect('sub-category')->with('status',"Sub-Category updated Successfully");
    // }

    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        if ($subcategory) {
            if ($request->hasFile('image')) {
                $path = 'assets/upload/category/sub_cate/' . $subcategory->image;
                if (File::exists($path)) {
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('assets/upload/category/sub_cate/', $filename);
                $subcategory->image = $filename;
            }

            $subcategory->name = $request->input('name');
            $subcategory->description = $request->input('description');
            $subcategory->trending = $request->input('trending') == TRUE ? '1' : '0';
            $subcategory->save();

            return response()->json(['message' => 'Sub Category updated Successfully'], 200);
        } else {
            return response()->json(['message' => 'Sub Category not found'], 404);
        }
    }

    // public function destroy($id)
    // {
    //     $subcategory = SubCategory::find($id);
    //     if ($subcategory->image) {
    //         $path = 'assets/upload/category/' . $subcategory->image;
    //         if (File::exists($path)) {
    //             File::delete($path);
    //         }
    //     }
    //     $subcategory->delete();
    //     return redirect('sub-category')->with('status',"Sub category delete Successfully");
    // }

    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        if ($subcategory) {
            if ($subcategory->image) {
                $path = 'assets/upload/category/' . $subcategory->image;
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
            $subcategory->delete();
            return response()->json(['message' => 'Sub Category deleted Successfully'], 200);
        } else {
            return response()->json(['message' => 'Sub Category not found'], 404);
        }
    }
}
