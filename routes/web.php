<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//############################################### PAGINA PRINCIPAL ##########################################
Route::get('/', 'SiteController@home')->name('/');

Route::get('/horarios', 'SiteController@horarios')->name('/horario');

Route::get('/informes', 'SiteController@informes')->name('/informes');

Route::get('/programacao', 'SiteController@programacao')->name('/programacao');

Route::get('/galeria', 'SiteController@galeria')->name('/galeria');

Route::get('/login', function () {
    $imagem1 = \App\Imagens::All();
    return view('layouts.app', compact('imagem1'));
});
Route::get('/login-app-estudante', function () {
    return view('app-estudante.login-estudante-app');
});
//############################################### PAGINA PRINCIPAL ##########################################


//###############################################INSERIR##########################################
Route::get('/inserir-trabalho', function () {
    $disciplina = \App\Disciplina::All();
    $turma      = \App\Turma::All();
    return view('painel.inserir-trabalho', compact('disciplina', 'turma'));
});
Route::get('/inserir-programacao', function () {
    return view('painel.inserir-programacao');
});
Route::get('/inserir-slide', function () {
    return view('painel.inserir-slide');
});
Route::get('/inserir-informacao', function () {
    return view('painel.inserir-informacao');
});
Route::get('/inserir-disciplina', function () {
    $disciplina = \App\Disciplina::All();
    return view('painel.inserir-disciplina', compact('disciplina'));
});
Route::get('/inserir-turma', function () {
  $turma = \App\Turma::All();
    return view('painel.inserir-turma', compact('turma'));
});
Route::get('/inserir-horario', function () {
    $turma = \App\Turma::All();
    return view('painel.inserir-horario', compact('turma'));
});
//###############################################INSERIR##########################################


//###############################################LISTAR##########################################

Route::get('/listar-trabalho', function () {
    return view('painel.listar-trabalho');
});
Route::get('/listar-slide', function () {
    return view('painel.listar-slide', compact('banner'));
});
Route::get('/listar-foto', function () {
    return view('painel.listar-foto', compact('foto'));
});
Route::get('/listar-turma', function () {
    return view('painel.listar-turma', compact('turma'));
});
Route::get('/listar-programacao', function () {
    return view('painel.listar-programacao', compact('programacao'));
});
Route::get('/listar-disciplina', function () {
    return view('painel.listar-disciplina', compact('disciplina'));
});
Route::get('/listar-horarios', function () {
    return view('painel.listar-horario', compact('horario', 'id_turma', 'segunda', 'terca', 'quarta', 'quinta', 'sexta'));
});
//###############################################LISTAR##########################################



//###############################################LISTAR##########################################

Route::resource('trabalho', 'TrabalhoController', compact('disciplina', 'turma'));
Route::resource('edittrabalho', 'TrabalhoController', compact('disciplina'));
Route::resource('deletartrabalho', 'TrabalhoController', compact('disciplina'));

Route::resource('foto', 'ImagensController', compact('foto'));
Route::resource('editfoto', 'ImagensController', compact('foto'));
Route::resource('deletarfoto', 'ImagensController', compact('foto'));

Route::resource('programacaoedit', 'ProgramacaoController', compact('programacao'));
Route::resource('editprogramacao', 'ProgramacaoController', compact('programacao'));
Route::resource('deletarprogramacao', 'ProgramacaoController', compact('programacao'));


Route::resource('turma', 'TurmaController', compact('turma'));
Route::resource('editturma', 'turmaController', compact('turma'));
Route::resource('deletarturma', 'turmaController', compact('turma'));


Route::resource('banner', 'ControllerBanner', compact('banner'));
Route::resource('editbanner', 'ControllerBanner', compact('banner'));
Route::resource('deletarbanner', 'ControllerBanner', compact('banner'));


Route::resource('horariosedit', 'HorariosController', compact('id_turma'));
Route::resource('deletarhorarios', 'HorariosController', compact('id_turma'));


Route::resource('disciplina', 'DisciplinaController', compact('disciplina'));
Route::resource('disciplinaedit', 'DisciplinaController', compact('disciplina'));
Route::resource('deletardisciplina', 'DisciplinaController', compact('disciplina'));


Route::resource('detalhes', 'SiteController', compact('imagem'));




//entrar no painel
Route::get('/adm-painel', function () {
    return view('Auth.login');
});


Auth::routes();
Route::get('listar-foto', 'ImagensController@listar')->name('listar-foto');
Route::get('listar-trabalho', 'TrabalhoController@listarTrabalho')->name('listar-trabalho');
Route::get('listar-programacao', 'ProgramacaoController@listarProgramacao')->name('listar-Programacao');
Route::get('listar-slide', 'ControllerBanner@listar')->name('listar-banner');
Route::get('inserir-disciplina', 'DisciplinaController@listar')->name('inserir-disciplina');
Route::get('listar-horarios', 'HorariosController@listar')->name('listar-horario');
Route::get('inserir-turma', 'TurmaController@listar')->name('inserir-turma');




//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home-painel', 'PainelController@index')->name('home-painel');
Route::post('input-banner', 'ControllerBanner@insert')->name('input-banner');
Route::post('input-disciplina', 'DisciplinaController@insert')->name('input-disciplina');
Route::post('input-turma', 'TurmaController@insert')->name('input-turma');
Route::post('input-trabalho', 'TrabalhoController@insert')->name('input-trabalho');
Route::post('input-programacao', 'ProgramacaoController@insert')->name('input-programacao');
Route::post('input-horario', 'HorariosController@insert')->name('input-horario');
Route::post('input-imagens', 'ImagensController@insert')->name('input-imagens');



//############################################### SITE ##########################################


// --------------------- INFORMES ----------------------//
Route::get('detalhes1a', 'SiteController@detalhe1a')->name('/detalhe1a');
Route::get('detalhes1b', 'SiteController@detalhe1b')->name('/detalhe1b');
Route::get('detalhes1c', 'SiteController@detalhe1c')->name('/detalhe1c');
Route::get('detalhes2a', 'SiteController@detalhe2a')->name('/detalhe2a');
Route::get('detalhes2b', 'SiteController@detalhe2b')->name('/detalhe2b');
Route::get('detalhes2c', 'SiteController@detalhe2c')->name('/detalhe2c');
Route::get('detalhes3a', 'SiteController@detalhe3a')->name('/detalhe3a');
Route::get('detalhes3b', 'SiteController@detalhe3b')->name('/detalhe3b');
Route::get('detalhes3c', 'SiteController@detalhe3c')->name('/detalhe3c');
// --------------------- INFORMES ----------------------//

// --------------------- HORARIOS ----------------------//
Route::get('horarios1a', 'SiteController@horarios1a')->name('/horarios1a');
Route::get('horarios1b', 'SiteController@horarios1b')->name('/horarios1b');
Route::get('horarios1c', 'SiteController@horarios1c')->name('/horarios1c');
Route::get('horarios2a', 'SiteController@horarios2a')->name('/horarios2a');
Route::get('horarios2b', 'SiteController@horarios2b')->name('/horarios2b');
Route::get('horarios2c', 'SiteController@horarios2c')->name('/horarios2c');
Route::get('horarios3a', 'SiteController@horarios3a')->name('/horarios3a');
Route::get('horarios3b', 'SiteController@horarios3b')->name('/horarios3b');
Route::get('horarios3c', 'SiteController@horarios3c')->name('/horarios3c');
// --------------------- HORARIOS ----------------------//
