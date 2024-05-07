<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function orders(){
        return view('client.orders');
    }
    public function create(){
        return view('client.createorder');
    }
    public function store(Request $request){
        $request->validate([
            
        ]);
    }

}
