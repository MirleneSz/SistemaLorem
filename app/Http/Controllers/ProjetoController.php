<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Projeto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProjetoFormRequest;
use DB;



class ProjetoController extends Controller
{

    public function __construct(){
    	//
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$projetos=DB::table('projeto')
            ->where('nome', 'LIKE', '%'.$query.'%')
            ->where('inicio', 'LIKE', '%'.$query.'%')
            ->where('termino', 'LIKE', '%'.$query.'%')
            ->where('valor', 'LIKE', '%'.$query.'%')
            ->where('risco', 'LIKE', '%'.$query.'%')
            ->where('participante', 'LIKE', '%'.$query.'%')
    		->paginate(7);
    		return view('pro.projeto.index', [
    			"projetos"=>$projetos, "searchText"=>$query
    			]);
    	}
    }

    public function create(){
    	return view('pro.projeto.create');
    }
 
    public function store(ProjetoFormRequest $request){
    	$projeto = new Projeto;
    	$projeto->nome=$request->get('nome');
    	$projeto->inicio=$request->get('inicio');
    	$projeto->termino=$request->get('termino');
    	$projeto->valor=$request->get('valor');
    	$projeto->risco=$request->get('risco');
    	$projeto->participantes=$request->get('participantes');
    	
    	$projeto->save();
    	return Redirect::to('pro/projeto');
    }

    public function show($id){
    	return view("pro.projeto.show", 
    		["projeto"=>Projeto::findOrFail($id)]);
    }

    public function edit($id){
    	return view("pro.projeto.edit", 
    		["projeto"=>Projeto::findOrFail($id)]);
    }

    public function update(ProjetoFormRequest $request, $id){
    	$projeto=Projeto::findOrFail($id);
    	
    
    	$projeto->nome=$request->get('nome');
    	$projeto->inicio=$request->get('inicio');
    	$projeto->termino=$request->get('termino');
    	$projeto->valor=$request->get('valor');
    	$projeto->risco=$request->get('risco');
    	$projeto->participantes=$request->get('participantes');
    	$projeto->update();
    	return Redirect::to('pro/projeto');
    }

    public function destroy($id){
    	$projeto=Projeto::findOrFail($id);
    	$projeto->update();
    	return Redirect::to('pro/projeto');
    }
}