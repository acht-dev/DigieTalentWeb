@extends('layout.admin')

@section('title', 'Admin | Articles')
  
@section('header')
    <h1 class="page-header">
        Articles
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li><a href="{{url('peserta?m=2')}}">Articles</a></li>
        <li class="active">Edit Data</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Edit Article</div>
                    </div>
                </div>
                <div class="panel-body">
                <form action="/artikel/update/{{$artikel->id_artikel}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" value="{{$artikel->id}}" name="id">
                        </div>
                        <select name="label" style="width:150px" class="form-control form-group pull-right" required>
                            <option value="Event">Event</option>
                            <option value="Tips & Tricks">Tips & Tricks</option>
                        </select>
                        <div class="form-group">
                            <input type="text" value="{{$artikel->judul}}" name="judul" class="form-control" placeholder="Masukan Judul" required autofocus>
                        </div>
                        <div class="form-group">
                            <textarea style="height:10%" name="isi" id="ckeditor" class="form-control ckeditor" required>{{$artikel->isi}}</textarea>
                        </div>
                        <div class="form-group">
                            Thumbnail : <input type="file" name="file" class="" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="edit" value="Update" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


 