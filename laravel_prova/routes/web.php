<?php

use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('cadastrar');
});

Route::get('cadastrar', function(){
    return view('cadastrar');
});
Route::POST('/cadastrar-usuario', function(Request $request){
    
    Usuario::create([
        'nome'=> $request->nome,
        'endereco'=> $request->endereco,
        'bairro'=> $request->bairro,
        'cep'=> $request->cep,
        'cidade'=> $request->cidade,
        'estado'=> $request->cidade
    ]);

    echo "Usuario cadastrado com SUCESSO!";
    echo "<br><br>";
    echo "<a href='/'><button>Voltar</button><a/>";
});

Route::get('/editar-usuario/{id}', function($id){

    $usuario = Usuario::find($id);

    return view('editar', ['produto' => $usuario ]);
});

Route::post('/editar-usuario/{id}', function(Request $request, $id){
    $usuario = Usuario::find($id);

    $usuario->update([
        'nome'=> $request->nome,
        'endereco'=> $request->endereco,
        'bairro'=> $request->bairro,
        'cep'=> $request->cep,
        'cidade'=> $request->cidade,
        'estado'=> $request->cidade
    ]);
    echo "Usuario cadastrado com SUCESSO!";
    echo "<br><br>";
    echo "<a href='/'><button>Voltar</button><a/>";
});

Route::get('/listar-usuario/{id}', function($id){

    $usuario = Usuario::find($id);

    return view('listar', ['usuario' => $usuario]);
});

Route::get('excluir-usuario/{id}', function($id){
    $usuario = Usuario::find($id);

    $usuario->delete();

    echo "usuario deletado com sucesso"
;} );