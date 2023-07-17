<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\FrontentController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\api\loginController;
use App\Http\Controllers\api\AuthController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('/register',[loginController::class,'register']);
Route::post('/login',[loginController::class,'login']);


Route::post('social/register', [AuthController::class, 'socialRegister'])->middleware('auth:sanctum');;
Route::post('social/login', [AuthController::class, 'socialLogin']);
Route::get('login/google', [AuthController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::get('login/facebook', [AuthController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [AuthController::class, 'handleFacebookCallback']);

Route::post('/insert-teacher',[App\Http\Controllers\Admin\TeacherController::class,'insert']);
Route::put('update-teacher/{id}',[App\Http\Controllers\Admin\TeacherController::class,'update']);
Route::delete('delete-teacher/{id}', [App\Http\Controllers\Admin\TeacherController::class, 'destroy']);

Route::middleware(['auth:sanctum', 'isAdmin'])->group(function () {

    Route::post('insert-category', [CategoryController::class, 'store']);
    // Category edit and delete
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    // Subcategory -> Course
    Route::get('sub-category', [SubCategoryController::class, 'index']);
    Route::get('add-subcategory', [SubCategoryController::class, 'create']);
    Route::post('insert-subcategory', [SubCategoryController::class, 'store']);
    // Subcategory edit and delete
    Route::get('edit-subcategory/{id}', [SubCategoryController::class, 'edit']);
    Route::put('update-subcategory/{id}', [SubCategoryController::class, 'update']);
    Route::get('delete-subcategory/{id}', [SubCategoryController::class, 'destroy']);

    // Teacher
    Route::get('teachers', [TeacherController::class, 'index']);
    Route::get('add-teacher', [TeacherController::class, 'add']);
    // API
    Route::post('insert-teacher', [TeacherController::class, 'insert']);
    // Teacher edit and delete
    Route::get('edit-teacher/{id}', [TeacherController::class, 'edit']);
    Route::put('update-teacher/{id}', [TeacherController::class, 'update']);
    Route::get('delete-teacher/{id}', [TeacherController::class, 'destroy']);

    // Videos
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
    Route::post('/videos/store', [VideoController::class, 'store'])->name('videos.store');
});