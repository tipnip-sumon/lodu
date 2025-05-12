<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class betTokenController extends Controller
{
    public function index(){
        return 'success';
    }
    public function show(){
        return 'SHow View';
    }
    public function create(){
        return 'Create Bet Token';
    }
}
