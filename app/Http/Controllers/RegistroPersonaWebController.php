<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;

class RegistroPersonaWebController extends Controller
{
    public function registroPersona(){
        //dd("Diego");
        return view('web.registro-persona-web');
    }

    public function guardarPersona(Request $request){
        //dd($request);
        $uriFoto= $request->file('foto')->store('uploads','public');
        try{

            $data = [
                'nombres' => $request->get('nombresDiego'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'),
                'bibliografia' => $request->get('bibliografia'),
                'foto' => $uriFoto,
                'documento' => $request->get('documento'),
                'celular' => $request->get('celular'),
            ];
            Persona::create($data);
            return redirect()
            ->route('lista-personas')
            ->with('mensaje','Persona registrada corectamente !!!');
        }catch(Exception $ex){
            dd($ex->getMessage());
            return redirect()
            ->route('registro.persona')
            ->with('mensaje',$ex->getMessage());
        }
    }
}
