@extends('admin.layout')

@section('header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Ingresar zona nueva</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Panel</a></li>
          <li class="breadcrumb-item"><a href="#">Zonas</a></li>
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
             <form method="POST" action="{{ route('admin.zonas.update', $zona) }}">
               {{ csrf_field() }} {{ method_field('PUT') }}
               <div class="card-body">
                <div class="form-group {{ $errors->has('nombre') ? ' is-invalid' : '' }}">
                  <label>Nombre de Zona</label>
                  <input name="nombre" value="{{ old('nombre', $zona->nombre) }}" class="form-control" placeholder="Ingrese el nombre de la zona">
                  {!! $errors->first('nombre', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('descripcion') ? ' is-invalid' : '' }}">
                  <label>Descripción de Zona</label>
                  <input name="descripcion" value="{{ old('descripcion', $zona->descripcion) }}" class="form-control" placeholder="Ingrese la descripción de la zona">
                  {!! $errors->first('descripcion', '<span class="text-danger">:message</span>') !!}
                </div>
                <div class="form-group {{ $errors->has('tarifaId') ? ' is-invalid' : '' }}">
                  <label>Tarifa</label>
                  <select name="tarifaId" class="form-control">
                    <option value="">Seleccione una tarifa</option>
                    </option>
                    @foreach ($tarifas as $tarifa)
                      <option value="{{ $tarifa->id }}">{{ $tarifa->nombre }} | Valor Hora $ {{ $tarifa->valor_base }} | Tasa: {{$tarifa->tasa}}%</option>
                    @endforeach
                  </select>
                  {!! $errors->first('tarifaId', '<span class="text-danger">:message</span>') !!}
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary pull-left">Actualizar</button>
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
