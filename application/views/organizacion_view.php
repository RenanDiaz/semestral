<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Organizaci&oacute;n</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12">
        <table class="table table-striped table-hover">
          <thead>
            <tr class="centered">
              <th>#</th>
              <th>ID</th>
              <th>Nombre</th>
              <th>Direcci&oacute;n</th>
              <th>Cantidad de empleados</th>
              <th>&Iacute;ndice Tecnol&oacute;gico</th>
              <th>Modelos</th>
              <th>Acci&oacute;n</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($organizaciones); $i++) { ?>
              <tr>
                <td class="centered"><?php echo ($i+1); ?></td>
                <td class="centered"><?php echo $organizaciones[$i]->id; ?></td>
                <td><?php echo $organizaciones[$i]->nombre; ?></td>
                <td><?php echo $organizaciones[$i]->direccion; ?></td>
                <td class="centered"><?php echo $organizaciones[$i]->cantidad_empleados; ?></td>
                <td class="centered"><?php echo $organizaciones[$i]->indice_tecnologico; ?></td>
                <td class="centered"><a href="<?php echo base_url("index.php/organizacion/modelo/".$organizaciones[$i]->id); ?>">Ver</a></td>
                <td class="centered"><a href="<?php echo base_url("index.php/organizacion/editar/".$organizaciones[$i]->id); ?>">Editar</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <form id="agregar" action="<?php echo base_url("index.php/organizacion/insertar/"); ?>">
          <input type="submit" class="btn btn-primary" value="Agregar organizaci&oacute;n">
        </form>
      </div>
    </div>
  </div>
</body>
</html>
