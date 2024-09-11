<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

class UserController extends Controller
{
    public function addUser(){
        return view('users.add_user');
    }

    public function allUsers(){
        return view('users.show_users');
    }
}
