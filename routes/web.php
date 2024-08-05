<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamayatsController;
use App\Http\Controllers\TabaasController;
use App\Http\Controllers\ApcsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|*/
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
 //Route::get('/dashboard', function () {
 //    return view('dashboard'); 
 //})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('tabe3s', TabaasController::class);
Route::resource('apcs', ApcsController::class);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('jamayats', JamayatsController::class);
    Route::get('/nossoss', function () {
        return view('nossoss');
    })->name('nossoss');
});
Route::get('/jamayyats-pdf', [JamayatsController::class, 'jamayyats_pdf'])->name('jamayyats-pdf');
Route::get('/jamayyats-pdf-filtree', [JamayatsController::class, 'jamayyats_pdf_filtree'])->name('jamayyats-pdf-filtree');
Route::get('/jamayyats-excel-filtree', [JamayatsController::class, 'jamayyats_excel_filtree'])->name('jamayyats-excel-filtree');

Route::get('/filtre-apcs', [JamayatsController::class, 'filtreapcs'])->name('filtreapcs');
Route::get('/printwithfilter', [JamayatsController::class, 'versjamayatspdffiltree'])->name('imprimerjamayatsfiltrees');
Route::get('/excelwithfilter', [JamayatsController::class, 'versjamayatsexcelfiltree'])->name('imprimerjamayatsfiltreesexcel');

Route::get('/compare', [JamayatsController::class, 'compare'])->name('jamayats.compare');
Route::get('/import', [JamayatsController::class, 'import'])->name('jamayats.import');
Route::post('/importExcelFile', [JamayatsController::class, 'importExcelFile'])->name('jamayats.importExcelFile');
Route::get('/export', [JamayatsController::class, 'export'])->name('jamayats.export');
Route::get('export_view', [JamayatsController::class, 'export_view'])->name('jamayats.export_view');


require __DIR__.'/auth.php';
