<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{

    public function index()
    {
        $curso = new Curso();
        $cursos = Curso::All();
        return view("curso.index", [
            "curso" => $curso,
            "cursos" => $cursos
        ]);
    }

    public function store(Request $request)
    {
        if($request->get ("id") != ""){
            $curso = Curso::Find($request->get ("id"));
        } else {
            $curso = new Curso();
        }
        $curso->nome = $request->get ("nome");
        $curso->save();
        $request->session()->flash("status", "salvo");
        return redirect("/curso");
    }

    public function edit($id)
    {
        $curso = Curso::Find($id);
        $cursos = Curso::All();
        return view ("curso.index", [
            "curso" => $curso,
            "cursos" => $cursos
        ]);
    }

    public function destroy($id, Request $request)
    {
        Curso::destroy($id);
        $request->session()->flash("status", "excluido");
        return redirect("/curso");
    }
}
