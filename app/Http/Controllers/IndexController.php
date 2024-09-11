<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function callHome(){
        $welcome = 'Hello Turma SD';
        $name = 'Sara';
        $cesaeInfo = $this->getCourseInfo();

        //dd($cesaeInfo);

        return view('general.home',compact('welcome','name', 'cesaeInfo'));
    }

    protected function getCourseInfo(){
        $info = ['Laravel', 'Angular', 'Sql'];
        return $info;
    }
}
