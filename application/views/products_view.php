<html>
<head>
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link the bootstrap css file-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">

    <style>
    .centered, .centered th {
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr class="centered">
                            <th>#</th>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($prodlist); $i++) { ?>
                            <tr>
                                <td class="centered"><?php echo ($i+1); ?></td>
                                <td class="centered"><?php echo $prodlist[$i]->id; ?></td>
                                <td><?php echo $prodlist[$i]->name; ?></td>
                                <td>$<?php echo $prodlist[$i]->price; ?></td>
                                <td><?php echo $prodlist[$i]->image; ?></td>
                                <td class="centered"><a href="<?php echo base_url("index.php/products/update/".$prodlist[$i]->id); ?>">Edit</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
    </html>
