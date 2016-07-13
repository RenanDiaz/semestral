<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Datos - Productos</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
    <!-- link jquery ui css-->
    <link href="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.css'); ?>" rel="stylesheet" type="text/css" />
    <!--include jquery library-->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <!--load jquery ui js file-->
    <script src="<?php echo base_url('assets/jquery-ui-1.11.2/jquery-ui.min.js'); ?>"></script>

    <style type="text/css">
    .colbox {
        margin-left: 0px;
        margin-right: 0px;
    }
    </style>

</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <legend>Actualizacion de Datos - Productos</legend>
                <?php
                $attributes = array("class" => "form-horizontal", "id" => "productform", "name" => "productform");
                echo form_open("products/update/" . $id, $attributes);?>
                <fieldset>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-md-4">
                                <label for="id" class="control-label">Product ID</label>
                            </div>
                            <div class="col-md-8">
                                <input id="id" name="id" placeholder="ID" type="text" disabled="disabled" class="form-control" value="<?php echo $product[0]->id; ?>" />
                                <span class="text-danger"><?php echo form_error('id'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-md-4">
                                <label for="name" class="control-label">Nombre del Producto</label>
                            </div>
                            <div class="col-md-8">
                                <input id="name" name="name" placeholder="Name" type="text" class="form-control" value="<?php echo set_value('name', $product[0]->name); ?>" />
                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-md-4">
                                <label for="image" class="control-label">Price</label>
                            </div>
                            <div class="col-md-8">
                                <input id="price" name="price" placeholder="Price" type="text" class="form-control" value="<?php echo set_value('price', $product[0]->price); ?>" />
                                <span class="text-danger"><?php echo form_error('price'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row colbox">
                            <div class="col-md-4">
                                <label for="image" class="control-label">Image</label>
                            </div>
                            <div class="col-md-8">
                                <input id="image" name="image" placeholder="Image" type="text" class="form-control"  value="<?php echo set_value('image', $product[0]->image); ?>" />
                                <span class="text-danger"><?php echo form_error('image'); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-md-8 text-left">
                            <input id="btn_update" name="btn_update" type="submit" class="btn btn-primary" value="Actualizar" />
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
