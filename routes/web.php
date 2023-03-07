<?php

use Illuminate\Support\Facades\Route;
use App\Models\Livre;
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
// -- page d'accueil
Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

// -- liste des livres
Route::get('/liste', function () {
    $livres = Livre::get();
    return view('liste_livres',["livres"=>$livres]);
})->name('liste');

// -- liste des livres du user connecté
Route::get('/meslivres', function () {
    return view('meslivres');
})->name('meslivres');

// -- ajout d'un livre : affichage du formulaire
Route::get('/ajouter', function () {
    return view('ajout_livre');
})->name('ajouter');

// -- recherche de livres à partir d'un mot clé
Route::get('/recherche', function () {
    return view('resultat_recherche');
})->name('recherche');