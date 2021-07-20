@extends('backend.index')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Content</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Content</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" id="content-content" style="display: none;">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Content</h3>
                        </div>
                        <form role="form" id="form-content" action="" method="POST">
                            <input type="hidden" name="_token" id="csrf" value="{{Session::token()}}">
                            <input type="hidden" name="ContentID">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control" id="Title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="Category">Category</label>
                                    <select id="category" class="form-control">
                                        <option value="none">- Select Category -</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Category">Content</label>
                                    <textarea id="content" name="content" class="summernote"></textarea>
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
                            <table id="table-content" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="30px;">No.</th>
                                        <th>Title</th>
                                        <th width="100px;">Action</th>
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