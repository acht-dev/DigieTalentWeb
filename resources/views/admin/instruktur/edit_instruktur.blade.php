@extends('layout.admin')

@section('title', 'Admin | Articles')
  
@section('header')
    <h1 class="page-header">
        Instructors
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/dashboard')}}">Home</a></li>
        <li><a href="{{url('/instruktur?m=4')}}">Instructor</a></li>
        <li class="active">Edit Data</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Edit Participant</div>
                    </div>
                </div>
                <!-- Awal Panel Body -->
                <div class="panel-body">
                    <form action="/instruktur/update/{{$instruktur->id_instruktur}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div>
                        <input type="hidden" name="id" class="form-control" value="{{$instruktur->id_instruktur}}">
                        </div>
                        <select name="kategori" style="width:193px" class="form-control form-group pull-right" required>
                            <option value="Pengajar">Pengajar</option>
                            <option value="Pengajar Pendamping">Pengajar Pendamping</option>
                            <option value="Sekretariat">Sekretariat</option>
                        </select>
                        <div class="sub-title">Nama</div>
                        <div>
                            <input type="text" name="nama" class="form-control" value="{{$instruktur->nama}}" required autofocus>
                        </div>
                        <div class="sub-title">Deskripsi</div>
                        <div class="form-group">
                            <textarea style="height:150px" name="deskripsi" class="form-control"required>{{$instruktur->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            Profile Image : <input type="file" name="file" class="" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit" value="edit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- Akhir Panel Body -->
            </div>
            <!-- Akhir Panel -->
        </div>
    </div>

@endsection


 