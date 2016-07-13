<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Modelos de <?php echo $organizacion; ?></title>
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
              <th>Elemento</th>
              <th>Valor</th>
              <th>Acci&oacute;n</th>
            </tr>
          </thead>
          <tbody>
            <?php for ($i = 0; $i < count($modelos); $i++) { ?>
              <tr>
                <td class="centered"><?php echo ($i+1); ?></td>
                <td><?php echo $elementos[$modelos[$i]->elemento]; ?></td>
                <td><?php echo $modelos[$i]->valor; ?></td>
                <td class="centered"><a href="<?php echo base_url("index.php/organizacion/editarModelo/" . $modelos[$i]->organizacion . "/" . $modelos[$i]->elemento); ?>">Editar</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <form id="agregar" action="<?php echo base_url("index.php/organizacion/insertarModelo/" . $id); ?>">
          <input type="submit" class="btn btn-primary" value="Agregar modelo">
        </form>
        <a href="<?php echo base_url("index.php/organizacion"); ?>">Regresar</a>
      </div>
    </div>
  </div>
</body>
</html>
