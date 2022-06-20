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
                <div class="col-md-4" role="group" aria-label="Basic example" style="">
                    <button type="button" class="btn btn-raised ripple btn-raised-primary m-1 mb-3 pull-right" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-plus"></i> New Task</button>
                    <button type="button" class="btn btn-raised ripple btn-raised-success m-1 mb-3 pull-right" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-tasks"></i> Excel</button>
                    <button type="button" class="btn btn-raised ripple btn-raised-danger m-1 mb-3 pull-right" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-tasks"></i> PDF</button> 

                
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
            <div class="row mt-4 ">
              <!-- begin exclusive datatable plugin -->
              <div class="col-lg-12 col-xl-12">
                <div class="card">
                  <div class="card-body mb-3">
                    <div class="ul-widget__head v-margin">
                      <div class="ul-widget__head-label">
                        
                        
                      </div>
                      
                    
                    </div>

                    <div class="ul-widget-body">
                      <div class="ul-widget3">
                        <div class="table-responsive ">

                          <table  id="feature_disable_table" class="display table table-striped " style="width: 100%;">
                            <thead>
                              <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Date Posted</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($tasks as $task)
                              <!-- start tr -->
                              <tr>
                                <th scope="row">
                                  <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="" />

                                    <span class="checkmark"></span>
                                  </label>
                                </th>
                                <td>{{$task->task_name}}</td>
                                <td>
                                  <span class="p-2 m-1">{{$task->task_description}}</span>
                                </td>
                                <td>
                                  <span class=" p-2 m-1">{{$task->task_deadline}}</span>
                                </td>
                                <td>
                                  <span class=" p-2 m-1">{{$task->created_at}}</span>
                                </td>
                                <td>
                                  <button type="button" class="btn bg-white _r_btn border-0" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="_dot _inline-dot bg-primary"></span>
                                    <span class="_dot _inline-dot bg-primary"></span>
                                    <span class="_dot _inline-dot bg-primary"></span>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start"
                                    style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/edit-task/'.$task->id)}}">
                                      <i class="i-Bar-Chart-4"> </i>
                                      Edit</a>
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/delete-task/'.$task->id)}}">
                                      <i class="i-Data-Save"> </i>
                                      Delete
                                    </a>
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/create-todo/'.$task->id)}}">
                                      <i class="i-Duplicate-Layer"></i>
                                      Add Todo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/todo/'.$task->id)}}">
                                      <i class="i-Folder-Download"></i>
                                      View Todo</a>
                                    
                                  </div>
                                </td>
                              </tr>
                              <!-- end tr -->
                              @endforeach
                                                          </tbody>
                          </table>
                        </div>
                        <nav aria-label="Page navigation">
                          <ul class="pagination">

                            <li class="page-item justify-content-center">
                              {{ $tasks->links() }}
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end::exclusive datatable plugin  -->




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
          <form action="{{ route('admin.task.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
       
      <div class="modal-body">
     
            <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
              <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Task Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append ">
                         <span class="input-group-text" id="basic-addon2"><i class="fab fa-tasks mr-1"></i></span>
                    </div>
              </div>
              <div class="input-group mb-3">
                    <input type="text" name="description" class="form-control" placeholder="Task Description" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                         <span class="input-group-text" id="basic-addon2"><i class="fab fa-tasks mr-1"></i></span>
                    </div>
              </div>
              <div class="input-group mb-3">
                    <input type="date" name="date" class="form-control" placeholder="Deadline" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                         <span class="input-group-text" id="basic-addon2"><i class="fab fa-date mr-1"></i></span>
                    </div>
              </div>
              <div class="input-group mb-3">
                    <select name="user" class="form-control">
                      <option>Assign User</option>
                      @foreach($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                    </select>
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