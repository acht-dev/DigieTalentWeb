@extends('layout.admin')

@section('title', 'Admin | Participants')

@section('header')
    <h1 class="page-header">
        Participants
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li class="active">Participants</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">All Participants</div>
                    </div>
                </div>
                <!-- Awal Panel Body -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <a style="margin-bottom:10px" href="peserta/create?m=5" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i>Add New Participant</a>
                        <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Penyelengara</th>
                                <th>Tema</th>
                                <th>Nama Peserta</th>
                                <th>No Hp</th>
                                <th>Email</th>
                                <th>Asal Provinsi</th>
                                <th><i class="glyphicon glyphicon-cog"></i></th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($peserta as $item)
                                    <tr>
                                        <td>{{$loop -> iteration}}</td>
                                        <td>{{$item -> penyelengara}}</td>
                                        <td>{{$item -> tema}}</td>
                                        <td>{{$item -> nama_peserta}}</td>
                                        <td>{{$item -> no_hp}}</td>
                                        <td>{{$item -> email}}</td>
                                        <td>{{$item -> asal_provinsi}}</td>
                                        <td align="center">
                                            <a href="/peserta/edit/{{$item -> id_peserta}}?m=5" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="/peserta/destroy/{{$item -> id_peserta}}" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin meghapus data ?')"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Panel Body -->
            </div>
            <!-- Akhir Panel -->
        </div>
    </div>
@endsection

