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
    <a href="/inventory/create">
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
                <th>Name</th>
                <th>Detail</th>
                <th>Archive</th>
                @if (Auth::user()->role == 1)
                    <th>Action</th>
                @endif
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>#</td>
                    <td><a href="inventory/show/{{$d->id}}">
                        {{$d->name}}
                    </a></td>
                    <td>{{$d->detail}}</td>
                    {{-- <td>{{$d->archive->name}}</td> --}}
                    <td>{{$d->archive["name"]}}</td>
                    @if (Auth::user()->role == 1)
                        <td> <a href="/inventory/edit/{{$d->id}}">EDIT</a>  |
                            <a href="/inventory/delete/{{$d->id}}">DELETE</a>
                        </td>
                    @endif
                </tr>
            @endforeach

            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
