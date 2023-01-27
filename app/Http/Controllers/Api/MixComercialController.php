<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MixComercial;

class MixComercialController extends Controller
{
    
    public function index()
    {
        $mixComercial = MixComercial::all();
        return $mixComercial;
    }

    
    public function store(Request $request)
    {
        $mixComercial = new MixComercial();
        $mixComercial->nombre_mix = $request->nombre_mix;
        $mixComercial->descripcion_mix = $request->descripcion_mix;
        $mixComercial->mix_padre = $request->mix_padre;

        $mixComercial->save();
    }

    
    public function show($id)
    {
        $mixComercial = MixComercial::find($id);
        return $mixComercial;
    }

    
    public function update(Request $request, $id_mix_comercial)
    {
        $mixComercial = MixComercial::findOrFail($id_mix_comercial);
        $mixComercial->nombre_mix = $request->nombre_mix;
        $mixComercial->descripcion_mix = $request->descripcion_mix;
        $mixComercial->mix_padre = $request->mix_padre;

        $mixComercial->update();
        return $mixComercial;
    }

    
    public function destroy($id)
    {
        $mixComercial = MixComercial::destroy($id);
        return $mixComercial;
    }
}
