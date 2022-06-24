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

    public function finish(Request $request){
        $score = $request->score;
        $rank = $request->rank;
        if($rank == 1){ //1位の場合の点数処理
            
        }elseif($rank == 2){ //2位の場合の点数処理
            $score2 = $score - 30000;
            $score3 = round($score2 / 1000);
            $trueScore = $score3 + 10;

        }elseif($$rank == 3){ //3位の場合の点数処理
            $score2 = $score - 30000;
            $score3 = round($score2 / 1000);
            $trueScore = $score3 - 10;
            
        }else{ //4位の場合の点数処理
            $score2 = $score - 30000;
            $score3 = round($score2 / 1000);
            $trueScore = $score3 - 20;
        };
        return view('main.table', $trueScore);
        
    }
}
