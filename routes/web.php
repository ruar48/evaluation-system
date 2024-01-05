<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin/dashboard', [AdminController::class, 'ViewDashboard'])->name('admin.dashboard');

Route::get('admin/student', [AdminController::class, 'AddStudent'])->name('admin.student');
Route::post('/admin/addStudent', [AdminController::class, 'AddStudentInfo'])->name('admin.AddStudent');
Route::delete('/admin/delete/student/{id}', [AdminController::class, 'deleteStudent'])->name('admin.delete');
Route::put('/admin/edit/student/{id}', [AdminController::class, 'updateStudent'])->name('admin.update');

Route::get('admin/manage/student', [AdminController::class, 'ManageStudent'])->name('admin.manage-student');
Route::get('admin/class', [AdminController::class, 'AddClass'])->name('admin.add-class');
Route::post('/admin/addClass', [AdminController::class, 'AddClasses'])->name('admin.AddClasses');
Route::delete('/admin/delete/class/{id}', [AdminController::class, 'deleteClass'])->name('admin.deleteClass');
Route::put('/admin/edit/class/{id}', [AdminController::class, 'updateClass'])->name('admin.updateClass');

Route::get('admin/manage/class', [AdminController::class, 'ManageClass'])->name('admin.manage-class');
Route::get('admin/category', [AdminController::class, 'AddCategory'])->name('admin.category');
Route::post('/admin/addCategory', [AdminController::class, 'AddCategoryName'])->name('admin.categoryname');
Route::delete('/admin/delete/category/{id}', [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
Route::put('/admin/edit/category/{id}', [AdminController::class, 'updateCategory'])->name('admin.updatecategory');

Route::get('admin/questioner', [AdminController::class, 'AddQuestioner'])->name('admin.questioner');
Route::post('/admin/Questioner/evaluate', [AdminController::class, 'AddQuestionerCat'])->name('admin.AddQuestioner');

Route::get('admin/evaluate', [AdminController::class, 'Evaluate'])->name('admin.evaluation');
Route::get('admin/comments', [AdminController::class, 'Comments'])->name('admin.comments');


Route::get('student/dashboard', [studentController::class, 'ViewStudentDashboard'])->name('student.dashboard');
Route::get('student/evaluation', [studentController::class, 'StudentEvaluation'])->name('student.evaluate');


require __DIR__.'/auth.php';