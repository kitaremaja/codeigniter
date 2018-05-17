<!doctype html>
<html>
    <head>
        <title>buat mahasiswa</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top: 10px; margin-bottom:50px;">Mahasiswa <?php echo $button ?> :</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Mahasiswa <?php echo form_error('id_mahasiswa') ?></label>
            <input type="text" class="form-control" name="id_mahasiswa" id="id_mahasiswa" placeholder="Id Mahasiswa" value="<?php echo $id_mahasiswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Fakultas <?php echo form_error('id_fakultas') ?></label>
            <input type="text" class="form-control" name="id_fakultas" id="id_fakultas" placeholder="Id Fakultas" value="<?php echo $id_fakultas; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Id Jurusan <?php echo form_error('id_jurusan') ?></label>
            <input type="text" class="form-control" name="id_jurusan" id="id_jurusan" placeholder="Id Jurusan" value="<?php echo $id_jurusan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Mahasiswa <?php echo form_error('nama_mahasiswa') ?></label>
            <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa" placeholder="Nama Mahasiswa" value="<?php echo $nama_mahasiswa; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telpon <?php echo form_error('telpon') ?></label>
            <input type="text" class="form-control" name="telpon" id="telpon" placeholder="Telpon" value="<?php echo $telpon; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tgl Lahir <?php echo form_error('tgl_lahir') ?></label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" />
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
	    <input type="hidden" name="nim" value="<?php echo $nim; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('index.php/mahasiswa') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>