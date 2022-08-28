<?php
use illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaController;
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
    return view('welcome');
});
// Pregunta N° 1

Route::get('/Metodo', function () {
    return view('gt');
});

Route::post('/Metodo', function (Request $request) {
    echo "Esto es un tipo de request POST"."<br>";
    return $request->input("nombre");
});

// Pregunta N° 2

Route::get('/suma/{a}/{b}', function (int $a,int $b) {
    return "Suma= ".($a+$b);
});

Route::get('/resta/{a}/{b}', function (int $a,int $b) {
    return "Resta= ".($a-$b);
});

Route::get('/multiplicacion/{a}/{b}', function (int $a,int $b) {
    return "Multiplicacion= ".($a*$b);
});

Route::get('/division/{a}/{b}', function (int $a,int $b) {
    if ($b==0) {
        echo "El Dividendo no debe ser igual a Cero";
    }
    else {
        return "Division= ".($a/$b);
    }
});

// Pregunta N° 3

Route::get('/sumar/{a}/{b}', function (int $a,int $b) {
    return view('ope',['operacion'=>'suma','a'=>$a,'b'=>$b]);
});

Route::get('/multiplicar/{a}/{b}', function (int $a,int $b) {
    return view('ope',['operacion'=>'multiplicacion','a'=>$a,'b'=>$b]);
});

// Pregunta N° 4

Route::get('/usuarios', [PaController::class,'usuario']);
Route::post('/login', [PaController::class,'datos'])->name('loginDatos');

// Pregunta N° 5

Route::get('/dato', function (Request $request) {
    return md5($request->input("Token"));
});