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
                <h1 class="mr-2">version</h1>
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
@if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif            
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title mb-3">Form Inputs</div>
                            <form class="needs-validation" action="{{route('admin.trainingclass.store')}}" method="post" enctype="multipart/form-data" novalidate>
                                               @csrf
                                 <input type="hidden" value="{{$training->id}}" name="training_id">
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom01">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Description</label>
                                        <div class="input-group">
                                           
                                            <textarea type="text" class="form-control" id="validationCustomUsername" placeholder="Enter Description" name="description" aria-describedby="inputGroupPrepend" required></textarea>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Start Date</label>
                                        <div class="input-group">
                                           
                                            <input type="date" name="start_date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">End Date</label>
                                        <div class="input-group">
                                           
                                            <input type="date" name="end_date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustomUsername">Training Tag</label>
                                        <div class="input-group">
                                          <input type="text" class="form-control" id="validationCustom01" placeholder="Entre Tag" name="tag" required>
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






        </div>





        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->


@endsection