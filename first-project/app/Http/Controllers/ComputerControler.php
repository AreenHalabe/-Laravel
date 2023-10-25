<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComputerControler extends Controller
{
    public function index(){
        $computers = DB::select('select * from computers');
        return view('allcomputer',['computers'=>$computers]);
    }

    public function insertform(){
        return view('addcomputer');
    }


    public function insert(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        
        $data=array('name'=>$name,"price"=>$price);
        DB::table('computers')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/addcomputer">Click Here</a> to go back.';
    }
}
