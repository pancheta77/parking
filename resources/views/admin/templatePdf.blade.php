<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <title>Certificación</title>

    </head>
    <body>
        <div class="container">

          <div class="row">
            <div class="col-xs-5">
              <img id="loading-image" src="images/est.png" width="100" height="100" />
            </div>
          </div>

            <div class="row">
              <div class="col-xs-5">
                <table>
                  <tr>
                    <th><h2><strong>Sistema PAVESUR</strong></h2></th>
                  </tr>
                  <tr>
                    <td>
                      Fecha: {{ $fecha->format('d/m/Y') }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Solicitado por: {{ auth()->user()->name }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      eMail: {{ auth()->user()->email }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Teléfono: {{ auth()->user()->celular }}
                    </td>
                  </tr>
                </table>

              </div>
            </div>
            <div class="row">
              <div class="col-xs-12"><h4 align="center">REPORTE VEHICULOS ESTACIONADOS</h4></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                	@yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
