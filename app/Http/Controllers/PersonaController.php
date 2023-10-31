<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function listarPersona(){
        try{
            DB::connection()->getPdo();
            toast('Success Toast','success');
        }catch(Exception $ex){
            //toast('Success Toast','error');
            alert()->error('Error', $ex->getMessage())->toToast();
        }
        $personas = [
            [
                "personaID" => "1",
                "nombres" => "Adrian",
                "paterno" => "Lipa",
                "materno" => "Choque",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "documento" => "32145687",
                "celular" => "321456987",
            ],
            [
                "personaID" => "2",
                "nombres" => "Diego",
                "paterno" => "Lipa",
                "materno" => "Quispe",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "documento" => "32145687",
                "celular" => "987456321",            
            ],
            [
                "personaID" => "3",
                "nombres" => "Daniel",
                "paterno" => "Mamani",
                "materno" => "Quispe",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "documento" => "32145876",
                "celular" => "986574231",  
            ],
            [
                "personaID" => "4",
                "nombres" => "Naria",
                "paterno" => "Mamani",
                "materno" => "Mendez",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "documento" => "32154678",
                "celular" => "963258741",           
            ],
            [
                "personaID" => "5",
                "nombres" => "Wilmer",
                "paterno" => "Mamani",
                "materno" => "Marquina",
                "bibliografia" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                "foto" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "documento" => "3214587",
                "celular" => "321456987",    
            ]
    
            ];
        
        //dd($personas);
        return view('lista-personas',compact('personas'));
    }

    public function mostrarPersona(Request $request, $id_persona){
        //dd($request);
        return view('mostrar-persona', compact('id_persona'));
    }
}
