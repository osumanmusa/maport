@extends('admin.layouts.adminapp')

  

@section('content')






    <div class="app-admin-wrap layout-sidebar-large clearfix">
@include('admin.include.header')

@include('admin.include.sidebar')

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">

            <hr>


<div class="breadcrumb row col-lg-12">
                <div class="col-md-6">
                <h1 class="mr-2">Version 1</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li>Version 1</li>
                </ul>
                </div>
                <div class="col-md-2"></div>
                  
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>

@elseif(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif
                
            </div>
            <div class="separator-breadcrumb border-top"></div>
            <div class="row mt-4">


                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Form Inputs</div>
                            <form class="needs-validation" action="{{url('/admin/update-regforms/'.$edforms->id)}}" method="post" enctype="multipart/form-data" novalidate>
                                               @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required value="{{$edforms->name}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Company<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="company" required value="{{$edforms->company}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Role<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="role" required value="{{$edforms->role}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email" required value="{{$edforms->email}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Mobile <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="mobile" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$edforms->mobile}}">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Whatsapp Number <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="whatsapp" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" value="{{$edforms->whatsapp}}">
                                            <div class="valid-feedback">
                                            Looks good!
                                        </div> 
                                        </div>
                                    </div>
                              
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Date Commencing<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="date" name="date_commence" class="form-control" id="validationCustomUsername"  placeholder="Start Date" aria-describedby="inputGroupPrepend" required value="{{$edforms->date_commencing}}">
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Gender<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                          <select name="gender" class="form-control form-select" id="validationCustom01" required value="{{$edforms->gender}}">
                                              <option>Select Gender</option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>  
                                            </select>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>


          </div>


      





        <!-- ============ Body content End ============= -->







        </div>





        <!-- ============ Body content End ============= -->
    </div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
          <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
       
      <div class="modal-body">
     
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
       </form>
    </div>
  </div>
</div>
    
@endsection