<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
        return view('middle');
    }

    public function testReq(Request $request){
        $body=[
            'name'=>$request->name,
            'age'=>$request->age
        ];
        return redirect()->back();
    }
}
