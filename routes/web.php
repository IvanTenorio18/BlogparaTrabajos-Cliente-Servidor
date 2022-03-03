<?php

use Illuminate\Support\Facades\Route;
use App\Models\universidad;
use App\Models\datoalumno;
use App\Http\controllers\vistacontroler;


Route::get('/', [vistacontroler::class,'vista1'])->name('inicio');
    
Route::get('/tema1', [vistacontroler::class,'vista2'])->name('tema1');

Route::get('/tema2', [vistacontroler::class,'vista3'])->name('tema2');

Route::get('/tema3', [vistacontroler::class,'vista4'])->name('tema3');

Route::get('/tema4', [vistacontroler::class, 'vista5'])->name('tema4');
    
Route::get('/tema5', [vistacontroler::class, 'vista6'])->name('tema5');
    
Route::get('/tema6', [vistacontroler::class, 'vista7'])->name('tema6');

Route::get('/tema7', [vistacontroler::class, 'vista8'])->name('tema7');

Route::get('/tema8', [vistacontroler::class, 'vista9'])->name('tema8');

Route::get('/tema9', [vistacontroler::class, 'vista10'])->name('tema9');

Route::get('/tema10', [vistacontroler::class, 'vista11'])->name('tema10');

Route::get('/tema11', [vistacontroler::class, 'vista12'])->name('tema11');

Route::get('/tema12', [vistacontroler::class, 'vista13'])->name('tema12');

Route::get('/tema13', [vistacontroler::class, 'vista14'])->name('tema13');

Route::get('/tema14', [vistacontroler::class, 'vista15'])->name('tema14');

Route::get('/tema15', [vistacontroler::class, 'vista16'])->name('tema15');

Route::get('/tema16', [vistacontroler::class, 'vista17'])->name('tema16');

Route::get('/tema17', [vistacontroler::class, 'vista18'])->name('tema17');

Route::get('/tema18', [vistacontroler::class,'vista19'])->name('tema18');
    