<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProgramacaoRequest;
use Illuminate\Support\Facades\Input;
use App\Programacao;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class ProgramacaoController extends Controller
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
        return view('painel.inserir-programacao');
    }

    public function insert(ProgramacaoRequest $request){
        $file_principal           = Input::file('foto');
        $destinationPath          = 'img-evento/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('foto')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $image                   = $request->file('foto');
        $assunto                 = $request->input('assunto');
        $informacoes             = $request->input('informacoes');
        $destinado               = $request->input('destinado');
        $data_evento             = $request->input('data_evento');

        DB::table('programacao')->insert(

        ['nome' => $nome,  'foto' => $fileName_principal, 'assunto' => $assunto, 'informacoes' => $informacoes, 'destinado' => $destinado, 'data_evento' => $data_evento]
        );

        // Post Message
        $request->session()->flash('message', 'programação Inserido com Sucesso');
        return Redirect::to('listar-programacao');
    }

    public function listarProgramacao(){

        $programacao = \App\Programacao::All();
        return view('painel.listar-programacao', compact('programacao'));

    }

    //editar banner -- > bannerdetails
    public function edit($id){

        $programacao = \App\Programacao::find($id);
        return view('painel.programacao-details', ['programacao'=>$programacao]);

    }

    public function update($id, ProgramacaoRequest $request){

        $file_principal           = Input::file('foto');
        $destinationPath          = 'img-evento/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('foto')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                       = $request->input('nome');
        $imagem                     = $request->file('foto');


          DB::table('programacao')
                  ->where('id', $id)
                  ->update(
                  ['nome' => $nome,'imagem' => $fileName_principal]
                );

      $request->session()->flash('message', 'Foto Atualizado com Sucesso!');
      return Redirect::to('listar-programacao');


    }

    public function destroy($id, Request $request){

        $file_principal = DB::table('programacao')->value('nome', 'foto', 'assunto', 'informacoes', 'destinado', 'data_evento');
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\Programacao::destroy($id);
        DB::table('programacao')->delete($id);
        File::delete('img-evento/'.$file_principal);

       $request->session()->flash('message', 'Foto Excluído com sucesso');
       return Redirect::to('listar-programacao');
    }

}
