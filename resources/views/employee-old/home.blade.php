@extends('layouts.master')

@section('content-header')
    <h1>
        Employee
        <small>Home</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employee</li>
    </ol>
@endsection

@section('content')
    {{-- <h1>Halaman Employee</h1> --}}
    <div class="row">
        <div class="col-md-4">
            <a href="/employee/create">
                <button class="btn btn-block btn-primary btn-sm">
                    Add Employee
                </button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Employee</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Address</th>
                      <th>Position</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{  $loop->iteration }}</td>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->jabatan}}</td>
                        <td>
                            <a href="/employee/edit/{{$d->id}}">EDIT</a> |
                            <a href="/employee/delete/{{$d->id}}">DELETE</a>
                        </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.box-body -->
              </div>

        </div>
    </div>
@endsection
