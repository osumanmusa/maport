@extends('user.layouts.app')

  

@section('content')
        <div class="app-admin-wrap sidebar-full">
            <div class="sidebar-panel bg-white">




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
                <div class="col-md-4" role="group" aria-label="Basic example" style="">
                            <button onclick="window.location.href='/user/primereg'" class="btn btn-raised ripple btn-raised-info m-1"> <i class="fa fa-tasks"></i> View List</button>

                
                </div>
                  
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
                            <form class="needs-validation" action="{{route('user.regforms.store')}}" method="post" enctype="multipart/form-data" novalidate>
                                               @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Company / Individual <span class="text-danger">*</span></label>
                                        <select name="gender" class="form-control form-select" id="validationCustom01" required>
                                              <option>Select </option>
                                              <option value="Male">Individual</option>
                                              <option value="Female">Company</option>  
                                            </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Sales / Rent<span class="text-danger">*</span></label>
                                        <select name="gender" class="form-control form-select" id="validationCustom01" required>
                                              <option>Sale / Rental Property</option>
                                              <option value="Male">For Sale</option>
                                              <option value="Female">Rent</option>  
                                            </select>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Mobile <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="mobile" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Whatsapp Number <span class="text-danger">*</span></label>
                                         <input type="tel" id="show_field" name="whatsapp" placeholder="024.......234" class="form-control" id="validationCustom03 " oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            <div class="valid-feedback">
                                            Looks good!
                                        </div> 
                                        </div>
                                    </div>
                              
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Date Commencing<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="date" name="date_commence" class="form-control" id="validationCustomUsername"  placeholder="Start Date" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Property type<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                          <select name="gender" class="form-control form-select" id="validationCustom01" required>
                                              <option>Select Property Type</option>
                                              <option value="Male">Apartment</option>
                                              <option value="Female">Apartment</option>  
                                            </select>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Client Location<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Property Location <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="validationCustom01" placeholder="Event Name" name="email" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Payment Plan<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Property Details <span class="text-danger">*</span></label>
                                       <textarea class="form-control" id="validationCustom01" ></textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Price or Value<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Status <span class="text-danger">*</span></label>
                                         <div class="input-group">
                                          <select name="gender" class="form-control form-select" id="validationCustom01" required>
                                              <option>Select Status</option>
                                              <option value="Available">Available</option>
                                              <option value="Sold">Sold</option>  
                                            </select>

                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
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


