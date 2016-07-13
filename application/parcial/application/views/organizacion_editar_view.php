<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Actualizaci&oacute;n de Datos - Organizaci&oacute;n</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 well">
        <legend>Actualizaci&oacute;n de Datos - Organizaci&oacute;n</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "formulario_organizacion", "name" => "formulario_organizacion");
        echo form_open("organizacion/editar/" . $id, $attributes);?>
        <fieldset>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="id" class="control-label">ID</label>
              </div>
              <div class="col-md-8">
                <input id="id" name="id" placeholder="ID" type="text" disabled="disabled" class="form-control" value="<?php echo $organizacion[0]->id; ?>" />
                <span class="text-danger"><?php echo form_error('id'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="nombre" class="control-label">Nombre</label>
              </div>
              <div class="col-md-8">
                <input id="nombre" name="nombre" placeholder="Nombre" type="text" class="form-control" value="<?php echo set_value('nombre', $organizacion[0]->nombre); ?>" />
                <span class="text-danger"><?php echo form_error('nombre'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="direccion" class="control-label">Direcci&oacute;n</label>
              </div>
              <div class="col-md-8">
                <input id="direccion" name="direccion" placeholder="Direcci&oacute;n" type="text" class="form-control"  value="<?php echo set_value('direccion', $organizacion[0]->direccion); ?>" />
                <span class="text-danger"><?php echo form_error('direccion'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="cantidad_empleados" class="control-label">Cantidad de empleados</label>
              </div>
              <div class="col-md-8">
                <input id="cantidad_empleados" name="cantidad_empleados" placeholder="Cantidad de empleados" type="number" class="form-control" value="<?php echo set_value('cantidad_empleados', $organizacion[0]->cantidad_empleados); ?>" />
                <span class="text-danger"><?php echo form_error('cantidad_empleados'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="indice_tecnologico" class="control-label">&Iacute;ndice Tecnol&oacute;gico</label>
              </div>
              <div class="col-md-8">
                <input id="indice_tecnologico" name="indice_tecnologico" placeholder="&Iacute;ndice Tecnol&oacute;gico" type="number" class="form-control"  value="<?php echo set_value('indice_tecnologico', $organizacion[0]->indice_tecnologico); ?>" />
                <span class="text-danger"><?php echo form_error('indice_tecnologico'); ?></span>
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
