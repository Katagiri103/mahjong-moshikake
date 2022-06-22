<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function post(Request $request){
        $name = $request->name;
        $data = [
            'msg'=>'頑張りましょう！'.$name.'さん！',
            'name'=>$name,
        ];
        return view('main.table', $data);
    }
}
