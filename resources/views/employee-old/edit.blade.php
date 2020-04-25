@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Edit</a></li>
        <li class="active">Employee</li>
    </ol>
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Employee</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/employee/update" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT" />
                    <input type="hidden" name="id" value="{{$data->id}}" />
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="nama"
                  value="{{$data->nama}}" placeholder="Name">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="alamat"
                  value="{{$data->alamat}}" placeholder="Address">
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <input type="text" class="form-control" name="jabatan"
                    value="{{$data->jabatan}}" placeholder="Position">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>
    </div>
</div>
@endsection
