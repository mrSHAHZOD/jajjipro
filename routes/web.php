<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\HumanController;
use App\Http\Controllers\admin\NumberController;






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



Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[SiteController::class,'index'])->name('index');
Route::get('/groups',[SiteController::class,'groups']);
Route::get('/gallery',[SiteController::class,'gallery']);
Route::get('/class',[SiteController::class,'class']);
Route::get('/blog',[SiteController::class,'blog']);
Route::get('/article',[SiteController::class,'article']);
Route::get('achievements', [SiteController::class, 'achievements']);


Route::post('/store',[OrderController::class, 'store'])->name('store');
Route::post('/complaints',[ComplaintsController::class, 'complaints'])->name('complaints');





/* admin panel start*/
     Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

/*
    Route::get('info/index', [InfoController::class, 'index'])->name('info.index');
    Route::get('info/create', [InfoController::class, 'create'])->name('infos.create');
    Route::post('info/store', [InfoController::class, 'store'])->name('infos.store');
    Route::get('/info/show/{id}', [InfoController::class, 'show'])->name('infos.show');
    Route::get('info/edit/{id}', [InfoController::class, 'edit'])->name('infos.edit');
    Route::put('info/update/{id}',[InfoController::class,'update'])->name('infos.update');
    Route::delete('info/delete/{id}', [InfoController::class, 'destroy'])->name('infos.destroy');

 */

    /* Route::get('groups/index',[GroupController::class,'index'])->name('groups.index');
    Route::get('groups/create',[GroupController::class,'create'])->name('groups.create');
    Route::post('groups/store',[GroupController::class,'store'])->name('groups.store');
    Route::get('/groups/show/{id}', [GroupController::class, 'show'])->name('groups.show');
    Route::get('groups/edit/{id}', [GroupController::class, 'edit'])->name('groups.edit');
    Route::put('groups/update/{id}',[GroupController::class,'update'])->name('groups.update');
    Route::delete('groups/delete/{id}', [GroupController::class, 'destroy'])->name('groups.destroy');
 */



/*

    Route::get('teachers/index', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('teachers/create',[TeacherController::class,'create'])->name('teachers.create');
    Route::post('teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/show/{id}',[TeacherController::class, 'show'])->name('teachers.show');
    Route::get('teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('teachers/update/{id}',[TeacherController::class,'update'])->name('teachers.update');
    Route::delete('teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

 */

/*
    Route::get('coments/index',[ComentController::class,'index'])->name('coments.index');
    Route::get('coments/create',[ComentController::class,'create'])->name('coments.create');
    Route::post('coments/store', [ComentController::class, 'store'])->name('coments.store');
 */

  /*   Route::get('blogs/index',[BlogsController::class,'index'])->name('blogs.index');
    Route::get('blogs/create',[BlogsController::class,'create'])->name('blogs.create');
    Route::post('blogs/store',[BlogsController::class,'store'])->name('blogs.store');
 */
    /* admin panel end */





    Route::resource('/infos', InfoController::class);






    Route::resource('/groups', GroupController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/humans', HumanController::class);
    Route::resource('/numbers', NumberController::class);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
