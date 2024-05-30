<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\tasks;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(Request $request){
        $comm = new comments();
        $request->body = $request->body;

        $comm->save();
//        $tid = tasks::find($id);
        return redirect()->route('page.comments')    ;
    }

    public function page(){

    return view('contant.single');


    }

}
