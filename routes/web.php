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

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| INFYOM GRAFIC GENERATORI
|--------------------------------------------------------------------------
|
| Agarda biron qo'shimcha API yoki Oddiy CRUDning karkazini yaratish kerak bo'lsa
| foydalanish mumkin bo'lgan route lar to'plami shu bo'ladi.
| DEV rejimida yoqiq turushi mumkin, PROD rejimida esa o'chirish lozim!
|
*/

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

    Route::post(
        'generator_builder/generate-from-file',
        '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
    )->name('io_generator_builder_generate_from_file');
/*
|--------------------------------------------------------------------------
| INFYOM GRAFIC GENERATORI Routelarni tugadi
|--------------------------------------------------------------------------
*/



Route::resource('elonlars', App\Http\Controllers\ElonlarController::class);



Route::group(['prefix' => 'prof'], function () {
    Route::resource('profs', App\Http\Controllers\Prof\ProfController::class, ["as" => 'prof']);
});


Route::resource('tests', App\Http\Controllers\TestController::class);


Route::resource('test2s', App\Http\Controllers\Test2Controller::class);
