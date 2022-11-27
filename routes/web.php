<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\EtudiantController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get("/entreprise",[EntrepriseController::class,"index"])->name("tableEntreprise");
    // Route::get("/filiere",[FiliereController::class,"index"])->name("tableFiliere");
    Route::resource("/Filiere",FiliereController::class);
    Route::resource("/Entreprise",EntrepriseController::class);
    Route::resource("/Etudiant",EtudiantController::class);


    // Route::get("/addEntreprise",[EntrepriseController::class,"create"])->name("addEntreprise");
    // Route::post("/storeEntreprise",[EntrepriseController::class,"store"])->name("storeEntreprise");
    // Route::get("/editEntreprise/{id}",[EntrepriseController::class,"edit"])->name("editEntreprise");
    // Route::patch('/updateEntreprise', [ProfileController::class, 'update'])->name('updateEntreprise');

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
