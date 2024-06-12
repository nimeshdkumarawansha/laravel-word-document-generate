<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ExportController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/export-word', [ExportController::class, 'exportWord']);
Route::get('/generate-docx', [ExportController::class, 'generateDocx']);
Route::get('/generate-word', [ExportController::class, 'createWordFile']);

Route::get('/document-generate-word',[DocumentController::class,'generateDocument']);
Route::get('/convert-html-to-word',[DocumentController::class,'convertHtmlToWord']);