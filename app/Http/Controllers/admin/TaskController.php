<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Auth;
use DB;
use Redirect;
use Brian2694\Toastr\Facades\Toastr;
use Mail;
use Hash;
use File;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\FormsImport;
use App\Imports\FormsExport;
use \Illuminate\Support\Facades\URL;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::select('*')->get();
        $tasks = Task::select('*')->orderBy('created_at', 'desc')->paginate(6);
        return view('admin.task.index',compact('tasks'))->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'user'=>'required'
        ]);

        $user =User::find(Auth::guard('web')->user()->id);
        $task = new Task();
        $task->task_name = $request->name;
        $task->task_description = $request->description;
        $task->task_deadline = $request->date;
        $task->user_id = $request->user;
        $task->save();

        if ($task) {
            Toastr::success('Task Added successfully :)','success');
            return redirect()->route('admin.tasks.list');
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return redirect()->route('admin.tasks.list');
        }

             Toastr::error('Something went wrong :)','error');
            return redirect()->route('admin.tasks.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deltask = Task::find($id);
        $deltask->delete();
      
        Toastr::success('Delete successfull :)','success');
       return redirect()->route('admin.tasks.list');  
    }
}
