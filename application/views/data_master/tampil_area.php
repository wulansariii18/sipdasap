<section class="content-header">
	<h1>
	 Data Area Patroli
	</h1>
</section>

<section class="content">
  <ol class="breadcrumb" style="background-color: #f9f9f9; padding: 10px; border-radius: 5px;">
    <li class="breadcrumb-item">
        <a href="<?php echo base_url('Area/insert')?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> Tambah Data
        </a>
		<a href="<?php echo base_url('Area/print_satpam') ?>" class="btn btn-info">
   			 <i class="fa fa-print"></i> Print
		</a>
    </li>
</ol>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Area</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table id="satpamTable" class="table table-striped table-bordered table-hover" style="width:100%;">
                        <thead class="thead-dark" style="background-color: #4F81BD; color: white;">
						<tr>
							<th style="text-align: center;">NAMA</th>
							<th style="text-align: center;">ALAMAT</th>
							<th style="text-align: center;">NO TELP</th>
							<th style="text-align: center;">TGL MULAI KONTRAK</th>
                            <th style="text-align: center;">TGL AKHIR KONTRAK</th>
							<th style="text-align: center;">AKSI</th>
						</tr>
						</thead>

						<tbody>
							<?php
							foreach ($area as $data) {
							?>
								<tr>
									<td><?php echo $data->nama_area ?></td>
									<td><?php echo $data->alamat ?></td>
									<td><?php echo $data->no_telp ?></td>
									<td><?php echo $data->tgl_mulai_kontrak ?></td>
                                    <td><?php echo $data->tgl_akhir_kontrak ?></td>
									<td>
									 <a href="<?php echo base_url('Area/edit/'.$data->id_area);?>">
									   <button type="button" class="btn btn-primary btn-xs">Edit</button>
									</a>
									<a href="<?php echo base_url('Area/delete/' .$data->id_area);?>">
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


	  