<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agregar documento</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4 well">
        <legend>Agregar documento</legend>
        <?php echo form_open("documento/insertar"); ?>
        <fieldset>

          <div class="form-group">
            <label for="nombre" class="control-label">Nombre</label>
            <input name="nombre" placeholder="Nombre" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="descripcion" class="control-label">Descripcion</label>
            <input name="descripcion" placeholder="Descripcion" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="fecha" class="control-label">Fecha</label>
            <input name="fecha" placeholder="Fecha" type="date" class="form-control">
          </div>

          <div class="form-group">
            <label for="gestor" class="control-label">Gestor</label>
            <?php
            $options = array();
            foreach($gestores as $gestor) {
              $options[$gestor->id] = $gestor->nombre." ".$gestor->apellido;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('gestor', $options, "", $attributes); ?>
          </div>

          <div class="form-group">
            <label for="unidad" class="control-label">Unidad</label>
            <?php
            $options = array();
            foreach($unidades as $unidad) {
              $options[$unidad->id] = $unidad->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('unidad', $options, "", $attributes); ?>
          </div>

          <div class="form-group">
            <label for="tipo_documento" class="control-label">Tipo de documento</label>
            <?php
            $options = array();
            foreach($tipos_documento as $tipo_documento) {
              $options[$tipo_documento->id] = $tipo_documento->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('tipo_documento', $options, "", $attributes); ?>
          </div>

          <div class="form-group">
            <label for="estado" class="control-label">Estado</label>
            <?php
            $options = array();
            foreach($estados as $estado) {
              $options[$estado->id] = $estado->descripcion;
            }
            $attributes = 'class="form-control"';
            echo form_dropdown('estado', $options, "", $attributes); ?>
          </div>

          <div class="form-group">
            <label for="archivo" class="control-label">Archivo</label>
            <input name="archivo" placeholder="Archivo" type="text" class="form-control">
          </div>

          <div class="form-group text-left">
            <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Guardar" />
            <a id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" href="../documento"/>Cancelar</a>
          </div>
        </fieldset>
        <?php echo form_close(); ?>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
  </div>
</body>
</html>
