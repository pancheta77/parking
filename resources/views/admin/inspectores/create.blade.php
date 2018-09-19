@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ingresar inspector nuevo</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Inspectores</a></li>
          <li class="breadcrumb-item active">Nuevo</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@stop

@section('content')
  <div class="container-fluid">
   <div class="row">
     <div class="col-lg-6">
       <div class="card card-primary card-outline">
         <div class="card-body">
           <div class="card">
             <form method="POST" action="{{ route('admin.inspectores.store') }}">
               {{ csrf_field() }}
               <div class="card-body">
                <div class="form-group {{ $errors->has('apellido') ? ' is-invalid' : '' }}">
                  <label>Apellido</label>
                  <input name="apellido" value="{{ old('apellido') }}" class="form-control" placeholder="Ingrese el apellido del Inspector">
                  {!! $errors->first('apellido', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                  <label>Nombres</label>
                  <input name="nombre" value="{{ old('nombre') }}" class="form-control" placeholder="Ingrese nombre completo">
                  {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('legajo') ? ' is-invalid' : '' }}">
                  <label>Legajo</label>
                  <input name="legajo" value="{{ old('legajo') }}" class="form-control" placeholder="Ingrese legajo">
                  {!! $errors->first('legajo', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Guardar</button>
                </div>
              </div>
            </form>
            <!-- /.card-body -->
          </div>
         </div>
       </div>
     </div>
     <!-- /.col-md-6 -->
   </div>
   <!-- /.row -->
 </div><!-- /.container-fluid -->
@stop
