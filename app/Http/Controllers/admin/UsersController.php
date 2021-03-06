<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\Departments;
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
use App\Http\Controllers\SignedrouteController;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users=User::select('*')->orderBy('created_at', 'desc')->paginate(10);
       $departments=Departments::select('id','department_name')->get();
       return view('admin.users.index',compact('users'))->with('departments',$departments);
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
            'email' => 'required',
            'department' => 'required',
            'role' => 'required',
        ]);
$pwd=Hash::make('Def12345');
    $mymail=$request->email;
        $subject="Thank You";
        $data["email"]=$mymail;
        $data["client_name"]=$request->name;
        $data["subject"]=$subject;
         Mail::send('admin.mails.usermail', $data, function($message)use($data)  {
            $message->to($data["email"], $data["client_name"])
            ->subject('New Account For MGA.');
            });


        $userreg = new User();
        $userreg->name = $request->name;
        $userreg->email = $request->email;
        $userreg->department_id = $request->department;
        $userreg->role = $request->role;
        $userreg->password = $pwd;
        $userreg->save();

        if ($userreg) {
            Toastr::success('User Added successfully :)','success');
            return back();
        }
        else {
             Toastr::error('Something went wrong :)','error');
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
