@extends('layouts.master')

@section('content-header')
    {{-- <h3>content-header</h3> --}}
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
    <a href="/employee/create">
        <button class="btn-primary">
            Create {{$judul}}
        </button>
    </a>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data {{$judul}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Position</th>
                <th>Name</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>#</td>
                    <td>{{$d->position->name}}</td>
                    <td><a href="/employee/show/{{$d->id}}">
                        {{$d->name}}
                    </a></td>
                    <td>{{$d->alamat}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->phone}}</td>
                    <td> <a href="/employee/edit/{{$d->id}}">EDIT</a>  |
                        <a href="/employee/delete/{{$d->id}}">DELETE</a>
                    </td>
                </tr>
            @endforeach

            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
