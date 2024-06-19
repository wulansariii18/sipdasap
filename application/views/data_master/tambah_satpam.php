<section class="content">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Form Data Satpam</h3>
    </div>
    <form role="form" action="<?php echo base_url('Satpam/insert'); ?>" method="post">
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>NIK</label>
              <input class="form-control" name="nik" type="text">
              <p class="text-red"><?php echo form_error('nik'); ?></p>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" name="nama" type="text">
              <p class="text-red"><?php echo form_error('nama'); ?></p>
            </div>
            <div class="form-group">
              <label>Tgl Lahir</label>
              <input class="form-control" name="tgl_lahir" type="date">
              <p class="text-red"><?php echo form_error('tgl_lahir'); ?></p>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input class="form-control" name="alamat" type="text">
              <p class="text-red"><?php echo form_error('alamat'); ?></p>
            </div>
            <div class="form-group">
              <label>No Telp</label>
              <input class="form-control" name="no_telp" type="text">
              <p class="text-red"><?php echo form_error('no_telp'); ?></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Jabatan</label>
              <input class="form-control" name="jabatan" type="text">
              <p class="text-red"><?php echo form_error('jabatan'); ?></p>
            </div>
            <div class="form-group">
              <label>Tgl Perekrutan</label>
              <input class="form-control" name="tgl_perekrutan" type="date">
              <p class="text-red"><?php echo form_error('tgl_perekrutan'); ?></p>
            </div>
            <div class="form-group">
              <label>Pendidikan Terakhir</label>
              <input class="form-control" name="pendidikan_terakhir" type="text">
              <p class="text-red"><?php echo form_error('pendidikan_terakhir'); ?></p>
            </div>
            <div class="form-group">
              <label>Area</label>
              <select class="form-control" name="area">
                <option value="">Pilih Area</option>
                <?php foreach ($area as $a): ?>
                  <option value="<?php echo $a->nama_area; ?>"><?php echo $a->nama_area; ?></option>
                <?php endforeach; ?>
              </select>
              <p class="text-red"><?php echo form_error('area'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url('Satpam') ?>" class="btn btn-primary">Batal</a>
      </div>
    </form>
  </div>
</section>