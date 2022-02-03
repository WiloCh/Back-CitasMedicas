<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacienteModel;

class pacienteController extends Controller
{
    public function index()
    {
        $pacientes = pacienteModel::all();
        return $pacientes;
    }

    public function store(Request $request)
    {
        $paciente = new pacienteModel();
        $paciente->pc_nombre = $request->nombre;
        $paciente->pc_edad = (int)$request->edad;
        $paciente->pc_telefono = (int)$request->telefono;

        $paciente->save();
    }

    public function update(Request $request, $id)
    {
        $paciente = pacienteModel::findOrFail($id);
        $paciente->pc_nombre = $request->nombre;
        $paciente->pc_edad = (int)$request->edad;
        $paciente->pc_telefono = (int)$request->telefono;

        $paciente->save();

        return $paciente;
    }

    public function destroy($id)
    {
       $paciente = pacienteModel::destroy($id);
       return $paciente;
    }
}
