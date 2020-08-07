<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = ['data' => 'This is book data'];
        
        return response()->json($data, 200);
    }
}
