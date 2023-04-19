<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AnamneseController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\FormaController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\PacoteController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\CompraController;
use App\Models\Servico;

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

Route::get('/user', [UserController::class, 'edit'])->middleware('auth');
Route::put('/user', [UserController::class, 'update'])->middleware('auth');
Route::get('/user/password', [UserController::class, 'alterpass'])->middleware('auth');
Route::put('/user/password', [UserController::class, 'updatepass'])->middleware('auth');


Route::get('/cliente', [ClienteController::class, 'create'])->middleware('auth');
Route::post('/cliente', [ClienteController::class, 'store'])->middleware('auth');
Route::get('/clientes', [ClienteController::class, 'list'])->middleware('auth');
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->middleware('auth');
Route::get('/cliente/edit/{id}', [ClienteController::class, 'edit'])->middleware('auth');
Route::put('/cliente/edit/{id}', [ClienteController::class, 'update'])->middleware('auth');
Route::post('/cliente/image/{id}', [ClienteController::class, 'addimage'])->middleware('auth');
Route::post('/assinatura/{id}', [GeralController::class, 'assinatura'])->middleware('auth');

Route::get('/anamnese/{id}', [AnamneseController::class, 'show'])->middleware('auth');
Route::get('/anamnese/preencher/{id}', [AnamneseController::class, 'create'])->middleware('auth');
Route::get('/anamnese/edit/{id}', [AnamneseController::class, 'edit'])->middleware('auth');
Route::post('/anamnese/{id}', [AnamneseController::class, 'store'])->middleware('auth');
Route::put('/anamnese/{id}', [AnamneseController::class, 'update'])->middleware('auth');
Route::post('/anamnese/perimetria/{id}', [AnamneseController::class, 'addPerimetria'])->middleware('auth');
Route::put('/anamnese/perimetria/{id}', [AnamneseController::class, 'updatePerimetria'])->middleware('auth');
Route::post('/anamnese/adipometria/{id}', [AnamneseController::class, 'addAdipometria'])->middleware('auth');
Route::put('/anamnese/adipometria/{id}', [AnamneseController::class, 'updateAdipometria'])->middleware('auth');

Route::get('/geral/{id}', [GeralController::class, 'show'])->middleware('auth');
Route::post('/geral/{id}', [GeralController::class, 'store'])->middleware('auth');  
Route::get('/geral/view/{id}', [GeralController::class, 'view']);
Route::post('/whats/{id}', [GeralController::class, 'whats'])->middleware('auth');

Route::get('/facial/{id}', [FaceController::class, 'show'])->middleware('auth');
Route::get('/facial/preencher/{id}', [FaceController::class, 'create'])->middleware('auth');
Route::post('/facial/{id}', [FaceController::class, 'store'])->middleware('auth');
Route::get('/facial/edit/{id}', [FaceController::class, 'edit'])->middleware('auth');
Route::put('/facial/{id}', [FaceController::class, 'update'])->middleware('auth');

Route::post('/note/{ts}/{id}', [NoteController::class, 'store'])->middleware('auth');
Route::delete('/note/{id}', [NoteController::class, 'delete'])->middleware('auth');

Route::get('/endereco/{id}', [EnderecoController::class, 'view'])->middleware('auth');
Route::post('/endereco/{id}', [EnderecoController::class, 'store'])->middleware('auth');

Route::get('/forma', [FormaController::class, 'create'])->middleware('auth');
Route::post('/forma', [FormaController::class, 'store'])->middleware('auth');
Route::get('/forma/{id}', [FormaController::class, 'edit'])->middleware('auth');
Route::put('/forma/{id}', [FormaController::class, 'update'])->middleware('auth');
Route::get('/formas', [FormaController::class, 'list'])->middleware('auth');

Route::get('/servico', [ServicoController::class, 'create'])->middleware('auth');
Route::post('/servico', [ServicoController::class, 'store'])->middleware('auth');
Route::get('/servico/{id}', [ServicoController::class, 'edit'])->middleware('auth');
Route::put('/servico/{id}', [ServicoController::class, 'update'])->middleware('auth');
Route::get('/servicos', [ServicoController::Class, 'list'])->middleware('auth');

Route::get('/pacote', [PacoteController::class, 'create'])->middleware('auth');
Route::post('/pacote', [PacoteController::class, 'store'])->middleware('auth');
Route::get('/pacote/{id}', [PacoteController::class, 'show'])->middleware('auth');
Route::get('/pacote/edit/{id}', [PacoteController::class, 'edit'])->middleware('auth');
Route::put('/pacote/{id}', [PacoteController::class, 'update'])->middleware('auth');
Route::get('/pacotes', [PacoteController::class, 'list'])->middleware('auth');
Route::post('/pacote/add/{id}', [PacoteController::class, 'add'])->middleware('auth');
Route::delete('/pacote/item/{id}/{item_id}', [PacoteController::class, 'remove'])->middleware('auth');

Route::post('/agenda', [AgendaController::class, 'store'])->middleware('auth');
Route::post('/fecharagenda', [AgendaController::class, 'fecharagenda'])->middleware('auth');
Route::get('/cancelaragenda/{id}', [AgendaController::class, 'cancelaragenda'])->middleware('auth');
Route::get('/agenda/{id}', [AgendaController::class, 'show'])->middleware('auth');
Route::post('/agenda/{id}', [AgendaController::class, 'executar'])->middleware('auth');
Route::post('/agenda/compra/{id}', [AgendaController::class, 'vincular'])->middleware('auth');
Route::post('/agenda/vinc/{id}', [AgendaController::class, 'cliente'])->middleware('auth');

Route::get('/compra/{id}', [CompraController::class, 'show'])->middleware('auth');
Route::post('/compra/servico/{id}', [CompraController::class, 'addservico'])->middleware('auth');
Route::post('/compra/pacote/{id}', [CompraController::class, 'addpacote'])->middleware('auth');
Route::post('/compra/pagamento/{id}', [CompraController::class, 'addpagto'])->middleware('auth');
Route::delete('/compra/{tipo}/{id}', [CompraController::class, 'deletar'])->middleware('auth');



Route::Get('/teste', function() {
    return view('teste');
});

Route::get('/', function () {
    $servicos = Servico::all();
    return view('dashboard', ['servicos' => $servicos]);
})->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');
    })->name('dashboard');
});
