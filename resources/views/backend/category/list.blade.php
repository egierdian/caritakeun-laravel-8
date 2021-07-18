@extends('backend.index')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" id="content-category">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add new category</h3>
                        </div>
                        <form role="form" id="form-category" action="" method="POST">
                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                            <input type="hidden" name="CategoryID">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Category</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter name category">
                                </div>
                            </div>
                            <div class="card-footer justify-content-end">
                                <button id="btnSave" type="button" class="btn btn-primary" onclick="save()">Save</button>
                                <button id="btnClose" type="button" class="btn btn-danger" onclick="close_form()">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <button type="button" class="btn btn-primary" onclick="add()">Add new</button>

                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-category" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name Category</th>
                                        <th width="150px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection