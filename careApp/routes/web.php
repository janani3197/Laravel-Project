<?php

use App\Http\Controllers\CareTakerController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Models\CareTaker;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::middleware('auth')->group(function () {
    Route::get('/patient', [CareTakerController::class, 'index'])->name('dashboard');
    Route::get('/patient/booking', [PatientController::class, 'index'])->name('patient.booking');

    // Route::get('my-address', function (Request $request) {
    //     return Auth::user()->address;
    // });
    
    // Expects a BookingPolicy to exist, having a 'create' function (ability)
    // in that function: return $user->can('bookings.create');
    // 
    // Route::post('/bookings', [BookingController::class, 'store'])
    //     ->name('bookings.store')
    //     ->can('create', Booking::class);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    $users = CareTaker::all();
    return Inertia::render('Carers', [
        'users' => $users
    ]);

    // same as:
    // return Inertia::render('Carers', compact('users'));
});


/**
 * This route group passes through middleware that ensures the defaults are set properly for Breeze,
 * which uses TailwindCSS
 */
Route::middleware('breeze')->group(function () {
    require __DIR__.'/auth.php';

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::get('/', function () {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    });
});

