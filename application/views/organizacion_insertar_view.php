<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar Organizaci&oacute;n</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Insertar una organizaci&oacute;n</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "formulario_organizacion", "name" => "formulario_organizacion");
        echo form_open("organizacion/insertar", $attributes);?>
        <fieldset>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-sm-4">
                <label for="nombre" class="control-label">Nombre</label>
              </div>
              <div class="col-lg-8 col-sm-8">
                <input id="nombre" name="nombre" placeholder="Nombre" type="text" class="form-control" value="<?php echo set_value('nombre'); ?>" />
                <span class="text-danger"><?php echo form_error('nombre'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-sm-4">
                <label for="price" class="control-label">Direcci&oacute;n</label>
              </div>
              <div class="col-lg-8 col-sm-8">
                <input id="direccion" name="direccion" placeholder="Direcci&oacute;n" type="text" class="form-control" value="<?php echo set_value('direccion'); ?>" />
                <span class="text-danger"><?php echo form_error('direccion'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-sm-4">
                <label for="image" class="control-label">Cantidad de empleados</label>
              </div>
              <div class="col-lg-8 col-sm-8">
                <input id="cantidad_empleados" name="cantidad_empleados" placeholder="Cantidad de empleados" type="number" class="form-control" value="<?php echo set_value('cantidad_empleados'); ?>" />
                <span class="text-danger"><?php echo form_error('cantidad_empleados'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-sm-4">
                <label for="image" class="control-label">&Iacute;ndice Tecnol&oacute;gico</label>
              </div>
              <div class="col-lg-8 col-sm-8">
                <input id="indice_tecnologico" name="indice_tecnologico" placeholder="&Iacute;ndice Tecnol&oacute;gico" type="number" class="form-control" value="<?php echo set_value('indice_tecnologico'); ?>" />
                <span class="text-danger"><?php echo form_error('indice_tecnologico'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
              <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insertar" />
              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" onclick="window.history.back()" value="Cancel" />
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
