<?php

use App\Models\Report;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportAdminController;
use App\Http\Controllers\EvidenceController;
use App\Http\Controllers\EvidenceAdminController;
use App\Http\Controllers\BullyTypeController;
use App\Models\Notification;
use App\Models\BullyType;

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
    return view('index');
});
// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user-dashboard')->middleware('auth');

// report
// Route::get('/dashboard/report', [ReportController::class, 'index'])->name('user-report')->middleware('auth');
Route::resource('/dashboard/reports', ReportController::class)->middleware('auth');
Route::get('/dashboard/reports', [ReportController::class, 'index']);

Route::resource('/dashboard/admin/reports', ReportAdminController::class);
Route::get('/dashboard/admin/reports', [ReportAdminController::class, 'index']);
// profile
Route::get('/dashboard/profile', [UserController::class, 'index'])->name('user-profile')->middleware('auth');
Route::get('/dashboard/profile/edit', [UserController::class, 'edit'])->name('user-profile-edit')->middleware('auth');
Route::post('/dashboard/profile/update', [UserController::class, 'update'])->name('user-profile-update')->middleware('auth');

// auth
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::post('/login', [LoginController::class, 'auth'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// admin
// Route::get('/login/admin', [LoginAdminController::class, 'index'])->name('admin-login');
// Route::post('/login/admin', [LoginController::class, 'auth'])->name('admin-login');
// Route::get('/register/admin', [RegisterAdminController::class, 'index'])->name('admin-register');
// Route::post('/register/admin', [RegisterAdminController::class, 'store'])->name('admin-register');

Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin-dashboard');

// evidence
Route::resource('/dashboard/admin/evidences', EvidenceAdminController::class);
Route::resource('/dashboard/evidences', EvidenceController::class);
Route::resource('/dashboard/admin/bully-types', BullyTypeController::class);
Route::get('/dashboard/tentang-bully', function(){
    return view('dashboard-user.tentang.index',[
        'title' => 'SNB | Info',
        'notifications' => Notification::where('user_id', auth()->user()->id)->get(),
        'types' => BullyType::all()
    ]);
});
Route::get('/dashboard/tutorial', function(){
    return view('dashboard-user.tutorial.index',[
        'title' => 'SNB | Info',
        'notifications' => Notification::where('user_id', auth()->user()->id)->get()
    ]);
});