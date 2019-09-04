<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\DisciplinaRequest;
use Illuminate\Support\Facades\Input;
use App\Disciplina;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class DisciplinaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('painel.listar-disciplina');
    }

    public function insert(DisciplinaRequest $request){
        // Validação dos dados
        $nome                    = $request->input('nome');

        DB::table('disciplina')->insert(

        ['nome' => $nome]);

        // Post Message
        $request->session()->flash('message', 'disciplina inserida com sucesso');
        return Redirect::to('inserir-disciplina');
    }

    public function listar(){

    $disciplina = \App\Disciplina::All();
    // ================= SEGUNDA =============== //
    //$seg_1t = \App\Disciplina::All();
    //$seg_2t = \App\Disciplina::All();
    //$seg_3t = \App\Disciplina::All();
    //$seg_4t = \App\Disciplina::All();
    //$seg_5t = \App\Disciplina::All();
    // ================= TERÇA =============== //
    //$terc_1t = \App\Disciplina::All();
    //$terc_2t = \App\Disciplina::All();
    //$terc_3t = \App\Disciplina::All();
    //$terc_4t = \App\Disciplina::All();
    //$terc_5t = \App\Disciplina::All();
    // ================= QUARTA =============== //
    //$quart_1t = \App\Disciplina::All();
    //$quart_2t = \App\Disciplina::All();
    //$quart_3t = \App\Disciplina::All();
    //$quart_4t = \App\Disciplina::All();
    //$quart_5t = \App\Disciplina::All();
    // ================= QUINTA =============== //
    //$quint_1t = \App\Disciplina::All();
    //$quint_2t = \App\Disciplina::All();
    //$quint_3t = \App\Disciplina::All();
    //$quint_4t = \App\Disciplina::All();
    //$quint_5t = \App\Disciplina::All();
    // ================= SEXTA =============== //
    //$sext_1t = \App\Disciplina::All();
    //$sext_2t = \App\Disciplina::All();
    //$sext_3t = \App\Disciplina::All();
    //$sext_4t = \App\Disciplina::All();
    //$sext_5t = \App\Disciplina::All();
    // ================= SEXTA =============== //
    return view('painel.inserir-disciplina', compact('disciplina'));

    }

    public function edit($id){

        $disciplina = \App\Disciplina::find($id);
        return view('painel.diciplina-details', ['disciplina'=>$disciplina]);

    }

    public function destroy($id, Request $request)
    {
      //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
      \App\Horarios::destroy($id);
      DB::table('disciplina')->delete($id);

      $request->session()->flash('message', 'Disciplina Deletada com Sucesso');
      return Redirect::to('inserir-disciplina');
    }
}
