<!doctype html>
<html>
    <head>
        <title>daftar mahasiswa</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px" class="text-center">Mahasiswa List</h2>
        <div class="row" style="margin-bottom: 10px; margin-top: 50px;">
			<div style="margin-bottom: 50px;">
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation"><a href="http://localhost/codeigniter/index.php/fakultas.html">Fakultas</a></li>
					<li role="presentation"><a href="http://localhost/codeigniter/index.php/jurusan">Jurusan</a></li>
					<li role="presentation"  class="active"><a href="http://localhost/codeigniter/index.php/mahasiswa.html">Mahasiswa</a></li>
				</ul>
			</div>

            <div class="col-md-4">
                <?php echo anchor(site_url('index.php/mahasiswa/create'),'Create', 'class="btn btn-success"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('index.php/mahasiswa/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('index.php/mahasiswa'); ?>" class="btn btn-warning">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-send"></i>&nbsp Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Mahasiswa</th>
		<th>Id Fakultas</th>
		<th>Id Jurusan</th>
		<th>Nama Mahasiswa</th>
		<th>Alamat</th>
		<th>Telpon</th>
		<th>Tgl Lahir</th>
		<th>Created At</th>
		<th>Created By</th>
		<th>Updated At</th>
		<th>Updated By</th>
		<th>Action</th>
            </tr><?php
            foreach ($mahasiswa_data as $mahasiswa)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $mahasiswa->id_mahasiswa ?></td>
			<td><?php echo $mahasiswa->id_fakultas ?></td>
			<td><?php echo $mahasiswa->id_jurusan ?></td>
			<td><?php echo $mahasiswa->nama_mahasiswa ?></td>
			<td><?php echo $mahasiswa->alamat ?></td>
			<td><?php echo $mahasiswa->telpon ?></td>
			<td><?php echo $mahasiswa->tgl_lahir ?></td>
			<td><?php echo $mahasiswa->created_at ?></td>
			<td><?php echo $mahasiswa->created_by ?></td>
			<td><?php echo $mahasiswa->updated_at ?></td>
			<td><?php echo $mahasiswa->updated_by ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('index.php/mahasiswa/read/'.$mahasiswa->nim),'Read'); 
				echo ' | '; 
				echo anchor(site_url('index.php/mahasiswa/update/'.$mahasiswa->nim),'Update'); 
				echo ' | '; 
				echo anchor(site_url('index.php/mahasiswa/delete/'.$mahasiswa->nim),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-danger">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>