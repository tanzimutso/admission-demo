<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class SearchController extends Controller
{
    public function search(){
        return view('search');
    }

    public function getDetails(Request $request){
        $roll_number = $request->input('EIIN');
        $datas = Data::where('EIIN',$roll_number)->get();

        if(sizeof($datas) == 0 )
        return view('404');
        else
        return view('details',compact('datas'));
    }

}
