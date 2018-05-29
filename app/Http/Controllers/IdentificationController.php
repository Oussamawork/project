<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IdentificationController extends Controller
{
    public function getview(){
        return view('first.identification');
    }

    public function getIdentification(Request $request){
        $this->validate($request, [
            'identification' => 'required|numeric|digits:10'
        ]);
        //  dd (filled(User::where('identification',$request['identification'])->get()));
        if(filled(User::where('identification',$request['identification'])->first())){
            return view('auth.register', ['identification' => $request['identification']] );
        }
        else{
            return redirect()->back()->with(['info' => 'IDENTIFICATION NOT FOUND', 'identification' => $request['identification']]);
        }
    }

}
