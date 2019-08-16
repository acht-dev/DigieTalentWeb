@extends('layout.admin')

@section('title', 'Admin | Instructor')

@section('header')
    <h1 class="page-header">
        Articles
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li class="active">Instructors</li>
    </ol>
@endsection

@section('body')

    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">All Instructors</div>
                    </div>
                </div>
                <!-- Awal Panel Body -->
                <div class="panel-body">

                    <div class="row">
                        <div class="col col-lg-12">
                                <a style="margin-bottom:10px" href="/instruktur/create?m=4" class="btn btn-primary btn-xs pull-right"><i class="glyphicon glyphicon-plus"></i>Add New Instructor</a>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table  class="table table-striped table-bordered table-hover" id="instruktur">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th><i class="glyphicon glyphicon-cog"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($instruktur as $item)
                                    <tr>
                                        <td>{{$loop -> iteration}}</td>
                                        <td>{{($item->nama)}}</td>
                                        <td>{{($item->deskripsi)}}</td>
                                        <td>{{($item->kategori)}}</td>
                                        <td align="center"><img class="img img-responsive" src="{{('/ckeditor/kcfinder/upload/images/'.$item->foto)}}" width="32"></td>
                                        <td align="center">
                                            <a href="instruktur/edit/{{$item->id_instruktur}}?m=4" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                            <a href="instruktur/destroy/{{$item->id_instruktur}}" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin meghapus data ?')"><i class="glyphicon glyphicon-trash"></i></a>
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

