<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Admin\AppointmentManagement;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\DepartmentManagement;
use App\Livewire\Admin\DoctorManagement;
use App\Livewire\Admin\DocumentManagement;
use App\livewire\Admin\InvoiceManagement;
use App\Livewire\Admin\PatientManagement;
use App\livewire\Admin\StaffManagement;
use App\Livewire\Admin\UserManagement;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();

        switch ($user->role) {
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'doctor':
                return redirect()->route('doctor.dashboard');
            case 'patient':
                return redirect()->route('patient.dashboard');
            case 'staff':
                return redirect()->route('staff.dashboard');
            default:
                return view('dashboard');
        }
    })->name('dashboard');

    // Add a route for profile management if using Breeze/Jetstream default
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/appointments', AppointmentManagement::class)->name('appointments');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/departments', DepartmentManagement::class)->name('departments');
    Route::get('/doctors', DoctorManagement::class)->name('doctors');
    Route::get('/documents', DocumentManagement::class)->name('documents');
    Route::get('/invoices', InvoiceManagement::class)->name('invoices');
    Route::get('/patients', PatientManagement::class)->name('patients');
    Route::get('/staffs', StaffManagement::class)->name('staffs');
    Route::get('/users', UserManagement::class)->name('users');
});

// Doctor Routes
Route::middleware(['auth', 'verified', 'doctor'])->prefix('doctor')->name('doctor.')->group(function () {
    Route::get('/dashboard', fn() => view('doctor.dashboard'))->name('dashboard');
});

// Patient Routes
Route::middleware(['auth', 'verified', 'patient'])->prefix('patient')->name('patient.')->group(function () {
    Route::get('/dashboard', fn() => view('patient.dashboard'))->name('dashboard');
});

// Staff Routes
Route::middleware(['auth', 'verified', 'staff'])->prefix('staff')->name('staff.')->group(function () {
    Route::get('/dashboard', fn() => view('staff.dashboard'))->name('dashboard');
});

require __DIR__.'/auth.php';
