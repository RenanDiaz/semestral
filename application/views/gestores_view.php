<html>
<head>
  <title>Gestores</title>
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
              <th>Apellido</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($gestores); ++$i) { ?>
              <tr class="link" id="<?php echo $gestores[$i]->id; ?>">
                <td><?php echo $gestores[$i]->id; ?></td>
                <td><?php echo $gestores[$i]->nombre; ?></td>
                <td><?php echo $gestores[$i]->apellido; ?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-md-2">
          <a href="gestor/insertar" class="btn btn-info">Agregar</a>
        </div>
    </div>
    <script type="text/javascript">
      $(".link").click(function() {
        var id = $(this).attr("id");
        location.href = "gestor/editar/" + id;
      });
    </script>
  </body>
  </html>
