<?php

use App\Http\Controllers\QrCodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/qr-code', [QrCodeController::class,'generateQrCode'])->name('qr-code.generate');

Route::get('/qr-code-view', function () {
    return view('qr-code');
})->name('qr-code.view');