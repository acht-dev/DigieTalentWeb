@extends('layout.admin')

@section('title', 'Admin | Participants')

@section('header')
    <h1 class="page-header">
        Participants
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li><a href="{{url('peserta?m=5')}}">Participants</a></li>
        <li class="active">Add Data</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Add Participants</div>
                    </div>
                </div>
                <!-- Awal Panel Body -->
                <div class="panel-body">
                    <form action="/peserta" method="post">
                        {{ csrf_field() }}
                        <div class="sub-title">Penyelengara</div>
                        <div>
                            <input type="text" name="penyelengara" class="form-control" value="Universitas Gunadarma" required>
                        </div>
                        <div class="sub-title">Tema</div>
                        <div class="form-group">
                            <input type="text" name="tema" class="form-control" value="Machine Learnig" required>
                        </div>
                        <div class="sub-title">Nama Peserta</div>
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" placeholder="Full Name" required autofocus>
                        </div>
                        <div class="sub-title">No Hp</div>
                        <div class="form-group">
                            <input type="text" name="hp" class="form-control" placeholder="No Handphone" required>
                        </div>  
                        <div class="sub-title">Email</div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Qwerty@gmail.com" required>
                        </div>
                        <div class="sub-title">Asal Provinsi</div>
                        <div class="form-group">
                            <input type="text" name="asal" class="form-control" placeholder="Asal Provinsi" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add" value="Add" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- Akhir Panel Body -->
            </div>
            <!-- Akhir Panel -->
        </div>
    </div>
@endsection

