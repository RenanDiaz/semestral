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
        <legend>Actualizaci&oacute;n de Datos - Modelo</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "formulario_organizacion", "name" => "formulario_organizacion");
        echo form_open("organizacion/editarModelo/" . $modelo[0]->organizacion . "/" . $modelo[0]->elemento, $attributes);?>
        <fieldset>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="organizacion" class="control-label">Organizaci&oacute;n</label>
              </div>
              <div class="col-md-8">
                <input id="organizacion" name="organizacion" placeholder="Organizaci&oacute;n" type="text" disabled="disabled" class="form-control" value="<?php echo $organizacion; ?>" />
                <span class="text-danger"><?php echo form_error('organizacion'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="elemento" class="control-label">Elemento</label>
              </div>
              <div class="col-md-8">
                <?php
                $attributes = 'class = "form-control" id = "elemento"';
                echo form_dropdown('elemento', $elementos, set_value('elemento', $modelo[0]->elemento), $attributes); ?>
                <span class="text-danger"><?php echo form_error('elemento'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="valor" class="control-label">Valor</label>
              </div>
              <div class="col-md-8">
                <input id="valor" name="valor" placeholder="Valor" type="text" class="form-control"  value="<?php echo set_value('valor', $modelo[0]->valor); ?>" />
                <span class="text-danger"><?php echo form_error('valor'); ?></span>
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
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
