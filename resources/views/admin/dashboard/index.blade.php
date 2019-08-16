@extends('layout.admin')

@section('title', 'Admin | Dashboard')

@section('header')
    <h1 class="page-header">
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('dashboard')}}">Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <!-- Awal Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="card-title">
                        <div class="title">Dashboard</div>
                    </div>
                </div>

                <!-- Awal Panel Body -->
                <div class="panel-body">
                </div>
                <!-- Akhir Panel Body -->

            </div>
             <!-- Akhir Panel -->
        </div>
    </div>
@endsection