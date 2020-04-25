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
                <form role="form" action="/inventory/update" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="_method" value="PUT" />
                        <input type="hidden" name="id" value="{{$data->id}}" />
                        <input type="hidden" name="id_archive" value="{{$archive->id}}" />
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name"
                        value="{{$data->name}}" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" name="detail"
                        value="{{$data->detail}}" placeholder="Masukan Alamat">
                    </div>

                    <div class="form-group">
                        <label>Archive</label>
                        <input type="text" class="form-control"
                        name="archive_name"
                        value="{{$archive->name}}" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail Archive</label>
                        <input type="text" class="form-control"
                        name="archive_detail"
                        value="{{$archive->detail}}" placeholder="Masukan Alamat">
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
