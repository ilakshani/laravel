<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
class Youtube extends Controller
{
    //
    public function index(){
        //echo "from the database";
        $data = User::all();
        return $data;
    }
}
