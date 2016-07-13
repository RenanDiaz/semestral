<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizacion de Datos - Empleados | CodeIgniter Update Query</title>
  <!--link the bootstrap css file-->
  <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
  <!-- link jquery ui css-->
  <link href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
  <!--include jquery library-->
  <script src="<?php echo base_url('assets/js/jquery-1.10.2.js'); ?>"></script>
  <!--load jquery ui js file-->
  <script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>

  <style type="text/css">
  .colbox {
    margin-left: 0px;
    margin-right: 0px;
  }
  </style>

  <script type="text/javascript">
  //load datepicker control onfocus
  $(function() {
    $("#hireddate").datepicker();
  });
  </script>

</head>
<body>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 well">
        <legend>Actualizacion de Datos - Empleados</legend>
        <?php
        $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
        echo form_open("updateEmployee/index/" . $empno, $attributes);?>
        <fieldset>

          <div class="form-group">
            <div class="row colbox">

              <div class="col-md-4">
                <label for="employeeno" class="control-label">Numero Empleado </label>
              </div>
              <div class="col-md-8">
                <input id="employeeno" name="employeeno" placeholder="employeeno" type="text" disabled="disabled" class="form-control"  value="<?php echo $emprecord[0]->employee_no; ?>" />
                <span class="text-danger"><?php echo form_error('employeeno'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="employeename" class="control-label">Nombre Empleado</label>
              </div>
              <div class="col-md-8">
                <input id="employeename" name="employeename" placeholder="employeename" type="text" class="form-control"  value="<?php echo set_value('employeename', $emprecord[0]->employee_name); ?>" />
                <span class="text-danger"><?php echo form_error('employeename'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="department" class="control-label">Departmento</label>
              </div>
              <div class="col-md-8">

                <?php
                $attributes = 'class = "form-control" id = "department"';
                echo form_dropdown('department',$department,set_value('department', $emprecord[0]->department_id),$attributes);?>
                <span class="text-danger"><?php echo form_error('department'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="designation" class="control-label">Puesto</label>
              </div>
              <div class="col-md-8">

                <?php
                $attributes = 'class = "form-control" id = "designation"';
                echo form_dropdown('designation',$designation, set_value('designation', $emprecord[0]->designation_id), $attributes);?>

                <span class="text-danger"><?php echo form_error('designation'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="hireddate" class="control-label">Fecha Contrat.</label>
              </div>
              <div class="col-md-8">
                <input id="hireddate" name="hireddate" placeholder="hireddate" type="text" class="form-control"  value="<?php echo set_value('hireddate', @date('d-m-Y', @strtotime($emprecord[0]->hired_date))); ?>" />
                <span class="text-danger"><?php echo form_error('hireddate'); ?></span>

              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-4">
                <label for="salary" class="control-label">Salario</label>
              </div>
              <div class="col-md-8">
                <input id="salary" name="salary" placeholder="salary" type="text" class="form-control"  value="<?php echo set_value('salary', $emprecord[0]->salary); ?>" />
                <span class="text-danger"><?php echo form_error('salary'); ?></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-4 col-md-8 text-left">
              <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Actualizar" />
              <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancelar" />
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
