<?php

use Illuminate\Support\Facades\Route;
use App\Models\universidad;
use App\Models\datoalumno;


Route::get('/', function () {
    $uni= new universidad();
    $uni->nombre ="UNIVERSIDAD POLITECNICA DE TECAMAC";
    $uni->carrera="INGENIERIA EN SOFTWARE";
    $uni->periodo="Enero-Abril 2022";
    //////////////////////////////////
    $datosa=new datoalumno();
    $datosa->nombreivan="Luis Ivan Tenorio Garcia";
    $datosa->correoivan="luis_1320114181@uptecamac.edu.mx";
    $datosa->celivan='5610910545';
    /////////////////////////////////
    $datosa->nombresamuel="Erik Samuel Hernandez Garcia";
    $datosa->correosamuel="erik_1320114042@uptecamac.edu.mx";
    $datosa->celsamuel='5610910545547074139';
    return view('blog.index',['uni'=>$uni],['datosa'=>$datosa]);
})->name('inicio');

Route::get('/tema1', function(){
    return view('blog.tema1');
})->name('tema1');

Route::get('/tema2', function(){
    return view('blog.tema2');
})->name('tema2');

Route::get('/tema3', function(){
    return view('blog.tema3');
})->name('tema3');

Route::get('/tema4', function(){
    return view('blog.tema4');
})->name('tema4');

Route::get('/tema5', function(){
    return view('blog.tema5');
})->name('tema5');

Route::get('/tema6', function(){
    return view('blog.tema6');
})->name('tema6');

Route::get('/tema7', function(){
    return view('blog.tema7');
})->name('tema7');

Route::get('/tema8', function(){
    return view('blog.tema8');
})->name('tema8');

Route::get('/tema9', function(){
    return view('blog.tema9');
})->name('tema9');