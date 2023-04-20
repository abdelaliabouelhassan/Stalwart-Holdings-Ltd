<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);

        return response()->json([
            'status' => 'success',
        ],200);
    }
}
