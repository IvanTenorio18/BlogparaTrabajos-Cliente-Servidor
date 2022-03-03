<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\universidad;
use App\Models\datoalumno;
use App\Models\unidad1;
use App\Models\unidad2;
use routes\web;
class vistacontroler extends Controller
{
    //
    function vista1(){
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
    }
    ///////////////////////////////////////////////////////////////////////
    function vista2(){
        $unidadi=unidad1::all();
          $unidades=[];
          foreach ($unidadi as $unidadi) {

               $unidades[]=[
                    'titulo'=>$unidadi->titulo,
                    'contenido'=>$unidadi->contenido,
                    'imagen'=>$unidadi->imagen,
               ];
          }
        return view('blog.tema1',['unidades'=>$unidades]);
    }
/////////////////////////////////////////////////////////////////////////////
    function vista3(){
        $unidadii=unidad2::all();
          $unidades=[];
          foreach ($unidadii as $unidadii) {

               $unidades[]=[
                    'titulo'=>$unidadii->titulo,
                    'contenido'=>$unidadii->contenido,
                    'imagen'=>$unidadii->imagen,
               ];
          }
        return view('blog.tema2',['unidades'=>$unidades]);
    }
}
