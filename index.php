<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Caso Practico</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-4">Catalogo de Datos</h1>
      <p class="lead">Aplicacion que muestra todos los datos de las tablas relacionadas de la base de datos.</p>
      <hr class="my-4">
      <p>Este es un ejemplo de como mostrar informacion de multiples tablas relacionadas desde una base de datos MySQL en el curso de Aplicaciones en la Nube.</p>
    </div>

    <h2>Clientes</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Correo Electronico</th>
          <th>Direccion</th>
          <th>Localidad</th>
          <th>Tipo Cliente</th>
          <th>Telefonos</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $conexion = mysqli_connect(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), "examen_garciatrejo");
        $cadenaSQL = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->nombre_cliente . "</td>
                  <td>" . $fila->email . "</td>
                  <td>" . $fila->direccion_cl . "</td>
                  <td>" . $fila->localidad . "</td>
                  <td>" . $fila->tipo_cliente . "</td>
                  <td>" . $fila->Telefonos . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
    <h2>Productos</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre Producto</th>
          <th>Descripcion</th>
          <th>Tamaño</th>
          <th>Acabado</th>
          <th>Impresion</th>
          <th>Tipo Papel</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM producto";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->nombre_Producto . "</td>
                  <td>" . $fila->descripcion . "</td>
                  <td>" . $fila->tamaño_producto . "</td>
                  <td>" . $fila->acabado . "</td>
                  <td>" . $fila->impresion . "</td>
                  <td>" . $fila->tipo_papel . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>

    <h2>Empleados</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Correo Electronico</th>
          <th>Telefonos</th>
          <th>Salario</th>
          <th>Direccion</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM empleado";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->nombre . "</td>
                  <td>" . $fila->apellidos . "</td>
                  <td>" . $fila->email . "</td>
                  <td>" . $fila->telefonos . "</td>
                  <td>" . $fila->salario . "</td>
                  <td>" . $fila->direccion_emp . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>

    <h2>Departamentos</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre Departamento</th>
          <th>Correo Electronico</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM departamento";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->nombre_departamento . "</td>
                  <td>" . $fila->email . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>

    <h2>Facturas</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Factura Numero</th>
          <th>Pago</th>
          <th>Importe</th>
          <th>Envio</th>
          <th>Cliente DNI</th>
          <th>Producto Nombre</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM factura";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->num_factura . "</td>
                  <td>" . $fila->pago . "</td>
                  <td>" . $fila->importe . "</td>
                  <td>" . $fila->envio . "</td>
                  <td>" . $fila->DNI_cliente . "</td>
                  <td>" . $fila->nombre_producto . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>
    <h2>Empleado - Departamento</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Empleado DNI</th>
          <th>Departamento Nombre</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM empleado_departamento";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->DNI_empleado . "</td>
                  <td>" . $fila->nombre_departamento . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>

    <h2>Empleado - Producto</h2>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Empleado DNI</th>
          <th>Producto Nombre</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $cadenaSQL = "SELECT * FROM empleado_producto";
        $resultado = mysqli_query($conexion, $cadenaSQL);
        while ($fila = mysqli_fetch_object($resultado)) {
          echo "<tr>
                  <td>" . $fila->DNI_empleado . "</td>
                  <td>" . $fila->nombre_producto . "</td>
                </tr>";
        }
        ?>
      </tbody>
    </table>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
