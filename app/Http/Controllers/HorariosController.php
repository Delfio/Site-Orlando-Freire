<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HorariosRequest;
use Illuminate\Support\Facades\Input;
use App\Horarios;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;
class HorariosController extends Controller
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
     public function insert(Request $request){
         // Validação dos dados
         $id_turma                 = $request->input('id_turma');
         $seg_1t                   = $request->input('seg_1t');
         $seg_2t                   = $request->input('seg_2t');
         $seg_3t                   = $request->input('seg_3t');
         $seg_4t                   = $request->input('seg_4t');
         $seg_5t                   = $request->input('seg_5t');
         $terc_1t                  = $request->input('terc_1t');
         $terc_2t                  = $request->input('terc_2t');
         $terc_3t                  = $request->input('terc_3t');
         $terc_4t                  = $request->input('terc_4t');
         $terc_5t                  = $request->input('terc_5t');
         $quart_1t                 = $request->input('quart_1t');
         $quart_2t                 = $request->input('quart_2t');
         $quart_3t                 = $request->input('quart_3t');
         $quart_4t                 = $request->input('quart_4t');
         $quart_5t                 = $request->input('quart_5t');
         $quint_1t                 = $request->input('quint_1t');
         $quint_2t                 = $request->input('quint_2t');
         $quint_3t                 = $request->input('quint_3t');
         $quint_4t                 = $request->input('quint_4t');
         $quint_5t                 = $request->input('quint_5t');
         $sext_1t                  = $request->input('sext_1t');
         $sext_2t                  = $request->input('sext_2t');
         $sext_3t                  = $request->input('sext_3t');
         $sext_4t                  = $request->input('sext_4t');
         $sext_5t                  = $request->input('sext_5t');

         DB::table('horarios')->insert(

         ['id_turma' => $id_turma,  'seg_1t' => $seg_1t, 'seg_2t' => $seg_2t, 'seg_3t' => $seg_3t,
        'seg_4t' => $seg_4t, 'seg_5t' => $seg_5t, 'terc_1t' => $terc_1t, 'terc_2t' => $terc_2t, 'terc_3t' => $terc_3t, 'terc_4t' => $terc_4t,
        'terc_5t' => $terc_5t, 'quart_1t' => $quart_1t, 'quart_2t' => $quart_2t, 'quart_3t' => $quart_3t, 'quart_4t' => $quart_4t, 'quart_5t' => $quart_5t,
        'quint_1t' => $quint_1t, 'quint_2t' => $quint_2t, 'quint_3t' => $quint_3t, 'quint_4t' => $quint_4t, 'quint_5t' => $quint_5t, 'sext_1t' => $sext_1t, 'sext_2t' => $sext_2t, 'sext_3t' => $sext_3t,
        'sext_4t' => $sext_4t, 'sext_5t' => $sext_5t]
         );

         // Post Message
         $request->session()->flash('message', 'Horario inserido com Sucesso');
         return Redirect::to('listar-horarios');
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function listar(){
        $horario = \App\Horarios::All();
        $id_turma=\App\Horarios::All();
        $segunda=\App\Horarios::All();
        $terca=\App\Horarios::All();
        $quarta=\App\Horarios::All();
        $quinta=\App\Horarios::All();
        $sexta=\App\Horarios::All();
        return view('painel.listar-horario', compact('horario', 'id_turma', 'segunda', 'terca' ,'quarta'));
    }

    public function edit($id){

        $id_turma = \App\Horarios::find($id);
        return view('painel.horarios-details', ['id_turma'=>$id_turma]);

    }

    public function destroy($id, Request $request)
    {
      //example it.png, which is located in `public/uploads/masters/logocatagory_Computers` folder
      \App\Horarios::destroy($id);
      DB::table('horarios')->delete($id);

      $request->session()->flash('message', 'Horario Deletado com Sucesso');
      return Redirect::to('listar-horarios');
    }
}
