<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Satpam</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style>
    .content {
      margin: 20px;
    }
    .box {
      background: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .box-primary {
      border-top-color: #3c8dbc;
    }
    .box-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .box-footer {
      text-align: center;
    }
    .text-red {
      color: red;
    }
  </style>
</head>
<body>

<section class="content-header">
    <h1>Edit Data Satpam</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('Satpam/edit/'.$satpam->id_satpam); ?>" method="post">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIK</label>
                            <input class="form-control" name="nik" type="text" value="<?php echo set_value('nik', $satpam->nik); ?>">
                            <?php echo form_error('nik', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" type="text" value="<?php echo set_value('nama', $satpam->nama); ?>">
                            <?php echo form_error('nama', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Tgl Lahir</label>
                            <input class="form-control" name="tgl_lahir" type="date" value="<?php echo set_value('tgl_lahir', $satpam->tgl_lahir); ?>">
                            <?php echo form_error('tgl_lahir', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input class="form-control" name="alamat" type="text" value="<?php echo set_value('alamat', $satpam->alamat); ?>">
                            <?php echo form_error('alamat', '<p class="text-red">', '</p>'); ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>No Telp</label>
                            <input class="form-control" name="no_telp" type="text" value="<?php echo set_value('no_telp', $satpam->no_telp); ?>">
                            <?php echo form_error('no_telp', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <input class="form-control" name="jabatan" type="text" value="<?php echo set_value('jabatan', $satpam->jabatan); ?>">
                            <?php echo form_error('jabatan', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Tgl Perekrutan</label>
                            <input class="form-control" name="tgl_perekrutan" type="date" value="<?php echo set_value('tgl_perekrutan', $satpam->tgl_perekrutan); ?>">
                            <?php echo form_error('tgl_perekrutan', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <input class="form-control" name="pendidikan_terakhir" type="text" value="<?php echo set_value('pendidikan_terakhir', $satpam->pendidikan_terakhir); ?>">
                            <?php echo form_error('pendidikan_terakhir', '<p class="text-red">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Area</label>
                            <select name="area" class="form-control">
                                <?php foreach ($area as $a): ?>
                                    <option value="<?php echo $a->nama_area; ?>" <?php echo ($a->nama_area == $satpam->area) ? 'selected' : ''; ?>><?php echo $a->nama_area; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?php echo form_error('area', '<p class="text-red">', '</p>'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Satpam') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
