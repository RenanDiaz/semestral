<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agregar unidad</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 well">
        <legend>Agregar unidad</legend>
        <fieldset>

          <div class="form-group">
            <label for="descripcion" class="control-label">Unidad</label>
            <input name="descripcion" placeholder="Estado" type="text" class="form-control">
          </div>

          <div class="form-group text-left">
            <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Guardar" />
            <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancelar" onclick="window.history.back()"/>
          </div>
        </fieldset>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
