@extends('layout.admin')

@section('title', 'Admin | Articles')
  
@section('header')
    <h1 class="page-header">
        Articles
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li><a href="{{url('artikel?m=2')}}">Articles</a></li>
        <li class="active">Data</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Add New Article</div>
                    </div>
                </div>
                <div class="panel-body">
                    <form action="/artikel" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <select name="label" style="width:150px" class="form-control form-group pull-right" required>
                            <option value="Event">Event</option>
                            <option value="Tips & Tricks">Tips & Tricks</option>
                        </select>
                        <div class="form-group">
                            <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" required autofocus>
                        </div>
                        <div class="form-group">
                            <textarea style="height:10%" name="isi" id="konten" class="form-control ckeditor" required></textarea>
                        </div>
                        <div class="form-group">
                            Featured Image : <input type="file" name="file" class="" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="add" value="simpan" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


 