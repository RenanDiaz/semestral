<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agregar gestor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4 well">
        <legend>Agregar gestor</legend>
        <?php echo form_open("gestor/insertar"); ?>
        <fieldset>

          <div class="form-group">
            <label for="nombre" class="control-label">Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="apellido" class="control-label">Apellido</label>
            <input name="apellido" placeholder="Apellido" type="text" class="form-control">
          </div>

          <div class="form-group text-left">
            <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Guardar" />
            <a id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" href="../gestor"/>Cancelar</a>
          </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
