@extends('user.layouts.app')

  

@section('content')
        <div class="app-admin-wrap sidebar-full">
            <div class="sidebar-panel bg-white">




                <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center">
                    <img class="pl-3" src="/assets/images/mlogo.png" alt="">
                    <!-- <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
                    <div class="sidebar-compact-switch ml-auto"><span></span></div>

                </div>
     @include('user.include.sidebar')
            </div>
            <div class="main-content-wrap bg-off-white">
               @include('user.include.header')

                <!-- main content start -->
                <div class="main-content pt-4 ">
    
<!-- something -->

        <!-- ============ Body content start ============= -->
          
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
                            <form class="needs-validation" action="{{url('/user/update-regforms/'.$edforms->id)}}" method="post" enctype="multipart/form-data" novalidate>
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
            </div>
        </div>
@endsection


