<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    function index(){
        return view('welcome');
    }


    // 01. Request Validation

    function formValidation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:2',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);
        return $validated;
    }


    // 02. Request Redirect

    function home()
    {
        return Redirect::to('/dashboard', 302);
    }
}
