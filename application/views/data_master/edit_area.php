<section class="content-header">
    <h1>
        Edit Data Area Patroli
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('Area/edit/'.$area->id_area); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" name="nama_area" type="text" value="<?php echo set_value('nama_area', $area->nama_area); ?>">
                    <p class="text-red"><?php echo form_error('nama_area');?></p>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat" type="text" value="<?php echo set_value('alamat', $area->alamat); ?>">
                    <p class="text-red"><?php echo form_error('alamat');?></p>
                </div>
                <div class="form-group">
                    <label>No Telp</label>
                    <input class="form-control" name="no_telp" type="text" value="<?php echo set_value('no_telp', $area->no_telp); ?>">
                    <p class="text-red"><?php echo form_error('no_telp');?></p>
                </div>
                <div class="form-group">
                    <label>Tgl Mulai Kontrak</label>
                    <input class="form-control" name="tgl_mulai_kontrak" type="date" value="<?php echo set_value('tgl_mulai_kontrak', $area->tgl_mulai_kontrak); ?>">
                    <p class="text-red"><?php echo form_error('tgl_mulai_kontrak');?></p>
                </div>
                <div class="form-group">
                    <label>Tgl Akhir Kontrak</label>
                    <input class="form-control" name="tgl_akhir_kontrak" type="date" value="<?php echo set_value('tgl_akhir_kontrak', $area->tgl_akhir_kontrak); ?>">
                    <p class="text-red"><?php echo form_error('tgl_akhir_kontrak');?></p>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Area') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>
