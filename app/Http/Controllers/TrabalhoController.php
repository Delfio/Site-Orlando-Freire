<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TrabalhoRequest;
use Illuminate\Support\Facades\Input;
use App\Trabalho;
use App\Disciplina;
use App\Turma;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class TrabalhoController extends Controller
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
        return view('painel.inserir-trabalho');
    }
    public function insert(Request $request){
        // Validação dos dados
        $nome                    = $request->input('nome');
        $assunto                 = $request->input('assunto');
        $data_entrega            = $request->input('data_entrega');
        $nome_disciplina         = $request->input('id_disciplina');//id disciplina
        $nome_turma              = $request->input('id_turma');//id turma
        $descricao               = $request->input('descricao');

        DB::table('trabalho')->insert(

        ['nome' => $nome, 'assunto' => $assunto, 'data_entrega' => $data_entrega, 'id_disciplina' =>$nome_disciplina, 'id_turma' => $nome_turma, 'descricao' => $descricao]
        );

        // Post Message
        $request->session()->flash('message', 'Trabalho Inserido com Sucesso');
        return Redirect::to('listar-trabalho');
    }

    public function listarTrabalho(){

        $trabalho = \App\Trabalho::All();
        return view('painel.listar-trabalho', compact('trabalho'));

    }
    public function edit($id){

        $trabalho = \App\Trabalho::Find($id);
        $disciplina = \App\Disciplina::All();
        $turma = \App\Turma::All();
        return view('painel.Trabalho-details', ['trabalho'=>$trabalho], compact('disciplina', 'turma'));
    }

    public function update($id, TrabalhoRequest $request){
        // Validação dos dados
        $nome                    = $request->input('nome');
        $assunto                 = $request->input('assunto');
        $data_entrega            = $request->input('data_entrega');
        $nome_disciplina         = $request->input('id_disciplina');//id disciplina
        $nome_turma              = $request->input('id_turma');//id turma
        $descricao               = $request->input('descricao');


          DB::table('trabalho')
                  ->where('id', $id)
                  ->update(
                  ['nome' => $nome, 'assunto' => $assunto, 'data_entrega' => $data_entrega, 'id_disciplina' =>$nome_disciplina, 'id_turma' => $nome_turma, 'descricao' => $descricao]
                  );



      $request->session()->flash('message', 'Trabalho Atualizado com Sucesso!');
      return Redirect::to('listar-trabalho');

    }
    public function destroy($id, Request $request){
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\Trabalho::destroy($id);
        DB::table('trabalho')->delete($id);

        $request->session()->flash('message', 'Trabalho deletado com sucesso');
        return Redirect::to('listar-trabalho');


      }
}
