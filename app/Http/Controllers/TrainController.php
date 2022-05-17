<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\train;

class TrainController extends Controller
{
    public function index(){
        $trains=train::all();
    return view('guest.trains',['trains'=>$trains]);
    }
    
    public function show($id)
    {
        $train= train::findOrFail($id);
        return view('guest.show', ["train" => $train]);
    }
}