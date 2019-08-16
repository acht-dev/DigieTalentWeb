@extends('layout.admin')

@section('title', 'Admin | Participants')

@section('header')
    <h1 class="page-header">
        Participants
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li><a href="{{url('peserta?m=5')}}">Participants</a></li>
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
                    <form action="/peserta/update/{{$peserta->id_peserta}}" method="post">
                        {{ csrf_field() }}
                        <div>
                        <input type="hidden" name="id" class="form-control" value="{{$peserta->id_peserta}}">
                        </div>
                        <div class="sub-title">Penyelengara</div>
                        <div>
                            <input type="text" name="penyelengara" class="form-control" value="{{$peserta->penyelengara}}" required>
                        </div>
                        <div class="sub-title">Tema</div>
                        <div class="form-group">
                            <input type="text" name="tema" class="form-control" value="{{$peserta->tema}}" required>
                        </div>
                        <div class="sub-title">Nama Peserta</div>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" value="{{$peserta->nama_peserta}}" required autofocus>
                        </div>
                        <div class="sub-title">No Hp</div>
                        <div class="form-group">
                            <input type="text" name="hp" class="form-control" value="{{$peserta->no_hp}}" required>
                        </div>  
                        <div class="sub-title">Email</div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="{{$peserta->email}}" required>
                        </div>
                        <div class="sub-title">Asal Provinsi</div>
                        <div class="form-group">
                            <input type="text" name="asal" class="form-control" value="{{$peserta->asal_provinsi}}" required>
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

