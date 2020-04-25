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
                <form role="form" action="/inventory/store" method="post">
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="_method" value="POST" />
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <input type="text" class="form-control" name="detail" placeholder="Masukan Code">
                    </div>

                    <div class="form-group">
                        <label>Archive</label>
                        <input type="text" class="form-control"
                        name="archive_name" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Detail Archive</label>
                        <input type="text" class="form-control"
                        name="archive_detail" placeholder="Masukan Code">
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
