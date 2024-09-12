<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Guid\Guid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function addUser(){

        //insert
        // DB::table('users')
        // ->insert([
        //     'name' => 'Sara',
        //     'email' => 'Sara111@gmail.com',
        //     'password' => 'Saraaaaa'
        // ]);

        //update
        // DB::table('users')
        // ->insert([
        //     'name' => 'Sara',
        //     'email' => 'Sara111@gmail.com',
        //     'password' => 'Saraaaaa'
        // ]);

        // DB::table('tasks')
        // ->where('id', 2)
        // ->update([
        //     'description' => 'operações à base de dados'
        // ]);

        DB::table('users')
        ->updateOrInsert([
            'email' => 'Sara8@gmail.com'
        ],
        [
            'name' => 'Sara8',
            'password' => 'Sara18',
            'updated_at' => now(),
        ]);

        // dd('update ok');


        return view('users.add_user');
    }

    public function allUsers(){
        $users = $this->getUsers();
        $myUser = DB::table('users')->where('name', 'Sara')->first();

        return view('users.show_users', compact('users', 'myUser'));
    }

    protected function getUsers(){
        $users = DB::table('users')
        ->where('name', 'Sara8')
        ->get();

        //dd(  $users);
        return $users;
    }
}
