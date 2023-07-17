<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\payment;
use App\Models\SubCategory;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $feature_category = Category::where('popular','1')->take(8)->get();
        $popular_teacher = Teacher::take(4)->get();
        return view('Frontend.index', compact('feature_category','popular_teacher'));
    }

    public function categoryview(){

        $category = Category::where('popular','1')->get();
        return view('Frontend.all_cate', compact('category'));
    }

   
    public function opencategory($name)
    {
        if(Category::where('name', $name)->exists()){

            $category = Category::where('name', $name)->first();
            $teacher = Teacher::where('cate_id', $category->id)->get();
            return view('Frontend.Teacher.index', compact('category','teacher'));
        }
        else{
            return redirect('/')->with('status', "Nothing Course");
        }


        
    }
 
    public function teachview($cate_name, $teach_name)
    {
        if (Category::where('name', $cate_name)->exists())
        {
            if(Teacher::where('name', $teach_name)->exists())
            {
                $teacher = Teacher::where('name', $teach_name)->first();
                $payment = Payment::where('teach_id', $teacher->id)->get();
                return view('Frontend.Teacher.view', compact('teacher','payment'));
            }
            else{
                return redirect('/')->with('status',"The link was broken");
            }
        }
        else{
            return redirect('/')->with('status',"The link was broken");
        }
    }



    public function courselistajax()
    {
        $category = Category::select('name')->get();
        $data = [];

        foreach($category as $item ){
            $data[] = $item['name'];
        }
        return $data;
    }

    

    public function searchcourse(Request $request)
    {
        $category = $request->input('category');

        $categoryModel = Category::where('name', 'LIKE', "%$category%")->first();

        if (!$categoryModel) {
            return "Massage course not available";
        }

        $categoryName = $categoryModel->name;

        return redirect()->route('view-category', ['name' => $categoryName]);
    }
}
