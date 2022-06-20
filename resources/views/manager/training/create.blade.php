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
@endif
                
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Form Inputs</div>
                            <form class="needs-validation" action="{{route('admin.training.store')}}" method="post" enctype="multipart/form-data" novalidate>
                                               @csrf
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Total Number</label>
                                        <input type="number"  min="0" oninput="validity.valid||(value='');"  class="form-control" id="validationCustom01" name="totalno" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Description</label>
                                        <div class="input-group">
                                           
                                            <textarea type="text" class="form-control" id="validationCustomUsername" placeholder="Enter Description" name="description" aria-describedby="inputGroupPrepend" required></textarea>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Tags</label>
                                        <div class="input-group">
                                            
                                            <input type="text" name="tags" class="form-control" id="validationCustomUsername" placeholder="Tags" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Training Type</label>
                                        <div class="input-group">
                                            <select name="training_type" class="form-control form-select" id="validationCustomUsername" placeholder="Tags" aria-describedby="inputGroupPrepend" required>
                                                <option>Select  Training Type</option>
                                                <option value="online">Online</option>
                                                <option value="inperson">In-Person</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Banner</label>
                                        <input type="file" class="form-control" id="validationCustom01" name="image">
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






        </div>





        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->


@endsection