@extends('layouts.master')

@section('content-header')
    <h1>
        Position
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Edit</a></li>
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
            <form role="form" action="/position/update" method="post">
              <div class="box-body">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="hidden" name="_method" value="PUT" />
                    <input type="hidden" name="id" value="{{$data->id}}" />
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name"
                  value="{{$data->name}}" placeholder="Name">
                </div>
                <div class="form-group">
                  <label>Code</label>
                  <input type="text" class="form-control" name="code"
                  value="{{$data->code}}" placeholder="Code">
                </div>
                <div class="form-group">
                    <label>Department Name</label>
                    <select class="form-control" name="department_id">
                        <option value="{{$data->department_id}}">{{$data->department->name}}</option>
                        @foreach ($department as $dept)
                            @if ($dept->id != $data->department_id)
                                <option value="{{$dept->id}}">{{$dept->name}}</option>
                            @endif
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
