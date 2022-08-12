<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\NewLicenseController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\SearchNewLicenseController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\EasybikeController;
use App\Http\Controllers\DrivingLicenseController;
use App\Http\Controllers\CertificateController;

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



//Home URL
Route::get('/', [RedirectController::class, 'redirectTo'])->name('redirect');

// QR SCAN
Route::get('/eblms/qr-code/{id}', [QrController::class, 'qrGenerate'])->name('code.qr');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    // DASHBOARD
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    //NEW LICENSE MODULE
    Route::get('/add-new-license', [NewLicenseController::class, 'index'])->name('license.addNew');
    Route::post('/create-new-license', [NewLicenseController::class, 'create'])->name('license.createNew');
    Route::get('/manage-new-license', [NewLicenseController::class, 'manage'])->name('license.manageNew');
    Route::get('/show-new-license/{id}', [NewLicenseController::class, 'show'])->name('license.showNew');
    Route::get('/edit-new-license/{id}', [NewLicenseController::class, 'edit'])->name('license.editNew');
    Route::post('/update-new-license/{id}', [NewLicenseController::class, 'update'])->name('license.updateNew');
    Route::post('/delete-new-license/{id}', [NewLicenseController::class, 'delete'])->name('license.deleteNew');

    // SEARCH MODULE
    Route::get('/search-new-license', [SearchNewLicenseController::class, 'search'])->name('license.searchNew');

    // BILL MODULE
    Route::get('/bill-issue', [BillController::class, 'issue'])->name('issue.bill');
    Route::get('/bill-issue/fetch/{license_type}', [BillController::class, 'fetch'])->name('license.fetch');
    Route::post('/bill-issue', [BillController::class, 'receipt'])->name('receipt.bill');

    // CERTIFICATE MODULE
    Route::get('/certificate-issue', [CertificateController::class, 'issue'])->name('issue.certificate');
    Route::get('/certificate-issue/fetch/{license_type}', [CertificateController::class, 'fetch'])->name('license.fetch');
    Route::post('/certificate-issue', [CertificateController::class, 'receipt'])->name('receipt.certificate');

    //Easy Bike
    Route::get('/easybike-list', [EasybikeController::class, 'manage'])->name('list.easybike');

    // Driving License
    Route::get('/driving-license-list', [DrivingLicenseController::class, 'manage'])->name('list.drivinglicense');







});
