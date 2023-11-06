<?php

namespace App\Http\Controllers;

use App\Models\tb_estados;
use App\Models\tb_municipios;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UsuariosController extends BaseController
{
    //----------------Combos dinamicos: Estados------------
    public function registro()
    {
        $estados = tb_estados::all();

        return view("datos/registro")
            ->with(['estados' => $estados]);
    }
    //----------------JavaScript de los municipios----------
    public function js_municipios(Request $request)
    {
        $id_estado = $request->get('id_estado');
        $municipios = tb_municipios::where('id_estado', $id_estado)->get();

        return view("datos/js_municipios")
            ->with(['municipios' => $municipios]);


    }



       // -----------------------------------------------------------------
            // -------------------Combos dinamicos: Formulario------------------
            // -----------------------------------------------------------------

            public function form01(){
                $estados = tb_estados::all();

                return view("datos/formulario01")
                ->with(['estados'=>$estados]);
            }

            public function js_estudio(){
                return view("datos/js_estudio");
            }
            public function js_trabajo(){
                return view("datos/js_trabajo");
            }
}
