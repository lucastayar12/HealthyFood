<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
    	$dados = $request->all();
    	dd($dados);	

    }
}
