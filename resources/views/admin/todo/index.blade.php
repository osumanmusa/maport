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
                    <li><a href="">Dashboard</a></li>
                    <li>Version 1</li>
                </ul>
                </div>
                <div class="col-md-2"></div>
                   <div class="col-md-4" role="group" aria-label="Basic example" style="">
                            <button onclick="window.location.href='{{url('/admin/create-todo/'.$task->id)}}'"  class="btn btn-raised ripple btn-raised-primary m-1"> <i class="fa fa-plus"></i> New</button>  
                            <button onclick="window.location.href='{{ URL::to('/regforms/excel') }}'"  class="btn btn-raised ripple btn-raised-success r m-1"> <i class="fa fa-tasks"></i> Excel</button>


                
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
                    
                      
                    
                    </div>

                    <div class="ul-widget-body">
                      <div class="ul-widget3">
                        <div class="table-responsive ">

                          <table  id="alternative_pagination_table" class="display table table-striped " style="width:100%;" >
                            <thead>
                              <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Deadline</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($todos as $todo)
                              <!-- start tr -->
                              <tr>
                                <th scope="row">
                                  <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="" />

                                    <span class="checkmark"></span>
                                  </label>
                                </th>
                                <td>{{$todo->todo_name}}</td>
                                <td>
                                  <span class="p-2 m-1">{{$todo->todo_description}}</span>
                                </td>
                                @if($todo->todo_status == "completed")

                                <td>
                                  <span class="p-2 m-1 badge badge-success">{{$todo->todo_status}}</span>
                                </td>
                                @else

                                <td>
                                  <span class="p-2 m-1 badge badge-info">{{$todo->todo_status}}</span>
                                </td>
                                @endif
                                <td>
                                  <span>{{$todo->todo_date}} </span>
                                </td>
                                <td>
                                  <span class=" p-2 m-1">{{$todo->created_at}}</span>
                                </td>
                                <td>
                                  <button type="button" class="btn bg-info _r_btn border-0" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="_dot _inline-dot bg-white"></span>
                                    <span class="_dot _inline-dot bg-white"></span>
                                    <span class="_dot _inline-dot bg-white"></span>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start"
                                    style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/edit-todo/'.$todo->id)}}">
                                      <i class="i-Bar-Chart-4"> </i>
                                      Edit</a>
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/admin/delete-todo/'.$todo->id)}}">
                                      <i class="i-Data-Save"> </i>
                                      Delete
                                    </a>
                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                      <i class="i-Duplicate-Layer"></i>
                                      Import</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                      <i class="i-Folder-Download"></i>
                                      Update</a>
                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                      <i class="i-Gears-2"></i>
                                      Customize</a>
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
                              {{ $todos->links() }}
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



    
@endsection