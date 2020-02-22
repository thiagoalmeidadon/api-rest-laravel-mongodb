<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{


    public function index()
    {
        
        return Usuario::all();
        	    
    }

    public function salvar(Request $request)
    {
    	$dados = $request->all();

    	Usuario::create($dados);
    	return redirect()->route('exibe.usuario');
    	
    }

    public function update(Request $request, $id)
    {
    	Usuario::find($id)->update($request->all());
    	return $request->all();
    }

    public function delete(Request $request, $id)
    {
    	Usuario::find($id)->delete($request->all());
    	return Usuario::all();
    }


    public function testando()
    {
    	return "testando só";
    }


 




}
