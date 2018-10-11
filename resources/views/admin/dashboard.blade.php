@extends('admin.layout')

@section('header')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Panel de administración</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@stop

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h5 class="m-0">Usuario Autenticado como:</h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">{{ auth()->user()->name }}</h6>

            <p class="card-text">
              Correo registrado: {{ auth()->user()->email }} <br />
              Celular: {{ auth()->user()->celular }}
            </p>

          </div>
        </div>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@stop
