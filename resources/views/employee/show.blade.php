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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data {{$judul}} {{$data->name}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-striped">
            <tr>
                <th style="width: 10px">#</th>
                <th>Inventory Name</th>
            </tr>
            @foreach ($data->inventory as $d)
                <tr>
                    <td>#</td>
                    <td>{{$d->name}}</td>
                </tr>
            @endforeach

            </table>
        </div>
        <!-- /.box-body -->
    </div>

@endsection
