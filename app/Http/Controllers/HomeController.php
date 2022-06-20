<?php

  

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;
use App\Models\Regforms;
use App\Models\Task;
use App\Models\Todo;
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

  

class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {
        $user =User::find(Auth::guard('web')->user()->id);
        $regforms= Regforms::select('*')->get();
        $users=User::select('*')->where('type','=',0)->get();
        $tasks=Task::select('*')->where('user_id','=',$user->id)->get();
        $countusers=count($users);
        $countregforms= count($regforms);
        $counttasks=count($tasks);

        return view('user.home')
        ->with('countregforms',$countregforms)
        ->with('countusers',$countusers)
        ->with('counttasks',$counttasks);

    } 

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()

    {

     $regforms= Regforms::select('*')->get();
     $users=User::select('*')->get();
     $tasks=Task::select('*')->get();
     $countusers=count($users);
     $countregforms= count($regforms);
     $counttasks=count($tasks);

        return view('admin.dashboard')
        ->with('countregforms',$countregforms)
        ->with('countusers',$countusers)
        ->with('counttasks',$counttasks);

    }

  

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {

        return view('managerHome');

    }

}