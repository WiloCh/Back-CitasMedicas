<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\citaModel;

class citaController extends Controller
{
    public function index()
    {
        $citas = citaModel::all();
        return $citas;
    }

    public function store(Request $request)
    {
        $cita = new citaModel();
        $cita->md_id = (int)$request->md_id;
        $cita->pc_id = (int)$request->pc_id;
        $cita->ct_fecha = strval($request->fecha);
        $cita->ct_hora = strval($request->hora);

        $cita->save();
    }

    public function update(Request $request, $id)
    {
        $cita = citaModel::findOrFail($id);
        $cita->md_id = (int)$request->md_id;
        $cita->pc_id = (int)$request->pc_id;
        $cita->ct_fecha = strval($request->fecha);
        $cita->ct_hora = strval($request->hora);

        $cita->save();

        return $cita;
    }

    public function destroy($id)
    {
       $citae = citaModel::destroy($id);
       return $cita;
    }
}
