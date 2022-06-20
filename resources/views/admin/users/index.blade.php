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
                            <a type="button" href="/admin/users-create" class="btn btn-raised ripple btn-raised-secondary m-1"> <i class="fa fa-tasks"></i> Add New</a> 
                            <button type="button" class="btn btn-raised ripple btn-raised-success m-1"> <i class="fa fa-file-excel-o"></i> Excel</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-danger m-1"> <i class="fa fa-file-pdf-o"></i> PDF</button>
                            <button type="button" class="btn btn-raised ripple btn-raised-info m-1"><i class="fa fa-file-word-o"></i> Word</button>
                            </div>

                
            </div>

            <div class="separator-breadcrumb border-top"></div>
            <div class="row mt-4">
              <!-- begin exclusive datatable plugin -->
              <div class="col-lg-12 col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="ul-widget__head v-margin">
                      <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">
                          Exclusive datatable plugin
                        </h3>
                      </div>
                      
                    
                    </div>

                    <div class="ul-widget-body">
                      <div class="ul-widget3">
                        <div class="table">
                          <table class="table ">
                            <thead>
                              <tr class="ul-widget6__tr--sticky-th">
                                <th scope="col">#</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date Created</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                              <!-- start tr -->
                              <tr>
                                <th scope="row">
                                  <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="" />

                                    <span class="checkmark"></span>
                                  </label>
                                </th>
                                <td>{{$user->name}}</td>
                                <td>
                                  <span class="p-2 m-1">{{$user->email}}</span>
                                </td>
                                <td>
                                  <span class=" p-2 m-1">{{$user->created_at}}</span>
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
                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                      <i class="i-Bar-Chart-4"> </i>
                                      Export</a>
                                    <a class="dropdown-item ul-widget__link--font" href="#">
                                      <i class="i-Data-Save"> </i>
                                      Save
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
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item">{{$users->links()}}</li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end::exclusive datatable plugin  -->




          </div>






        </div>





        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

@endsection