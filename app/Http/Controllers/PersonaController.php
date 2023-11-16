<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;

class PersonaController extends Controller
{
    public function listarPersona(){
        $mensaje = session('mensaje');
        if($mensaje){
            alert()->success('Operación exitosa!!!', $mensaje)->toToast();
        }
        $personas = Persona::all(); //sql nativo
        //dd($personas);
        //alert()->success('Operación exitosa!!!', 'Lista personas')->toToast();
        return view('lista-personas',compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }

    public function eliminarPersona(Request $request, $id_persona){
        //dd($id_persona); //1 //6
        $persona = Persona::find($id_persona);
        $persona->delete();

        return redirect()
        ->route('lista-personas')
        ->with('mensaje','Persona eliminada corectamente !!!');

        //dd($persona);   
    }

    public function editarPersona(Request $request, $id_persona){
        $persona = Persona::findOrFail($id_persona);
        //dd($persona);
        return view('editar-persona', compact('persona'));
    }

    public function actualizarPersona(Request $request, $id_persona){
        //dd($request);
        if($request->file('foto')){
            $uriFoto = $request->file('foto')->store('uploads','public');
        }else{
            $uriFoto = $request->get('fotoeditar');
        }
        $persona = Persona::where('personaID',$id_persona)->update(
            [
                'nombres' => $request->get('nombresDiego'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'),
                'bibliografia' => $request->get('bibliografia'),
                'foto' => $uriFoto,
                'documento' => $request->get('documento'),
                'celular' => $request->get('celular'),
            ]
        );
        return redirect()
        ->route('lista-personas')
        ->with('mensaje','Persona actualizada corectamente !!!');
    }
}
