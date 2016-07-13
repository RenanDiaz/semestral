<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Insertar modelo para <?php echo $organizacion; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/common.css"); ?>">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
        <legend>Insertar un modelo para <?php echo $organizacion; ?></legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "formulario_modelo", "name" => "formulario_modelo");
        echo form_open("organizacion/insertarModelo/" . $id, $attributes);?>
        <fieldset>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="elemento" class="control-label">Elemento</label>
              </div>
              <div class="col-md-8">
                <?php
                $attributes = 'class = "form-control", id = "elemento"';
                echo form_dropdown('elemento', $elementos, '', $attributes);?>
                <span class="text-danger"><?php echo form_error('elemento'); ?></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row colbox">
              <div class="col-lg-4 col-sm-4">
                <label for="valor" class="control-label">Valor</label>
              </div>
              <div class="col-lg-8 col-sm-8">
                <input id="valor" name="valor" placeholder="Valor" type="text" class="form-control" value="<?php echo set_value('valor'); ?>" />
                <span class="text-danger"><?php echo form_error('valor'); ?></span>
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
