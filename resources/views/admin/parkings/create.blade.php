@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Iniciar nuevo estacionamiento</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Estacionamiento</a></li>
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
             <form method="POST" action="{{ route('admin.parkings.store') }}">
               {{ csrf_field() }}
               <div class="card-body">
                 <div class="form-group {{ $errors->has('origenId') ? ' is-invalid' : '' }}">
                   <label>Origen</label>
                   <select name="origenId" class="form-control">
                       <option value="">Seleccione un origen</option>
                     @foreach ($origenes as $origen)
                       <option value="{{ $origen->id }}">{{ $origen->nombre }}</option>
                     @endforeach
                   </select>
                   {!! $errors->first('origenId', '<span class="text-danger">:message</span>') !!}
                 </div>
                 <div class="form-group {{ $errors->has('userId') ? ' is-invalid' : '' }}">
                   <label>Usuario</label>
                   <select name="userId" class="form-control">
                     <option value="">Seleccione un Usuario</option>
                     </option>
                     @foreach ($users as $user)
                       <option value="{{ $user->id }}">{{ $user->name }}</option>
                     @endforeach
                   </select>
                   {!! $errors->first('userId', '<span class="text-danger">:message</span>') !!}
                 </div>
                <div class="form-group {{ $errors->has('dominio') ? ' is-invalid' : '' }}">
                  <label>Dominio</label>
                  <input name="dominio" value="{{ old('dominio') }}" class="form-control" placeholder="Ingrese su patente">
                  {!! $errors->first('dominio', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('tiempo') ? ' is-invalid' : '' }}">
                  <label>Cantidad tiempo</label>
                  <input name="tiempo" value="{{ old('tiempo') }}" class="form-control" placeholder="Ingrese cantidad de horas">
                  {!! $errors->first('tiempo', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('zonaId') ? ' is-invalid' : '' }}">
                  <label>Zona</label>
                  <select name="zonaId" class="form-control">
                    <option value="">Seleccione una zona</option>
                    </option>
                    @foreach ($zonas as $zona)
                      <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                    @endforeach
                  </select>
                  {!! $errors->first('zonaId', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Iniciar</button>
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