<?php

use Illuminate\Support\Facades\Route;

require base_path ("objetos/Quadrado.php");
require base_path ("objetos/Circulo.php");
require base_path ("objetos/Retangulo.php");
require base_path ("objetos/Triangulo.php");

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

Route::view ('/', 'inicial');

Route::get ("/calcular/triangulo/{v1}/{v2}/{v3}/", function (float $v3, float $v2, float $v1) { // Vêm invertidos
/*
    $parametros ["v1"] = $v1;
    $parametros ["v2"] = $v2;
    $parametros ["v3"] = $v3;
    $parametros ["area"] = "Ainda por implementar";
    $parametros ["perimetro"] = $v1 + $v2 + $v3;
    $parametros ["info"] = "Nada a acrescentar";
*/
    $figura = new objetos\Triangulo ($v1, $v2, $v3);
    return view ("Figura", ["figura" => $figura]);
});

Route::get ("/calcular/circulo/{v1}/", function (float $v1) {
    $figura = new objetos\Circulo ($v1);
    return view ("Figura", ["figura" => $figura]);
});

Route::get ("/calcular/quadrado/{v1}/", function (float $v1) {
    $figura = new objetos\Quadrado ($v1);
    return view ("Figura", ["figura" => $figura]);
});

Route::get ("/calcular/retangulo/{base}/{altura}/", function (float $altura, float $base) { // Vêm invertidos
    $figura = new objetos\Retangulo ($base, $altura);
    return view ("Figura", ["figura" => $figura]);
});

Route::fallback (function () {
    return "Não há referência a essa função ou conjunto de parâmetros para a função!";
});

