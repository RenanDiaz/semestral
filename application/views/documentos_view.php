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
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($documentos); ++$i) { ?>
              <tr class="link" id="<?php echo $documentos[$i]->id; ?>">
                <td><?php echo $documentos[$i]->id; ?></td>
                <td><?php echo $documentos[$i]->nombre; ?></td>
                <td><?php echo $documentos[$i]->descripcion; ?></td>
                <td><?php echo $documentos[$i]->fecha; ?></td>
                <td><?php echo $documentos[$i]->gestor; ?></td>
                <td><?php echo $documentos[$i]->unidad; ?></td>
                <td><?php echo $documentos[$i]->tipo_documento; ?></td>
                <td><?php echo $documentos[$i]->estado; ?></td>
                <td><?php echo $documentos[$i]->archivo; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $(".link").click(function() {
        var id = $(this).attr("id");
        location.href = "documento/editar/" + id;
      });
    </script>
  </body>
  </html>
