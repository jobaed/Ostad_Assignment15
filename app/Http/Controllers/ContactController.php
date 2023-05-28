<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */


    // 06 Single Action Controller
    public function __invoke(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');


        //  Here Is code to write To send Mail

        return redirect('/')->with('success', 'Mail Send Successfull');
    }
}
