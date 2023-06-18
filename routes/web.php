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
use App\Http\Controllers\admin\RegionController;
use App\Http\Controllers\admin\DistrictController;
use App\Http\Controllers\admin\StreetController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ComentController;
use App\Http\Controllers\admin\GroupController;
 use App\Http\Controllers\admin\TeacherController;






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

/*
Route::get('/', [SiteController::class, 'welcome']);
Route::get('/groups', [SiteController::class, 'groups']);
Route::get('/gallery', [SiteController::class, 'gallery']);
Route::get('/class', [SiteController::class, 'class']);
Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/article', [SiteController::class, 'article']);
Route::get('achievements',  [SiteController::class, 'achievements']);
 */


 Route::get('/',function(){
    return redirect('/welcome');
});

Route::get('/lang/{lang}', function($lang){
    session((['lang' => $lang]));

    return back();
});

 Route::auto('/', SiteController::class,);

Route::post('/complaints', [ComplaintsController::class, 'complaints'])->name('complaints');





/* admin panel start*/
     Route::prefix('admin/')->name('admin.')->middleware(['auth','admin'])->group(function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::resources([
     '/infos' => InfoController::class,
     '/groups' => GroupController::class,
     '/posts' =>  PostController::class,
     '/categories'=>  CategoryController::class,
     '/humans'=> HumanController::class,
     '/numbers'=>  NumberController::class,
     '/regions'=>  RegionController::class,
     '/districts'=>   DistrictController::class,
     '/streets'=>   StreetController::class,
     '/blogs' =>  BlogController::class,
     '/coments'=>   ComentController::class,
     '/groups'=>  GroupController::class,
     '/teachers'=>  TeacherController::class,
]);



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

