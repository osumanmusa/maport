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
                <h1 class="mr-2">{{$task->task_name}}</h1>
                <ul>
                    <li><a href="">Todo</a></li>
                    <li>Add Todo</li>
                </ul>
                </div>
                <div class="col-md-2"></div>

                   <div class="col-md-4" role="group" aria-label="Basic example" style="">
                            <button onclick="window.location.href='{{url('/admin/todo/'.$task->id)}}'" class="btn btn-raised ripple btn-raised-info m-1"> <i class="fa fa-tasks"></i> View Todo</button>

                
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
                            <form class="needs-validation" action="{{route('admin.todo.store')}}" method="post" enctype="multipart/form-data" novalidate>
                                               @csrf
                                <input name="task_id" value="{{$task->id}}" type="hidden">
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Todo Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Event Name" name="name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  <div class="form-row">
                                    

                                     <div class="col-md-12 mb-3">
                                        <label for="validationCustom01">Todo Description<span class="text-danger">*</span></label>
                                        <textarea  class="form-control" id="validationCustom01" placeholder="Enter Description" name="description" required></textarea> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                  
                              
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="validationCustomUsername">Expected Delivery Date<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="datetime-local" name="date" class="form-control" id="validationCustomUsername"  placeholder="Start Date" aria-describedby="inputGroupPrepend" required>
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



    
@endsection