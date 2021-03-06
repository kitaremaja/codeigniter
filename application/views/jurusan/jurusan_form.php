<!doctype html>
<html>
    <head>
        <title>buat jurusan</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top: 10px; margin-bottom:50px;">Jurusan <?php echo $button ?> :</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Fakultas <?php echo form_error('id_fakultas') ?></label>
            <input type="text" class="form-control" name="id_fakultas" id="id_fakultas" placeholder="Id Fakultas" value="<?php echo $id_fakultas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Jurusan <?php echo form_error('nama_jurusan') ?></label>
            <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $nama_jurusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="date" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="date" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div><br>
	    <input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('index.php/jurusan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>