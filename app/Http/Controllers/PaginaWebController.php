<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PaginaWebController extends Controller
{
    public function verPaginaWeb(){
        $data = [
            'personas' => Persona::all(),
            'productos' => ''
        ];
        return view('web.pagina-web-principal', compact('data'));
    }
}
//dd($data);