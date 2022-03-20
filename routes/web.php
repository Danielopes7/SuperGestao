<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\LogAcessoMiddleware;
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

Route::middleware('log.acesso')->get('/','PrincipalController@principal')
    ->name('site.index');

Route::get('/sobre-nos','SobreNosController@sobrenos')->name('site.sobrenos');

Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::post('/contato','ContatoController@salvar')->name('site.contato');

Route::get('/login','LoginController@index')->name('site.login');
Route::post('/login','LoginController@autenticar')->name('site.login');

Route::middleware('autenticacao')->prefix('/app')->group(function(){

    Route::get('/produtos',function(){return 'produtos';})->name('app.produtos'); 
    Route::get('/fornecedores',function(){return 'fornecedores';})->name('app.fornecedores'); 
    Route::get('/clientes',function(){return 'clientes';})->name('app.clientes'); 
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');
    

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function(){
    echo 'Não existe <a href="'.route('site.index').'">Clique aqui</a>';
});


//Route::redirect('/rota2','/rota1');

// Route::get('/contato/{nome}/{categoria_id}', 
// function (
//     string $nome,
//     int $categoria_id = 1 
//        ) {
//         echo "Estamos aqui: $nome - $categoria_id";
//     }
// )->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
// ;
