<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TurmaRequest;
use Illuminate\Support\Facades\Input;
use App\Turma;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('painel.listar-turma');
    }

    public function insert(TurmaRequest $request)
    {
        $nome                    = $request->input('nome');
        $turno                   = $request->input('turno');

        DB::table('turma')->insert(

        ['nome' => $nome, 'turno' => $turno]);

        // Post Message
        $request->session()->flash('message', 'disciplina inserida com sucesso');
        return Redirect::to('inserir-turma');
    }

    public function listar(){

    $turma = \App\Turma::All();
    return view('painel.inserir-Turma', compact('turma'));

    }

    public function edit($id){

        $turma = \App\Turma::Find($id);
        return view('painel.turmas-details', ['turma'=>$turma], compact('turma'));
    }

    public function update($id, TurmaRequest $request){
        // Validação dos dados
        $nome                    = $request->input('nome');
        $turno                   = $request->input('turno');

          DB::table('turma')
                  ->where('id', $id)
                  ->update(
                  ['nome' => $nome, 'turno' => $turno]);



      $request->session()->flash('message', 'Turma Atualizado com Sucesso!');
      return Redirect::to('inserir-turma');

    }
    public function destroy($id, Request $request){
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\Turma::destroy($id);
        DB::table('Turma')->delete($id);

        $request->session()->flash('message', 'Turma deletado com sucesso');
        return Redirect::to('inserir-turma');


    }

}
