<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regforms;
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

class RegformsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$forms= Regforms::select('*')->orderBy('created_at', 'desc')->paginate(6);
        return view('admin.regforms.index',compact('forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.regforms.create');
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
            'gender' => 'required',
            'company' => 'required',
            'role' => 'required',
            'email' => 'required',
            'mobile' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'whatsapp' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'date_commence' => 'required',
        ]);

        $formreg = new Regforms();
        $formreg->name = $request->name;
        $formreg->company = $request->company;
        $formreg->email = $request->email;
        $formreg->gender = $request->gender;
        $formreg->mobile = $request->mobile;
        $formreg->whatsapp = $request->whatsapp;
        $formreg->role = $request->role;
        $formreg->date_commencing = $request->date_commence;
        $formreg->save();

        if ($formreg) {
            Toastr::success('You have booked successfully :)','success');
            return redirect()->route('user.regforms.list');
        }
        else {
             Toastr::error('Something went wrong :)','error');
            return back()->with('error', 'Failed! not created');
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
        $edforms = Regforms::find($id);
        return view('admin.regforms.edit')->with('edforms',$edforms);
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
            'gender' => 'required',
            'company' => 'required',
            'role' => 'required',
            'email' => 'required',
            'mobile' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'whatsapp' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'date_commence' => 'required',
        ]);


      $upregforms = DB::table('regforms')
              ->where('id', $id)
              ->update(
                  [ 
                    'name' => $request->name,
                    'gender' => $request->gender,
                    'company' => $request->company,
                    'role' => $request->role,
                    'email' => $request->email,
                    'mobile' => $request->mobile,
                    'whatsapp' => $request->whatsapp,
                    'date_commence' => $request->data_commence,
                ]);
        Toastr::success('Update successfull :)','success');
       return redirect()->route('admin.regforms.list');
        //
    }

    //Function to convert from html to  PDF 
    public function createPDF()
    {

        // retreive records from  data table
        $pdfprint = Regforms::select('*')->orderBy('created_at', 'desc')->get();

        $pdf = PDF::loadView('admin.pdf.regforms', compact('pdfprint'));

        return $pdf->stream('admin.pdf.regforms', array('Attachment' => false));
    }



    //Function to convert from html to  excel 
    public function createcsv()
    {

        $csvprint = Regforms::select('*')->orderBy('created_at', 'desc')->get(); 
        // retreive all records from db
        return Excel::download(new FormsExport, 'RegformsExport.xlsx');
    }
    public function FormsImport(Request $request) 
    {
        Excel::import(new FormsImport, $request->file('file')->store('temp'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              
        $delregforms = Regforms::find($id);
        $delregforms->delete();
      
        Toastr::success('Delete successfull :)','success');
       return redirect()->route('user.regforms.list');
    }
}
