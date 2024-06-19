<section class="content-header">
    <h1>
        Tambah Data Satpam
    </h1>
</section>

<section class="content">
    <div class="box box-primary">

        <form role="form" action="<?php echo base_url('Satpam/insert'); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" name="nik" type="text">
                    <p class="text-red"><?php echo form_error('nik'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" type="text">
                    <p class="text-red"><?php echo form_error('nama'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>
                <div class="form-group">
                    <label>Tgl Lahir</label>
                    <input class="form-control" name="tgl_lahir" type="date">
                    <p class="text-red"><?php echo form_error('tgl_lahir'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" type="text">
                    <p class="text-red"><?php echo form_error('alamat'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input class="form-control" name="no_telp" type="text">
                    <p class="text-red"><?php echo form_error('no_telp'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>
                <div class="form-group">
                    <label>Tgl Perekrutan</label>
                    <input class="form-control" name="tgl_perekrutan" type="date">
                    <p class="text-red"><?php echo form_error('tgl_perekrutan'); ?></p> <!-- Perbaikan: tambahkan echo -->
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo base_url('Satpam') ?>" class="btn btn-primary">Batal</a>
                </div>
        </form>
    </div>
</section>
