<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reporte</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body >
  <div class="container">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> Sistema PAVESUR
              <small class="float-right">Fecha: {{ $fecha->format('d/m/Y')}}</small>
            </h2>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            <address>
              <strong>Reporte Estacionamientos</strong><br>
              <br>
              <b>Solicitante:</b> {{ auth()->user()->name }}<br>
              <b>Correo:</b> {{ auth()->user()->email }}<br>
            </address>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->

        @yield('content')
        <!-- /.row -->


      </section>
      <!-- /.content -->
    </div>
    <!-- ./wrapper -->
  </div>
</body>
</html>
