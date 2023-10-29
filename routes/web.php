<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\HomeController;





Route::get('/', [HomeController::class, 'index']);
Route::get('/countryDetailes/{id}', [CountryController::class, 'countryDetailes'])->name('countryDetailes');
Route::get('/uniDetailes/{id}/{country_id}', [UniversityController::class, 'uniDetailes'])->name('uniDetailes');
 Route::get('/collegeDetailes/{id}/{uni_id}', [CollegeController::class, 'collegeDetailes'])->name('collegeDetailes');
 Route::get('/departmentDetailes/{id}/{college_id}', [DepartmentController::class, 'departmentDetailes'])->name('departmentDetailes');
 Route::get('/applyDetailes', [ApplyController::class, 'applyDetailes'])->name('applyController');








Route::resource("/countries", CountryController::class);
Route::resource("/universities", UniversityController::class);
Route::resource("/colleges", CollegeController::class);
Route::resource("/departments", DepartmentController::class);
Route::resource("/applies", ApplyController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
