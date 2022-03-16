<?php

namespace App\Http\Controllers;
use App\Models\SiteContato;
use Illuminate\Http\Request;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email'); 
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');

        // //print_r($contato->getAttributes());
        // $contato->save();
        //$contato = new SiteContato();
        //$contato->fill($request->all());
        //$contato->save();
        $motivo_contatos = MotivoContato::all();
        

        return view('site.contato', ['titulo' => 'Contato (teste)','motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request){
        //validação do request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'

        ]);
        //
        //SiteContato::create($request->all());
    }
}
