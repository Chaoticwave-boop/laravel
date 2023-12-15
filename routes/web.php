<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/genres', [GenresController::class, 'index'])->name('genres.index');
Route::get("/genre/{genres}", [GenresController::class, 'show'])->name('genre.show');

Route::get('/songs', [SongsController::class, 'index'])->name('songs.index');
Route::get("/songs/{songs}", [SongsController::class, 'show'])->name('songs.show');

Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');
Route::get("/playlists/test/{playlists}", [PlaylistController::class, 'show'])->name('playlists.show');
Route::get("/playlists/create", [PlaylistController::class, 'create'])->name('playlists.create');
Route::post("/playlists/store", [PlaylistController::class, 'store'])->name('playlists.store');
Route::delete('/playlists/{playlist}', [PlaylistController::class, 'destroy'])->name('playlists.destroy');


Route::get("/song/showForm/{songs}", [SongsController::class, 'showPlaylistForm'])->name('playlists.showPlaylistForm');



require __DIR__.'/auth.php';
