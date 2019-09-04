<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagensRequest;
use Illuminate\Support\Facades\Input;
use App\Imagens;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class ImagensController extends Controller
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
        return view('painel.inserir-informacao');
    }

    public function insert(Request $request){
        $file_principal           = Input::file('foto');
        $destinationPath          = 'img-imagens/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('foto')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $image                   = $request->file('foto');
        $breve_descricao         = $request->input('breve_descricao');
        $descricao               = $request->input('descricao');
        $link_informacao         = $request->input('link_informacao');

        DB::table('imagens')->insert(

        ['nome' => $nome,  'foto' => $fileName_principal, 'breve_descricao' => $breve_descricao, 'descricao' => $descricao, 'link_informacao' => $link_informacao]
        );
        // Post Message
        $request->session()->flash('message', 'Foto Inserido com Sucesso');
        return Redirect::to('listar-foto');
    }

    public function listar(){

        $foto = \App\Imagens::All();
        return view('painel.listar-foto', compact('foto'));
    }

    //editar Foto -- > Fotodetails
    public function edit($id){

        $foto = \App\Imagens::find($id);
        return view('painel.imagensdetails', ['foto'=>$foto]);

    }

    public function listhome(){

        $imagem1 = DB::table('imagens')
                            ->offset(10)
                            ->limit(5)
                            ->get();
        return view('/', compact('imagem1'));

    }

    public function update($id, Request $request){

        $file_principal           = Input::file('foto');
        $destinationPath          = 'img-imagens/';
        $fileName_principal       = $file_principal->getClientOriginalName();
        Input::file('foto')->move($destinationPath, $fileName_principal);

        // Validação dos dados
        $nome                    = $request->input('nome');
        $image                   = $request->file('foto');
        $breve_descricao         = $request->input('breve_descricao');
        $descricao               = $request->input('descricao');
        $link_informacao         = $request->input('link_informacao');

          DB::table('imagens')
                  ->where('id', $id)
                  ->update(
                      ['nome' => $nome,  'foto' => $fileName_principal, 'breve_descricao' => $breve_descricao, 'descricao' => $descricao, 'link_informacao' => $link_informacao]
                      );

      $request->session()->flash('message', 'Foto Atualizado com Sucesso!');
      return Redirect::to('listar-foto');


    }

    public function destroy($id, Request $request){

        $file_principal = DB::table('imagens')->value('nome', 'foto', 'breve_descricao', 'descricao', 'link_informacao');
        //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
        \App\Imagens::destroy($id);
        DB::table('imagens')->delete($id);
        File::delete('img-Imagens/'.$file_principal);

       $request->session()->flash('message', 'Imagem Excluído com sucesso');
       return Redirect::to('listar-foto');
    }

    public function info($id){

      return view('template-site.modal-informe-home', ['imagem1'=>$imagem1]);
    }
}
