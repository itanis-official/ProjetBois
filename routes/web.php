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

// Routes protégées - Vérification manuelle des rôles
Route::middleware(['auth'])->group(function () {
    
    // Route pour les USERS - Design index2 (page design)
    Route::get('/index2', function () {
        // Si admin essaie d'accéder, rediriger vers admin
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return view('home.index2-one-page');
    })->name('user.design');

    // Route pour ADMIN - Dashboard
    Route::get('/admin/dashboard', function () {
        // Si user normal essaie d'accéder, rediriger vers design
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('user.design')->with('error', 'Accès administrateur requis.');
        }
        return app(AdminDashboardController::class)->index();
    })->name('admin.dashboard');

    // NOUVELLE ROUTE : Dashboard utilisateur
    Route::get('/user/dashboard', function () {
        // Si admin essaie d'accéder, rediriger vers admin
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return view('user.dashboard');
    })->name('user.dashboard');

});

// Routes temporaires pour éviter les erreurs
Route::get('/about', function () { return "Page About"; })->name('about');
Route::get('/interior-design', function () { return "Design Intérieur"; })->name('interior-design');
Route::get('/urban-design', function () { return "Design Urbain"; })->name('urban-design');
Route::get('/landscape-design', function () { return "Design Paysager"; })->name('landscape-design');
Route::get('/project-details', function () { return "Détails Projet"; })->name('project-details');
Route::get('/services', function () { return "Services"; })->name('services');
Route::get('/team-details', function () { return "Équipe"; })->name('team-details');
Route::get('/testimonials', function () { return "Témoignages"; })->name('testimonials');
Route::get('/blog-details', function () { return "Blog"; })->name('blog-details');