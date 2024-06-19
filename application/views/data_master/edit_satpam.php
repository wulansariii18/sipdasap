<section class="content-header">
    <h1>
        Edit Data Satpam
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('Satpam/edit/'.$satpam->id_satpam); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>NIK</label>
                    <input class="form-control" name="nik" type="text" value="<?php echo $satpam->nama ?>">
                    <p class="text-red"><?php echo form_error('nik');?></p>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama" type="text" value="<?php echo $satpam->nama ?>">
                    <p class="text-red"><?php echo form_error('nama');?></p>
                </div>
                <div class="form-group">
                    <label>Tgl Lahir</label>
                    <input class="form-control" name="tgl_lahir" type="date" value="<?php echo $satpam->tgl_lahir ?>">
                    <p class="text-red"><?php echo form_error('tgl_lahir');?></p>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" type="text" value="<?php echo $satpam->alamat ?>">
                    <p class="text-red"><?php echo form_error('alamat');?></p>
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input class="form-control" name="no_telp" type="text" value="<?php echo $satpam->no_telp ?>">
                    <p class="text-red"><?php echo form_error('no_telp');?></p>
                </div>
                <div class="form-group">
                    <label>Tgl Perekrutan</label>
                    <input class="form-control" name="tgl_perekrutan" type="date" value="<?php echo $satpam->tgl_perekrutan ?>">
                    <p class="text-red"><?php echo form_error('tgl_perekrutan');?></p>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Satpam') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>
