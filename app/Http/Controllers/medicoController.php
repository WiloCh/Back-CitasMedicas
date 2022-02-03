<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicoModel;

class medicoController extends Controller
{
    public function index()
    {
        $medicos = medicoModel::all();
        return $medicos;
    }

    public function store(Request $request)
    {
        $medico = new medicoModel();
        $medico->md_nombre = $request->nombre;
        $medico->md_especialidad = $request->especialidad;

        $medico->save();
    }

    public function update(Request $request, $id)
    {
        $medico = medicoModel::findOrFail($id);
        $medico->md_nombre = $request->nombre;
        $medico->md_especialidad = $request->especialidad;

        $medico->save();

        return $medico;
    }

    public function destroy($id)
    {
       $medico = medicoModel::destroy($id);
       return $medico;
    }
}
