<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function create(Request $request){
        $name = $request->name;
        $data = [
            'msg'=>'頑張りましょう！'.$name.'さん！',
            'name'=>$name,
        ];
        return view('main.table', $data);
    }
    public function join(Request $request){
        $name = $request->name;
        $data = [
            'msg'=>'頑張りましょう！'.$name.'さん',
            'name'=>$name,
        ];
        return view('main.table', $data);
    }
}
