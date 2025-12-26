<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    function index (){
        return view('html101');
    }
    function info (Request $req){
        echo $req->input('mynumber');
        return view('myview.info');
    }
    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate',$data);
    }
    function store(Request $req){
         $data = $req->all();
        return view('myview.result', compact('data'));
    }


}
