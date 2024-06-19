<section class="content-header">
	<h1>
	 Data Satpam
	</h1>
</section>

<section class="content">
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('Satpam/insert')?>"><i class="fa fa-plus"></i> Tambah Data</a></li>
  </ol>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h4 class="box-title">Satpam</h4>
        </div>

        <div class="table-responsive">
          <table id="satpamTable" class="table table-striped table-bordered" style="width:100%; border-collapse: collapse;">
            <thead class="thead-dark" style="background-color: #E6E6FA">
							<tr>
								<th>NIK</th>
								<th>Nama</th>
								<th>Tgl Lahir</th>
								<th>Alamat</th>
								<th>No Telp</th>
								<th>Tgl Perekrutan</th>
								<th>Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							foreach ($satpam as $data) {
							?>
								<tr>
									<td><?php echo $data->nik ?></td>
									<td><?php echo $data->nama ?></td>
									<td><?php echo $data->tgl_lahir ?></td>
									<td><?php echo $data->alamat ?></td>
									<td><?php echo $data->no_telp ?></td>
									<td><?php echo $data->tgl_perekrutan ?></td>
									<td>
									 <a href="<?php echo base_url('Satpam/edit/'.$data->id_satpam);?>">
									   <button type="button" class="btn btn-primary btn-xs">Edit</button>
									</a>
									<a href="<?php echo base_url('Satpam/delete/' .$data->id_satpam);?>">
										<button type="button" class="btn btn-primary btn-xs">Delete</button>
									</a>
								</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>

				<div>
					<?php echo $this->session->flashdata('pesan'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


	  