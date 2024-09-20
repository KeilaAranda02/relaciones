<?php

use Illuminate\Support\Facades\Route;
//Este código define una ruta que, al ser accedida, recupera todos los usuarios 
//de la base de datos y los envía a la vista welcome, donde pueden ser mostrados.
// Es una forma básica y común de manejar la lógica de solicitudes y respuestas en Laravel.
Route::get('/', function () {
    $users = App\Models\User::get();
    return view('welcome', ['users' => $users]);
});
