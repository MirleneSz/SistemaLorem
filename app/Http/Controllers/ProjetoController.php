<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


use App\Models\Projeto;



class ProjetoController extends Controller
{

    public function index(){

        $projeto = new Projeto();
        //return ($projeto->all());
        return view('projeto.index')->with(['projetos'=>$projeto->all()]);
        }

    public function store(Request $request){

       $collection=collect($request->all())->except('_token');

       $projeto = new Projeto;

       $insert = $projeto->create($collection->all());

       if ($insert){
           return redirect()->route('home.projeto')
           ->with('success','Projeto inserido com suceso!');
       }
    }

    public function show(){

        $projeto = new Projeto();

        return view('home')->with(['projetos'=>$projeto->all()]);
    }

}
