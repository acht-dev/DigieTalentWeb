@extends('layout.admin')

@section('title', 'Admin | Articles')
 
@section('header') 
    <h1 class="page-header">
        Articles
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li class="active">Articles</li>
    </ol>
@endsection

@section('body')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="card-title">
                <div class="title">All Article</div>
            </div>
        </div>
        <!-- Awal Panel Body -->
        <div class="panel-body">

            <!-- Awal Search -->
            <div class="box" style="margin-bottom: 50px;">
                <form class="form-inline pull-right" action="" method="POST">
                    <div class="input-group">
                        <input type="text" name="pencarian" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hiden="true"></span></button>
                        </span>
                    </div>
                </form>
            </div>
            <!-- Akhir Search -->

            <!-- Awal Container -->
            <div class="container-fluid">
                <!-- Awal Artikel -->
                <div class="row">
                    @foreach ($artikel as $item)
 
                    <div class="col-sm-4">
                        <div class="panel panel-default card">

                                <div class="panel-heading post-thumb">
                                    <img style="height:197px; width:300px" class="img img-responsive" src="{{asset('/ckeditor/kcfinder/upload/images/'.$item -> thumbnail) }}" alt="..."/>
                                </div>

                                <div class="panel-body post-body">
                                    <a class="label label-default" href="#">{{$item -> label}}</a>
                                    <h3 class="post-title">
                                        <a href="#">{{$item -> judul}}</a>
                                    </h3>

                                    <div class="post-author">
                                        <img class="author-photo" height="32" src="{{asset('ckeditor/kcfinder/upload/images/'.$item -> foto)}} " width="32">
                                        <a href="#">{{$item ->nama}}</a>
                                    </div>

                                    <div class="dropup proses">
                                        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="fa fa-cog" aria-hiden="true"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="/artikel/destroy/{{$item -> id_artikel}}" onclick="return confirm('Yakin ingin meghapus data ?')">Delete</a></li>
                                            <li><a href="/artikel/edit/{{$item -> id_artikel}}">Edit</a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>	
                <!-- Akhir Artikel  -->

            </div>
            <!-- Akhir Container -->
            <a href="artikel/create?m=2" class="act-btn">+</a>
        </div>
        <!-- Akhir Panel Body -->
    </div>
@endsection