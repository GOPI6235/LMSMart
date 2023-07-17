<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/video', function(){
//     return view('Frontend.watch');
// });

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'index']);

Route::get('videos',[App\Http\Controllers\Frontend\PurchaseController::class,'index']);
Route::get('category',[App\Http\Controllers\Frontend\HomeController::class,'categoryview']);
Route::get('view-categery/{name}',[App\Http\Controllers\Frontend\HomeController::class,'opencategory'])->name('view-category');
Route::get('course-detail/{cate_name}/{teach_name}',[App\Http\Controllers\Frontend\HomeController::class,'teachview'])->name('view.teacher');
Route::get('/course-list',[App\Http\Controllers\Frontend\HomeController::class,'courselistajax']);
Route::get('/search-course',[App\Http\Controllers\Frontend\HomeController::class,'searchcourse']);

Route::post('payment',[App\Http\Controllers\Frontend\PurchaseController::class,'payment']);
Route::post('razorpay',[App\Http\Controllers\Frontend\PurchaseController::class,'RazorPayStore']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashbord', [App\Http\Controllers\Admin\FrontentController::class,'index']);

    
    Route::get('categories',[App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('create-category',[App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('insert-category',[App\Http\Controllers\Admin\CategoryController::class,'store']);

    // // category edit and delete
    Route::get('edit-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('update-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy']);

    // // Subcategory ->course
    Route::get('sub-category',[App\Http\Controllers\Admin\SubCategoryController::class,'index']);
    Route::get('add-subcategory',[App\Http\Controllers\Admin\SubCategoryController::class,'create']);
    Route::post('insert-subcategory',[App\Http\Controllers\Admin\SubCategoryController::class,'store']);
    // Subcategory edit and delete
    Route::get('edit-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'edit']);
    Route::put('update-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'update']);
    Route::get('delete-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'destroy']);
    
    //teacher
    Route::get('teachers',[App\Http\Controllers\Admin\TeacherController::class,'index']);
    Route::get('add-teacher',[App\Http\Controllers\Admin\TeacherController:: class,'add']);
    //Api
    Route::post('insert-teacher',[App\Http\Controllers\Admin\TeacherController::class,'insert']);
    //teacher Edit and Delete
    Route::get('edit-teacher/{id}',[App\Http\Controllers\Admin\TeacherController::class,'edit']);
    Route::put('update-teacher/{id}',[App\Http\Controllers\Admin\TeacherController::class,'update']);
    Route::get('delete-teacher/{id}',[App\Http\Controllers\Admin\TeacherController::class,'destroy']);
    
    //videos
    Route::get('/videos',[App\Http\Controllers\Admin\VideoController::class,'index'])->name('videos.index');
    Route::get('/videos/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('videos.create');
    Route::post('/videos/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('videos.store');


    
    // Route::get('orders',[App\Http\Controllers\Admin\OrderController::class,'index']);
    // Route::get('admin/view-order/{id}',[App\Http\Controllers\Admin\OrderController::class,'view']);
    // Route::put('update-order/{id}',[App\Http\Controllers\Admin\OrderController::class,'updateorder']);
    // Route::get('order-history',[App\Http\Controllers\Admin\OrderController::class,'orderhistory']);

    // Route::get('users',[App\Http\Controllers\Admin\DashboardController::class,'users']);
    // Route::get('view-user/{id}',[App\Http\Controllers\Admin\DashboardController::class,'viewuser']);
});

 
//Google login
Route::get('login/google',[App\Http\Controllers\Auth\LoginController::class,'retirectToGoogle'])->name('login.google');
Route::get('login/google/callback',[App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);




// Route::post('buy-course',[App\Http\Controllers\Frontend\PurchaseController::class,'purchaseCourse'])->name('teacher.purchase');
