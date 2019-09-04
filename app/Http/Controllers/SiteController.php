<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImagensRequest;
use Illuminate\Support\Facades\Input;
use App\Imagens;
use App\Trabalho;
use App\Disciplina;
use App\Banner;
use App\Turma;
use App\Horarios;
use DB;
use File;
use Illuminate\Database\Eloquent\Model;
use validador;
use Session;
use Redirect;

class SiteController extends Controller
{
    public function home()
    {

      $imagem1 = DB::table('imagens')
                          ->limit(2)
                          ->get();

      $imagem2 = DB::table('imagens')
                          ->limit(2)
                          ->offset(2)->get();

      $imagem = \App\Imagens::All();

      //dd($imagem2);
      return view('/home',['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem]);

    }

    public function edit($id)
    {
      $imagem = \App\Imagens::find($id);
      //dd($imagem2);
      return view('detalhes-evento',['imagem'=>$imagem]);
    }


  public function horarios(){

          $imagem1 = DB::table('imagens')
                              ->limit(2)
                              ->get();

          $imagem2 = DB::table('imagens')
                              ->limit(2)
                              ->offset(2)->get();

          $imagem = \App\Imagens::All();

    return view('/horarios',['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem]);
  }



  public function informes(){

          $imagem1 = DB::table('imagens')
                              ->limit(2)
                              ->get();

          $imagem2 = DB::table('imagens')
                              ->limit(2)
                              ->offset(2)->get();

          $imagem = DB::table('imagens')
                              ->select('*')->limit(5)->get();

          $banner = DB::table('banner')->select('*')->get();

          $id_turma = DB::table('trabalho')->select('*')->get();
          //dd($banner);
    return view('/informes',['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'id_tura'=>$id_turma]);
  }

  public function programacao(){

          $imagem1 = DB::table('imagens')
                              ->limit(2)
                              ->get();

          $imagem2 = DB::table('imagens')
                              ->limit(2)
                              ->offset(2)->get();

          $imagem = DB::table('imagens')
                              ->limit(6)
                              ->offset(1)->get();

          $banner = DB::table('banner')->select('*')->get();

          $programacao = DB::table('programacao')->select('*')->get();
          //dd($banner);
    return view('/programacao',['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'programacao'=>$programacao]);
  }


  public function galeria(){


          $imagem1 = DB::table('imagens')
                              ->limit(2)
                              ->get();

          $imagem2 = DB::table('imagens')
                              ->limit(2)
                              ->offset(2)->get();

          $imagem = \App\Imagens::All();

          $banner = \App\Banner::All();

          //dd($imagem2);
          return view('/galeria',['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner]);
        }



  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% TRABALHOS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
  public function detalhe1a(){


    $imagem1 = DB::table('imagens')
                            ->limit(2)
                            ->get();

    $imagem2 = DB::table('imagens')
                            ->limit(3)
                            ->offset(2)->get();

    $imagem = DB::table('imagens')
                            ->limit(6)
                            ->offset(1)->get();

    $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano A';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe1b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano B';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe1c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano C';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe2a(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano A';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe2b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano B';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe2c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano C';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe3a(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano A';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe3b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano B';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }


  public function detalhe3c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano C';
    $turma = DB::table('trabalho')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informes-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'turma'=>$turma], compact('id_turma'));
  }

  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% TRABALHOS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%


  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% HORARIOS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
  public function horarios1a(){


    $imagem1 = DB::table('imagens')
                            ->limit(2)
                            ->get();

    $imagem2 = DB::table('imagens')
                            ->limit(3)
                            ->offset(2)->get();

    $imagem = DB::table('imagens')
                            ->limit(6)
                            ->offset(1)->get();

    $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano A';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios1b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano B';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios1c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Primeiro Ano C';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios2a(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano A';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios2b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano B';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios2c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Segundo Ano C';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios3a(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano A';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios3b(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano B';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }


  public function horarios3c(){


                $imagem1 = DB::table('imagens')
                                    ->limit(2)
                                    ->get();

                $imagem2 = DB::table('imagens')
                                    ->limit(3)
                                    ->offset(2)->get();

                $imagem = DB::table('imagens')
                                    ->limit(6)
                                    ->offset(1)->get();

                $banner = DB::table('banner')->select('*')->get();

    $id_turma = 'Terceiro ano C';
    $horarios = DB::table('horarios')
                          ->select('*')
                          ->where('id_turma', $id_turma)->get();
      return view('informe-horarios-turma', ['imagem1'=>$imagem1, 'imagem2'=>$imagem2, 'imagem'=>$imagem, 'banner'=>$banner, 'horarios'=>$horarios], compact('id_turma'));
  }

  //%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% HORARIOS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%



}
