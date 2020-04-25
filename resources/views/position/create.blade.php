@extends('layouts.master')

@section('content-header')
    <h1>
        Position
        <small>Create</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Create</a></li>
        <li class="active">Position</li>
    </ol>
@endsection


@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Position</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="/position/store" method="post">
                <div class="box-body">
                  <div class="form-group">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                      <input type="hidden" name="_method" value="POST" />
                  </div>
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" name="code" placeholder="Code">
                  </div>
                  <div class="form-group">
                    <label>Department Name</label>
                    <select class="form-control" name="department_id">
                        @foreach ($department as $dept)
                            <option value="{{$dept->id}}">{{$dept->name}}</option>
                        @endforeach
                    </select>
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
