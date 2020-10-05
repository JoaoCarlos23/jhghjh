<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// //aqui abaixo temos um exemplo criado na aula, pra rota
// Route::get('/contato', function(){ 

//     return "Contato"; 

// });


// //passa um id na rota e ele vai pro contato onde é o id passado. se nao passar, por padrao vai ser null
// Route::get('/contato/{id}', function($id = null){ 

//     return "Contato id = $id"; 

// });

// //aqui a gente criou uma funcao post pro formulario enviar
// Route::post('/contato', function(){ 

//     return "Contato POST"; 

// });


// //atualização de dados
// Route::put('/contato', function(){

//     return 'COntato PUT';
// });

//------------------EXEMPLO PROFESSOR ABAIXO:------



// // Route::get('/', function () {
// //     return view('welcome');
// // });

// // Route::get('/contato/{id?}', 'ContatosController@index');

// // Route::post('/contato', 'ContatosController@criar');

// // Route::put('/contato', 'ContatosController@editar');

// ---------------------------------------------------------


//EXERCICIO 1 - ROTAS DE PRODUTOS

//Aqui ele faz um get pra requisitar a pagina "HOME"(Welcome) quando nao tem nenhuma rota(padrao)
// Route::get('/', function () {
//     return view('welcome');
// });

// exemplo de rota pra funcao index:(MAIS PRA GET)
// Route::post('/produto','ContatosController@produto.index'); ai vc deve criar uma funcao criar produto.index

// ---------------------ROTAS DE exemplo:---------------

// Route::get('/contato','ContatosController@index');
//  Route::get('/produto','ContatosController@produtoIndex');
// Route::post('/produto','ContatosController@criar');
// Route::put('/produto', 'ContatosController@editar');



// ---------------------ROTAS DE CURSO:---------------

Route::group(['middleware'=>'auth'],function(){  //inicio da sessao de login e registro, controle automatico

//as mensagens de login, registro ta tudo em ingles, pra acessar vai em  resouuces,criar pasta pt-br
//ir em config / app e mudar o locale pra pt_br(pasta criada)



Route::get('/admin/cursos', 'Admin\CursoController@index')
->name('admin.cursos'); //aqui e o apelido pra rota, caso a 1 ela fique fora

Route::get('/admin/cursos/adicionar','Admin\CursoController@adicionar') //create
->name('admin.cursos.adicionar');

Route::post('/admin/cursos/salvar','Admin\CursoController@salvar') //store (post)
->name('admin.cursos.salvar');

// id é obrigatorio passar pra editar qual curso é
Route::get('/admin/cursos/editar/{id}', 'Admin\CursoController@editar') //edit(padrao e edit em vez de 'editar')
->name('admin.cursos.editar');

Route::put('/admin/cursos/atualizar/{id}', 'Admin\CursoController@atualizar') //edit(padrao e edit em vez de 'editar')
->name('admin.cursos.atualizar');

Route::delete('/admin/cursos/deletar/{id}', 'Admin\CursoController@deletar') //padrao destroy no laravel
->name('admin.cursos.deletar');



// ---------------------ROTAS DE PRODUTO:---------------

Route::get('/produtos','ProdutoController@index')
->name('admin.produtos');

Route::get('/produtos/adicionar','ProdutoController@adicionar')
->name('admin.produtos.adicionar');

Route::post('/produtos/salvar','ProdutoController@salvar')
->name('admin.produtos.salvar');


//aqui na edição vamos criar 2 rotas de edição: uma pra ir pra pagina e outra de acao de formulario:

Route::get('/produtos/editar/{id}', 'ProdutoController@editar') //aqui vai ser a pagina
->name('admin.produtos.editar');

Route::put('/produtos/atualizar/{id}', 'ProdutoController@atualizar') //aqui vai ser a ação
->name('admin.produtos.atualizar');


// -------------------ROTAS DE HOME:---------------------------

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


}); //final da sessao de login e registro

Auth::routes(); //de login com os camando do jonas pra login laravel

