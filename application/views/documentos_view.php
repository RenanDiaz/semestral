<html>
<head>
  <title>Documentos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
  <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Descripci&oacute;n</th>
              <th>Fecha</th>
              <th>Gestor</th>
              <th>Unidad</th>
              <th>Tipo de documento</th>
              <th>Estado</th>
              <th>Archivo</th>
              <th>Acci&oacute;n</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($documentos); ++$i) { ?>
              <tr id="<?php echo $documentos[$i]->id; ?>">
                <td><?php echo $documentos[$i]->id; ?></td>
                <td><?php echo $documentos[$i]->nombre; ?></td>
                <td><?php echo $documentos[$i]->descripcion; ?></td>
                <td><?php echo $documentos[$i]->fecha; ?></td>
                <td><?php echo $documentos[$i]->gestor[0]->nombre." ".$documentos[$i]->gestor[0]->apellido; ?></td>
                <td><?php echo $documentos[$i]->unidad[0]->descripcion; ?></td>
                <td><?php echo $documentos[$i]->tipo_documento[0]->descripcion; ?></td>
                <td><?php echo $documentos[$i]->estado[0]->descripcion; ?></td>
                <td><?php echo $documentos[$i]->archivo; ?></td>
                <td class="text-center">
                  <a href="documento/editar/<?php echo $documentos[$i]->id; ?>" class="btn btn-info">Editar</a>
                  <a href="documento/eliminar/<?php echo $documentos[$i]->id; ?>" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-2">
        <a href="documento/insertar" class="btn btn-primary">Agregar</a>
      </div>
    </div>
  </body>
  </html>
