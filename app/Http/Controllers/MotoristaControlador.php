<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Motorista;
use Auth;
class MotoristaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motoristas = Motorista::all();
        return view('motoristas', compact('motoristas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Motorista::create([
            'nome' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'numero_cnh' => $request->input('numero_cnh'),
            'sexo' => $request->input('sexo'),
            'tempo_profissao' => $request->input('tempo_profissao'),
            'categoria' => $request->input('categoria'),
            'user_id' => Auth::user()->id,
        ]);

        $mensagem = "Motorista cadastrado com sucesso";
        Session::flash('status', $mensagem);
        return redirect()->route('motoristas_index');
    }

      public function mostrarform()
    {
        return view('motoristas_cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motorista = Motorista::find($id);
        return view('motoristas_edit', compact('motorista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $motorista = Motorista::find($request->input('id'));
        $motorista->nome = $request->input('name');
        $motorista->cpf = $request->input('cpf');
        $motorista->telefone = $request->input('telefone');
        $motorista->numero_cnh = $request->input('numero_cnh');
        $motorista->sexo = $request->input('sexo');
        $motorista->tempo_profissao = $request->input('tempo_profissao');
        $motorista->categoria = $request->input('categoria');
        





        $motorista->save();
        return redirect()->route('motoristas_index');
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
        Motorista::destroy($id);
        return redirect()->route('motoristas_index');
    }

    public function mostrar()
    {
        $motoristas = Motorista::all();
        return view('index', compact('motoristas'));
    }

     public function avaliacao(Request $request)
    {
        Motorista::avaliacao([
            'motorista_id' => $request->input('motorista_id'),
            'nota' => $request->input('nota'),
        ]);

    }
}
