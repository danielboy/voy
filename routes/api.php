<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
*/
/**
*Alumnos
*Route::resource('alumnos','Alumnos\alumnoscontroller',['except' =>['index','show']]);
*Route::resource('alumnos','Alumnos\alumnoscontroller',['only' =>['index','show']]);
*/
Route::resource('alumnos','Alumnos\alumnoscontroller',['only' =>['index','show','update']]);
/**
*Docentes
*/
Route::resource('docentes','Docentes\docentescontroller',['only' =>['index','show']]);
/**
*Grupos
*/
Route::resource('grupos','Grupos\gruposcontroller',['only' =>['index','show']]);
/**
*Unidades Academicas
*/
Route::resource('unidades_academicas','Unidades_Academicas\unidades_academicascontroller',['only' =>['index','show']]);
/**
*Respuestas
*/
Route::resource('respuestas','Respuestas\respuestascontroller',['only' =>['index','show','create']]);
/**
*Resultados
*/
Route::resource('resultados','Resultados\resultadoscontroller',['only' =>['index','show','create']]);
/**
*Reactivos
*/
Route::resource('reactivos','Reactivos\reactivoscontroller',['only' =>['index','show']]);
/**
*Areas
*/
Route::resource('areas','Areas\areascontroller',['only' =>['index','show']]);
/**
*Carreras
*/
Route::resource('carreras','Carreras\carrerascontroller',['only' =>['index','show']]);