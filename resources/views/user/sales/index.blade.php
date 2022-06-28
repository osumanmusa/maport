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
                            <a type="button" href="/user/create-primereg" class="btn btn-raised ripple btn-raised-secondary m-1"> <i class="fa fa-tasks"></i> New</a>  
                            <a type="button" href=" {{ URL::to('/regforms/excel') }}" class="btn btn-raised ripple btn-raised-success r m-1"> <i class="fa fa-tasks"></i> Excel</a> 
                            <a type="button" href=" {{ URL::to('/regforms/pdf') }}" class="btn btn-raised ripple btn-raised-danger m-1"> <i class="fa fa-tasks"></i> PDF</a>

                
            </div>
            <div class="separator-breadcrumb border-top"></div>
            <div class="row mt-4 ">
              <!-- begin exclusive datatable plugin -->
              <div class="col-lg-12 col-xl-12">
                <div class="card">
                  <div class="card-body mb-3">
                    <div class="ul-widget__head v-margin">
                      <div class="ul-widget__head-label">
                        
                         <button type="button" class="btn btn-raised ripple btn-raised-primary m-1 mb-3 pull-right" data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-file-pdf-o"></i> Import</button>
                      </div>
                      
                    
                    </div>

                    <div class="ul-widget-body">
                      <div class="ul-widget3">
                        <div class="table-responsive ">

                          <table  id="alternative_pagination_table" class="display table table-striped " style="width: 70vw;">
                            <thead>
                              <tr class="">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($propties as $property)
                              <!-- start tr -->
                              <tr>
                                <th scope="row">
                                  <label class="checkbox checkbox-outline-info">
                                    <input type="checkbox" checked="" />

                                    <span class="checkmark"></span>
                                  </label>
                                </th>
                                <td>{{$property->name}}</td>
                                <td>
                                  <span class="p-2 m-1">{{$property->company}}</span>
                                </td>
                                <td>
                                  <span>{{$property->role}} </span>
                                </td>
                                <td>{{$property->email}}</td>
                                <td>
                                  <span class=" p-2 m-1">{{$property->mobile}}</span>
                                </td>
                                <td>
                                  <span class=" p-2 m-1">{{$property->date_commencing}}</span>
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
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/user/edit-regforms/'.$property->id)}}">
                                      <i class="i-Bar-Chart-4"> </i>
                                      Edit</a>
                                    <a class="dropdown-item ul-widget__link--font" href="{{url('/user/delete-regforms/'.$property->id)}}">
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
                              {{ $propties->links() }}
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


