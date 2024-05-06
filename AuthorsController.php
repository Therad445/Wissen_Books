<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authors;

class AuthorsController extends Controller
{
    public function index(){
        $Authors = Authors::all();
        return response()->json($Authors);
    }
}