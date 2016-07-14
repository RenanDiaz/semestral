<html>
<head>
  <title>Estados</title>
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
              <th>Descripci&oacute;n</th>
              <th>Acci&oacute;n</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($estados); ++$i) { ?>
              <tr id="<?php echo $estados[$i]->id; ?>">
                <td><?php echo $estados[$i]->id; ?></td>
                <td><?php echo $estados[$i]->descripcion; ?></td>
                <td class="text-center">
                  <a href="estado/editar/<?php echo $estados[$i]->id; ?>" class="btn btn-info">Editar</a>
                  <a href="estado/eliminar/<?php echo $estados[$i]->id; ?>" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-2">
          <a href="estado/insertar" class="btn btn-primary">Agregar</a>
        </div>
      </div>
    </div>
  </body>
  </html>
