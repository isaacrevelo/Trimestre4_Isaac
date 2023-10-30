<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;

class VacanteController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'descripcion'=>'required|string|min:10|max:255|',
            'cantidad_vacantes'=>'required|integer|min:2|max:30',
            'salario'=>'required|numeric|min:10|max:9999999'
        ]);

        Vacante::create([
            'descripcion'=>$request->descripcion,
            'cantidad_vacantes'=>$request->cantidad_vacantes,
            'salario'=>$request->salario
        ]);

        return redirect()->back()
        ->with('success','Vacante creada');
    }
    public function index(Request $request){
        $vacantes = Vacabte::get();
        return view('vacante.index', ['vacante' => $vacantes]);
    }
}
