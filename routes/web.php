<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aplic\PrincipalController;

/*

https://github.com/DerekMarcinyshyn/phpword/blob/master/samples/Sample_01_SimpleText.php
https://phpoffice.github.io/PHPWord/usage/styles/paragraph.html
https://stackoverflow.com/questions/49914479/text-alignment-in-textbox-in-phpword
https://phpword.readthedocs.io/en/latest/styles.html#paragraph
https://github.com/Grabium/PHPWord/blob/master/docs/usage/styles/paragraph.md


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('principal');
