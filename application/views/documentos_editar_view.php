<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Editar documento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4 well">
        <legend>Editar documento</legend>
        <?php echo form_open("documento/editar/".$documento[0]->id); ?>
        <fieldset>

          <div class="form-group">
            <label for="nombre" class="control-label">Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" class="form-control" value="<?php echo $documento[0]->nombre; ?>">
          </div>

          <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" class="form-control" value="<?php echo $documento[0]->descripcion; ?>">
          </div>

          <div class="form-group">
            <label for="fecha" class="control-label">Fecha</label>
            <input name="fecha" placeholder="Fecha" type="date" class="form-control" value="<?php echo $documento[0]->fecha; ?>">
          </div>

          <div class="form-group">
            <label for="gestor" class="control-label">Gestor</label>
            <?php
            $options = array();
            foreach($gestores as $gestor) {
              $options[$gestor->id] = $gestor->nombre." ".$gestor->apellido;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('gestor', $options, $documento[0]->gestor, $attributes); ?>
          </div>

          <div class="form-group">
            <label for="unidad" class="control-label">Unidad</label>
            <?php
            $options = array();
            foreach($unidades as $unidad) {
              $options[$unidad->id] = $unidad->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('unidad', $options, $documento[0]->unidad, $attributes); ?>
          </div>

          <div class="form-group">
            <label for="tipo_documento" class="control-label">Tipo de documento</label>
            <?php
            $options = array();
            foreach($tipos_documento as $tipo_documento) {
              $options[$tipo_documento->id] = $tipo_documento->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('tipo_documento', $options, $documento[0]->tipo_documento, $attributes); ?>
          </div>

          <div class="form-group">
            <label for="estado" class="control-label">Estado</label>
            <?php
            $options = array();
            foreach($estados as $estado) {
              $options[$estado->id] = $estado->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('estado', $options, $documento[0]->estado, $attributes); ?>
          </div>

          <div class="form-group">
            <label for="archivo" class="control-label">Archivo</label>
            <input name="archivo" placeholder="Archivo" type="text" class="form-control" value="<?php echo $documento[0]->archivo; ?>">
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
