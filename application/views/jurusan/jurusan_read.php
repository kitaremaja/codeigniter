<!doctype html>
<html>
    <head>
        <title>lihat jurusan</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Jurusan Read</h2>
        <table class="table">
	    <tr><td>Id Fakultas</td><td><?php echo $id_fakultas; ?></td></tr>
	    <tr><td>Nama Jurusan</td><td><?php echo $nama_jurusan; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Created By</td><td><?php echo $created_by; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td>Updated By</td><td><?php echo $updated_by; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('index.php/jurusan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>