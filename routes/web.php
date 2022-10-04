<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PessoaController;

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
    return redirect()->route('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('dashboard')->middleware((['auth']))
    ->group( function(){
        Route::get('/',function(){
            return view('dashboard');
        })->name('dashboard');
    });


/*
|--------------------------------------------------------------------------
| Cadastro de pessoa
|--------------------------------------------------------------------------
| Athyla Guilherme - 19-09-2022
*/
Route::prefix('cadastro-de-pessoa')->middleware(['auth'])->controller(PessoaController::class)
->group(function ()
{
    Route::get('/', 'index')->name('pessoa.index');
    Route::get('/novo', 'create')->name('pessoa.create');
    Route::get('/editar/{id}', 'edit')->name('pessoa.edit');
    Route::get('/mostrar/{id}', 'show')->name('pessoa.show');
    Route::post('/cadastrar', 'store')->name('pessoa.store');
    Route::post('/atualizar/{id}', 'update')->name('pessoa.update');
    Route::get('/deletar/{id}', 'destroy')->name('pessoa.destroy');
});


require __DIR__.'/auth.php';
