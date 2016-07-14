<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar tipo de documento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4 well">
        <legend>Editar tipo de documento</legend>
        <?php echo form_open("tipo_documento/editar/".$tipo_documento[0]->id); ?>
        <fieldset>

          <div class="form-group">
            <label for="descripcion" class="control-label">Tipo de documento</label>
            <input name="descripcion" placeholder="Tipo de documento" type="text" class="form-control" value="<?php echo $tipo_documento[0]->descripcion; ?>">
          </div>

          <div class="form-group text-left">
            <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Guardar">
            <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancelar" onclick="window.history.back()">
          </div>

        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
