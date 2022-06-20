@extends('trainer.layouts.app')

  

@section('content')
        <div class="app-admin-wrap sidebar-full">
            <div class="sidebar-panel bg-white">




                <div class="gull-brand pr-3 text-center mt-4 mb-2 d-flex justify-content-center align-items-center">
                    <img class="pl-3" src="/assets/images/logo.png" alt="">
                    <!-- <span class=" item-name text-20 text-primary font-weight-700">GULL</span> -->
                    <div class="sidebar-compact-switch ml-auto"><span></span></div>

                </div>
     @include('trainer.include.sidebar')
            </div>
            <div class="main-content-wrap bg-off-white">
               @include('trainer.include.header')

                <!-- main content start -->
                <div class="main-content pt-4 ">
    
<!-- something -->

        <!-- ============ Body content start ============= -->
            <div class="breadcrumb">
                <h1 class="mr-2">Version 1</h1>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li>Version 1</li>
                </ul>
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
                                <th scope="col">Training Name</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Available Slot</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($class as $class)
                              <!-- start tr -->
                              <tr>
                                <th scope="row">
                                  <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="" />

                                    <span class="checkmark"></span>
                                  </label>
                                </th>
                                <td>
                                  <span>{{$training->name}}</span>
                                </td>
                                <td>{{$class->class_name}}</td>
                                <td>
                                  <span class="p-2 m-1">{{$class->class_description}}</span>
                                </td>
                                <td>
                                  <span>{{$class->available_slot}} </span>
                                </td>
                                <td>{{$class->start_date}}</td>
                                <td>
                                  <span class=" p-2 m-1">{{$class->end_date}}</span>
                                </td>
                                <td>
                                  <span>{{$class->tag}} </span>
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
                                    <a class="dropdown-item ul-widget__link--font" href="/admin/viewbooking/{{$class->id}}">
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
                            <li class="page-item">
                              <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="#">Next</a>
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
            </div>
        </div>
@endsection


