<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tarea;

Route::get('/', function () {
    Tarea::create([
        'title' => 'Tarea 1',
        'description' => 'Descripcion 1',
    ]);

    $tarea1 = Tarea::get();
    return view('ejemplo', compact('tarea1'));
});
