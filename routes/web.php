<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;

// Auth routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Page d'accueil = Login
Route::get('/', function () {
    return view('auth.login');
});

// Route index2 accessible SANS connexion
Route::get('/index2', function () {
    return view('home.index2-one-page');
})->name('index');

// Routes protégées
Route::middleware(['auth'])->group(function () {

    // Route ADMIN
    Route::get('/admin/dashboard', function () {

        if (!auth()->user()->isAdmin()) {
            return redirect()->route('index')
                ->with('error', 'Accès administrateur requis.');
        }

        return app(AdminDashboardController::class)->index();

    })->name('admin.dashboard');

    // Dashboard USER
    Route::get('/user/dashboard', function () {

        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }

        return view('user.dashboard');

    })->name('user.dashboard');

});

// Routes temporaires
Route::get('/about', fn() => "Page About")->name('about');
Route::get('/interior-design', fn() => "Design Intérieur")->name('interior-design');
Route::get('/urban-design', fn() => "Design Urbain")->name('urban-design');
Route::get('/landscape-design', fn() => "Design Paysager")->name('landscape-design');
Route::get('/project-details', fn() => "Détails Projet")->name('project-details');
Route::get('/services', fn() => "Services")->name('services');
Route::get('/team-details', fn() => "Équipe")->name('team-details');
Route::get('/testimonials', fn() => "Témoignages")->name('testimonials');
Route::get('/blog-details', fn() => "Blog")->name('blog-details');
