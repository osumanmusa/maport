<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Primereg;
use App\Models\Departments;
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

class PrimeregController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $user =User::find(Auth::guard('web')->user()->id);
        $propties=Primereg::select('*')->where('user_id','=',$user->id)->orderBy('created_at', 'desc')->paginate(10);
       return view('user.sales.index',compact('propties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department=Departments::select('id','department_name')->get();
        return view('user.sales.create',compact('department'));
    }

    public function createreg()
    {
        $department=Departments::select('id','department_name')->get();
        return view('user.sales.createreg',compact('department'));
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

        $user =User::find(Auth::guard('web')->user()->id);
        $prop = new Task();
        $prop->task_name = $request->name;
        $prop->save();

        if ($task) {
            Toastr::success('Task Added successfully :)','success');
            return redirect()->route('user.tasks.list');
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return redirect()->route('user.tasks.list');
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
        //
    }
}
