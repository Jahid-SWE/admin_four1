@extends('master')
@section('title')
    Manage Category ||
@endsection
@section('body')
 <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Category Module</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                            <li class="breadcrumb-item active">Manage Category</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Add Category Form </h4>
                                        <h1>{{Session::get('message')}}</h1>
                                        <form action="{{route('new-category')}}" method="POST">
                                            @csrf
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Category Name</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="name" class="form-control" id="horizontal-firstname-input">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input4" class="col-sm-3 col-form-label">Category Description</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="description" id="horizontal-email-input4"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input2" class="col-sm-3 col-form-label">Category Image</label>
                                                <div class="col-sm-9">
                                                    <input type="file" name="image" class="form-control-file" id="horizontal-email-input2"/>
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Create New Category</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


     <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">All Category Goes Here</h4>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>SL NO</th>
                                                <th>Category Name</th>
                                                <th>Category Description</th>
                                                <th>Category Image</th>
                                                <th>Publication Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>
                                                    <a href="" class="btn btn-success btn-sm btn-rounded">
                                                        <i class="fas fa-arrow-circle-up"></i>
                                                    </a>
                                                      <a href="" class="btn btn-primary btn-sm btn-rounded">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                      <a href="" class="btn btn-danger btn-sm btn-rounded">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

@endsection
