<?php

use App\Http\Controllers\HomeController;
use Facade\FlareClient\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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
// Localzation
Route::resources([
    '/' => HomeController::class,
]);

Route::get('/locale/{locale}',function($locale){
     Session::put('locale',$locale);
    return redirect()->back();
});

Route::group(['namespace' => 'App\Http\Controllers'],function(){
     Route::get('/trainerInfo','TrainerShowController@show')->name('trainerinfo');

      // admin
    Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'], function () {

        Route::get('/',function(){
            return View('admin.index');
        })->name('admin.index');

        // courses
        Route::resource('/courses', CourseController::class);

        // schedules
        Route::resource('/schedules', ScheduleController::class);

        // Trainers
        Route::resource('/trainers', TrainerController::class);

        //Trainers_Specialities
        Route::resource('/trainer_speciality',TrainerSpecialityController::class);
    });
});

Route::get('/courses', function () {
    return view('courses'); })->name('courses');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/facilities', function () {
    return view('facilities');
})->name('facilities.home');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/404', function () {
    return view('404');
})->name('404');
