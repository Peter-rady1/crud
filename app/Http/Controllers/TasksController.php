<?php

namespace App\Http\Controllers;

use App\Models\tasks;
use App\Models\User;
use App\Notifications\taskanotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use function Laravel\Prompts\table;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $viewtasks = tasks::get()->where('user_id','=',Auth::user()->id);

        return view('tasks.index',compact('viewtasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users =User::get();
        return view('tasks.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tasks = new tasks() ;

        $tasks->title = $request->title;
        $tasks->body = $request->body;
        $tasks->status = $request->status;
        $tasks->user_id = $request->user_id;

        $tasks->save();

//        $users= User::where('id','!=',auth()->user()->id)->get();
//        Notification::send($users,new taskanotify($request->title,$request->body));

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $tasks = tasks::get();

        return view('contact.home',compact('tasks'))  ;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $singletask  = tasks::find($id);
        return view('tasks.edit',compact('singletask'));

    }
    /**
     * Show the form for single task the specified resource.
     */
    public function single( $id)
    {
        $single  = tasks::find($id);
        return view('tasks.single',compact('single'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tdata = tasks::find($id);
        $tdata->title = $request->title;
        $tdata->body = $request->body;
        $tdata->status = $request->status;

        $tdata->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $taskdelete = tasks::find($id)->delete();

  return redirect()->route('tasks.index');
    }

    public function mark  ($id)
    {
     DB::table('notifications')->where('id',$id)->update([
         'read_at' => now()
     ]);
    }

    public function markall  ()
    {
        DB::table('notifications')->update([
            'read_at' => now()
        ]);
    }



}
