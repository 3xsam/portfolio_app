<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }
    public function contactFrom(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'email' =>'required|email',
            'message' =>'required'
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        } else {
            return response()->json([
               'status' => true,
               'message' => 'Your message has been sent!'
            ]);
        }

    }
}
