@extends('layout.admin')

@section('title', 'Admin | Instructors')

@section('header')
    <h1 class="page-header">
        Instructors
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li><a href="{{url('instruktur?m=4')}}">Instructors</a></li>
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
                    <div class="title">Add Instructor</div>
                </div>
            </div>
            <!-- Awal Panel Body -->
            <div class="panel-body">
                <form action="/instruktur" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <select name="kategori" style="width:193px" class="form-control form-group pull-right" required>
                        <option value="Pengajar">Pengajar</option>
                        <option value="Pengajar Pendamping">Pengajar Pendamping</option>
                        <option value="Sekretariat">Sekretariat</option>
                    </select>
                    <div class="sub-title">Nama</div>
                    <div>
                        <input type="text" name="nama" class="form-control" placeholder="Full Name" required autofocus>
                    </div>
                    <div class="sub-title">Deskripsi</div>
                    <div class="form-group">
                        <textarea style="height:150px" name="deskripsi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        Profile Image : <input type="file" name="file" class="" required>
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

