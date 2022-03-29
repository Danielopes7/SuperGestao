<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras =[
            'nome' => 'required|min:3|max:40',
            'email' => 'email|unique:users',
            'senha' => 'required|max:30'
        ];

        $feedback =[
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 40 caracteres',
            'required' => 'O campo :attribute deve ser preenchido',
            'email.unique' => 'O nome informado já está em uso',
            'email.email' => 'O e-mail não é valido'
        ];

        $request->validate($regras, $feedback);

        $user = new User();
        $user->name = $request->get('nome');
        $user->email = $request->get('email');
        $user->password = $request->get('senha');
        $user->save();
        
        return redirect()->route('site.login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
