<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;
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

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $todos= Todo::where('task_id','=',$id)->paginate(10);
        $task= Task::find($id);
        return view('admin.todo.index',compact('todos'))->with('task',$task);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
      $task= Task::find($id);
        return view('admin.todo.create',compact('task'));
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

        ]);

        $status="in-progress";
        $todo = new Todo();
        $todo->todo_name = $request->name;
        $todo->todo_description = $request->description;
        $todo->todo_date = $request->date;
        $todo->task_id = $request->task_id;
        $todo->todo_status = $status;
        
        $todo->save();

        if ($todo) {
            Toastr::success('Created successfully :)','success');
            return back();
        }
        else {
            Toastr::error('Something is wrong :)','error');
            return back();
        }
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
     
      $todo= Todo::find($id);
      $task = Task::find($todo->task_id);
        return view('admin.todo.edit',compact('task'))->with('todo',$todo);

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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
            'date' => 'required',

        ]);

        $todo = DB::table('todo')
              ->where('id', $id)
              ->update(
                  [ 
                    'todo_name' => $request->name,
                    'todo_description' => $request->description,
                    'todo_status' => $request->status,
                    'todo_date' => $request->date
                ]);
        if ($todo) {
            Toastr::success('Updated successfully :)','success');
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deltodo= Todo::find($id);
        $deltodo->delete();
      
        Toastr::success('Delete successfully :)','success');
       return back();
    }
}
