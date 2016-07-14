<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Actualizaci&oacute;n de Datos - Modelo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>"> -->
  <link rel="stylesheet" href="<?php echo base_url("css/themes/default/jquery.mobile-1.4.5.min.css"); ?>">
  <script src="<?php echo base_url("assets/js2/jquery.js"); ?>"></script>
  <script src="<?php echo base_url("assets/js2/jquery.mobile-1.4.5.min.js"); ?>"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 well">
        <legend>Actualizaci&oacute;n de Datos - Estado</legend>
        <fieldset>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="descripcion" class="control-label">Estado</label>
              </div>
              <div class="col-md-8">
                <input name="descripcion" placeholder="Estado" type="text" class="form-control"  value="<?php echo $descripcion; ?>" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-md-8 text-left">
              <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Guardar" />
              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancelar" onclick="window.history.back()"/>
            </div>
          </div>
        </fieldset>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
