@extends('layouts.master')

@section('content-header')
    <h1>
        Dashboard
        <small>{{$judul}}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">{{$judul}}</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">{{$judul}}</h3>
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
                        value="{{$data->name}}" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" class="form-control" name="code"
                        value="{{$data->code}}" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <select name="department_id" class="form-control">
                            <option value="{{$data->position_id}}">
                                {{$data->position->name}}
                            </option>
                            @foreach ($position as $pos)
                                @if ($data->position_id != $pos->id)
                                    <option value="{{$pos->id}}">
                                        {{$pos->name}}
                                    </option>
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
            <!-- /.box -->
        </div>
    </div>
@endsection
